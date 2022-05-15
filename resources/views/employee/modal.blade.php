<div id="modalEmployee" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title" id="title">Data Pegawai</h2>
        </div>
        <div class="uk-modal-body">
            <form class="uk-form-horizontal" enctype="multipart/form-data" id="formModal">
                <div class="uk-margin">
                    <input type="hidden" name="id" id="id">
                    <label class="uk-form-label">NIP</label>
                    <div class="uk-form-controls">
                        <input name="employee_id" id="employee_id" class="uk-input uk-form-width-large uk-form-small"
                            type="text" placeholder="Masukan Nomor Induk Pegawai">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Nama</label>
                    <div class="uk-form-controls">
                        <input name="name" id="name" class="uk-input uk-form-width-large uk-form-small" type="text"
                            placeholder="Masukan Nama Pegawai">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Jabatan</label>
                    <div class="uk-form-controls">
                        <input name="position" id="position" class="uk-input uk-form-width-large uk-form-small"
                            type="text" placeholder="Masukan Jabatan Pegawai">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Alamat</label>
                    <div class="uk-form-controls">
                        <textarea name="address" id="address" class="uk-textarea uk-form-width-large uk-form-small"
                            placeholder="Masukan Alamat Pegawai"></textarea>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">No Telepon</label>
                    <div class="uk-form-controls">
                        <input name="phone" id="phone" class="uk-input uk-form-width-large uk-form-small" type="text"
                            placeholder="Masukan Telepon Pegawai">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Email</label>
                    <div class="uk-form-controls">
                        <input name="email" id="email" class="uk-input uk-form-width-large uk-form-small" type="text"
                            placeholder="Masukan Email Pegawai">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Foto</label>
                    <div class="uk-form-controls">
                        <div uk-form-custom="target: true">
                            <input name="photo" id="photo" class="uk-input uk-form-width-large uk-form-small"
                                type="file" placeholder="Masukan Foto Pegawai">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="uk-modal-footer">
            <button class="uk-button uk-button-default uk-button-small" uk-toggle="target: #modalEmployee">
                <span uk-icon="icon: close"></span>
                Batal
            </button>
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: plus-cirle"></span>
                <input type="submit" value="Submit" id="submit" class="uk-button uk-button-primary uk-button-small"
                    uk-toggle="target: #modalEmployee" uk-icon="icon: plus-cirle" id="submit">
            </div>
        </div>
    </div>
</div>
