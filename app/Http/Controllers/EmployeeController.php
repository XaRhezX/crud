<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public $size = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->size) $this->size = $request->size;
        $data = Employee::query()
            ->where('name', 'like', '%' . $request->search . '%')
            ->orwhere('employee_id', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'desc')->paginate($this->size);
        return view('employee.index', [
            'data' => $data,
            'search' => $request->search
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id' => 'nullable',
            'name' => 'required',
            'employee_id' => 'required',
            'position' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'photo'  => 'nullable'
        ];
        $data = $request->only(
            ['id', 'name', 'employee_id', 'position', 'address', 'phone', 'email', 'photo']
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->messages()
            ]);
        } else {

            $employee = Employee::updateOrCreate([
                'id' => $request->id
            ], $data);
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $name = md5($file . microtime()) . '.' . $file->extension();
                $file->storeAs('public/images', $name);
                $employee->update([
                    'photo' => $name
                ]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Data inserted successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.view', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return response()->json([
            'data' => $employee
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json([
            'message' => 'Data deleted successfully!',
            'redirect' => route('employee.index')
        ]);
    }
}
