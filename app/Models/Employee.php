<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'employee_id', 'address', 'position', 'phone', 'email', 'photo'];


    public function avatar()
    {
        if (empty($this->photo) || $this->photo = "undefined")
            return asset("no-image.png");
        return asset("storage/images/" . $this->photo);
    }
}
