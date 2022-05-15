
$(document).ready(function () {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //Insert employee data
    $("body").on("click", "#createNewEmployee", function (e) {
        e.preventDefault;
        $('#title').html("Tambah Data Karyawan");
        $('#id').val('');
        //$('#employeedata').trigger("reset");
    });

    //Save data into database
    $('body').on('click', '#submit', function (event) {
        event.preventDefault()
        var formData = new FormData();

        formData.append('id', $("#id").val());
        formData.append('name', $("#name").val());
        formData.append('employee_id', $("#employee_id").val());
        formData.append('position', $("#position").val());
        formData.append('address', $("#address").val());
        formData.append('phone', $("#phone").val());
        formData.append('email', $("#email").val());
        formData.append('photo', $("#photo")[0].files[0]);

        //var id = $("#id").val();
        //var name = $("#name").val();
        //var employee_id = $("#employee_id").val();
        //var position = $("#position").val();
        //var address = $("#address").val();
        //var phone = $("#phone").val();
        //var email = $("#email").val();
        //var photo = $("#photo")[0].files[0];

        $.ajax({
            url: store,
            type: "POST",
            enctype: 'multipart/form-data',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function (data) {
                UIkit.modal($('#modalEmployee')).hide();
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false
                });
                setTimeout(function () {
                    location.reload();
                }, 1000);
            },
            error: function (data) {
                console.log('Error......');
            }
        });
    });

    //Edit modal window
    $('body').on('click', '#editEmployee', function (event) {
        console.log('#editEmployee')
        event.preventDefault();
        var id = $(this).data('id');
        $.get(store + '/' + id + '/edit', function (data) {
            $('#title').html("Edit Data Karyawan");
            $('#id').val(data.data.id);
            $('#employee_id').val(data.data.employee_id);
            $('#name').val(data.data.name);
            $('#position').val(data.data.position);
            $('#address').val(data.data.address);
            $('#phone').val(data.data.phone);
            $('#email').val(data.data.email);
            //$('#photo').val(data.data.photo);
        })
    });

    //Deleteemployee
    $('body').on('click', '#deleteEmployee', function (event) {
        event.preventDefault();
        var id = $(this).attr('data-id');

        Swal.fire({
            title: "Yakin Hapus Data?",
            text: "Data akan terhapus dari database.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak, Bataklan!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: store + '/' + id,
                    type: 'DELETE',
                    data: {
                        id: id
                    },
                    success: function (response) {
                        Swal.fire(
                            'Perhatian!',
                            'Data Karyawan Berhasil di Hapus!',
                            'success'
                        );
                        setTimeout(function (response) {
                            location.replace(response.redirect);
                        }, 1000, response);
                    }
                });

            } else {
                Swal.fire("Cancelled", "Berhasil dibatalkan", "error");
            }
        });
        return false;
    });

    $('body').on('keypress', '#seacrhEmployee', function (event) {
        if (event.keyCode == 13) {
            var keyword = $("#seacrhEmployee").val();
            var oldURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
            var newUrl = oldURL + "?search=" + keyword;
            if (window.history != 'undefined' && window.history.pushState != 'undefined') {
                location.replace(newUrl);
            }
            return false;
        }
    });
});
