@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-heading-divider">Data Karyawan
                <button class="uk-button uk-button-primary uk-align-right" uk-toggle="target: #modalEmployee"
                    id="createNewEmployee">
                    <span uk-icon="icon: plus-circle"></span>
                    Tambah
                </button>
            </h1>
            <div class="uk-overflow-auto">
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" id="seacrhEmployee" name="seacrhEmployee"
                            value="{{ $search }}">
                    </div>
                </div>
                <table class="uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Alamat</th>
                            {{-- <th>No. Telepon</th>
                                <th>Jabatan</th>
                            <th>Email</th>
                            <th>Di Buat</th>
                            <th>Foto</th> --}}
                            <th>Di Perbarui</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($data as $row)
                            <tr>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->employee_id }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->name }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->address }}</td>
                                {{-- <td class="uk-table-shrink uk-text-nowrap"> {{ $row->phone }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->position }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->email }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->created_at }}</td>
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->avatar() }}</td> --}}
                                <td class="uk-table-shrink uk-text-nowrap"> {{ $row->updated_at }}</td>
                                <td class="uk-table-shrink uk-text-nowrap">
                                    <p uk-margin data-id="{{ $row->id }}">
                                        <a href="{{ route('employee.show', $row->id) }}"
                                            class="uk-button uk-button-primary uk-button-small" uk-icon="icon: search"></a>
                                        <button class="uk-button uk-button-default uk-button-small"
                                            uk-icon="icon: file-edit" id="editEmployee" data-id="{{ $row->id }}"
                                            data-target="#modalEmployee" uk-toggle="target: #modalEmployee"></button>
                                        <button class="uk-button uk-button-danger uk-button-small" uk-icon="icon: trash"
                                            id="deleteEmployee" data-id="{{ $row->id }}"></button>
                                    </p>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan='10'>Tidak Ada Data Karyawan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {!! $data->onEachSide(2)->links('pagination::ui-kit') !!}
        </div>
    </div>
    @include('employee.modal')
@endsection

@push('scripts')
    <script>
        var store = {!! json_encode(route('employee.store')) !!}
    </script>
@endpush
