@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-heading-divider">{{ $employee->name }}</h1>
            <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                <div class="uk-margin">
                    <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light"
                        data-src="{{ $employee->avatar(0) }}" uk-img="loading: eager"></div>
                </div>
                <div>
                    <div class="uk-form-horizontal" enctype="multipart/form-data" id="view_formModal">
                        <div class="uk-margin">
                            <input type="hidden" name="id" id="view_id">
                            <label class="uk-form-label">NIP</label>
                            <div class="uk-form-controls">
                                <input name="employee_id" id="view_employee_id"
                                    class="uk-input uk-form-width-large uk-form-small" type="text"
                                    placeholder="Masukan Nomor Induk Pegawai" readonly
                                    value="{{ $employee->employee_id }}">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Nama</label>
                            <div class="uk-form-controls">
                                <input name="name" id="view_name" class="uk-input uk-form-width-large uk-form-small"
                                    type="text" placeholder="Masukan Nama Pegawai" readonly value="{{ $employee->name }}">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Jabatan</label>
                            <div class="uk-form-controls">
                                <input name="position" id="view_position" class="uk-input uk-form-width-large uk-form-small"
                                    type="text" placeholder="Masukan Jabatan Pegawai" readonly
                                    value="{{ $employee->position }}">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Alamat</label>
                            <div class="uk-form-controls">
                                <textarea name="address" id="view_address" class="uk-textarea uk-form-width-large uk-form-small"
                                    placeholder="Masukan Alamat Pegawai" readonly>{{ $employee->address }}</textarea>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">No Telepon</label>
                            <div class="uk-form-controls">
                                <input name="phone" id="view_phone" class="uk-input uk-form-width-large uk-form-small"
                                    type="text" placeholder="Masukan Telepon Pegawai" readonly
                                    value="{{ $employee->phone }}">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label">Email</label>
                            <div class="uk-form-controls">
                                <input name="email" id="view_email" class="uk-input uk-form-width-large uk-form-small"
                                    type="text" placeholder="Masukan Email Pegawai" readonly
                                    value="{{ $employee->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-align-right" data-id="{{ $employee->id }}">
                <a href="{{ route('employee.index') }}" class="uk-button uk-button-primary">
                    Kembali
                </a>
                <button class="uk-button uk-button-default" uk-icon="icon: file-edit" id="editEmployee"
                    data-id="{{ $employee->id }}" data-target="#modalEmployee"
                    uk-toggle="target: #modalEmployee">Edit</button>
                <button class="uk-button uk-button-danger " uk-icon="icon: trash" id="deleteEmployee"
                    data-id="{{ $employee->id }}">Hapus</button>
            </div>
        </div>
    </div>
    @include('employee.modal')
@endsection

@push('scripts')
    <script>
        var store = {!! json_encode(route('employee.store')) !!}
    </script>
@endpush
