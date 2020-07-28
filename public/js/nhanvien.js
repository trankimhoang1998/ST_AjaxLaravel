$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'api/nhanviens',
        type: 'get',
        dataType: 'json',
        success: function (response) {
            var len = 0;
            $('#nhanviens-list').empty();
            if (response != null) {
                len = response.nhanvien.length;
            }

            if (len > 0) {
                console.log(response);
                for (var i = 0; i < len; i++) {
                    var id = response.nhanvien[i].id;
                    var name = response.nhanvien[i].name;
                    var phone = response.nhanvien[i].phone;
                    var email = response.nhanvien[i].email;
                    var address = response.nhanvien[i].address;

                    var nhanvien = '<tr id="nhanvien' + id + '"><td>' + id + '</td><td>' + name + '</td><td>' + phone + '</td><td>' + email + '</td><td>' + address + '</td>';
                    nhanvien += '<td><a onclick="event.preventDefault();editNhanvienForm(' + id + ');" href="#" class="edit open-modal" data-toggle="modal" value="' + id + '"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                    nhanvien += '<a onclick="event.preventDefault();deleteNhanvienForm(' + id + ');" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td></tr>';

                    $("#nhanviens-list").append(nhanvien);
                }
            } else {
                var nhanvien = "<tr>" +
                    "<td align='center' colspan='6'>No record found.</td>" +
                    "</tr>";

                $("#nhanviens-list").append(nhanvien);
            }
        }
    });
});

$("#btn-add").click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: 'api/nhanviens',
        data: {
            name: $("#frmAddNhanvien input[name=name]").val(),
            phone: $("#frmAddNhanvien input[name=phone]").val(),
            email: $("#frmAddNhanvien input[name=email]").val(),
            address: $("#frmAddNhanvien input[name=address]").val(),
        },
        dataType: 'json',
        success: function (data) {
            $('#frmAddNhanvien').trigger("reset");
            $("#frmAddNhanvien .close").click();
            console.log(data);
            // window.location.reload();
            var nhanvien = '<tr id="nhanvien' + data.nhanvien.id + '"><td>' + data.nhanvien.id + '</td><td>' + data.nhanvien.name + '</td><td>' + data.nhanvien.phone + '</td><td>' + data.nhanvien.email + '</td><td>' + data.nhanvien.address + '</td>';
            nhanvien += '<td><a onclick="event.preventDefault();editNhanvienForm(' + data.nhanvien.id + ');" href="#" class="edit open-modal" data-toggle="modal" value="' + data.nhanvien.id + '"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
            nhanvien += '<a onclick="event.preventDefault();deleteNhanvienForm(' + data.nhanvien.id + ');" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td></tr>';

            $("#nhanviens-list").append(nhanvien);
        },
        error: function (data) {
            var errors = $.parseJSON(data.responseText);
            $('#add-nhanvien-errors').html('');
            $.each(errors.messages, function (key, value) {
                $('#add-nhanvien-errors').append('<li>' + value + '</li>');
            });
            $("#add-error-bag").show();
        }
    });
});

$("#btn-edit").click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'PUT',
        url: 'api/nhanviens/' + $("#frmEditNhanvien input[name=nhanvien_id]").val(),
        data: {
            name: $("#frmEditNhanvien input[name=name]").val(),
            phone: $("#frmEditNhanvien input[name=phone]").val(),
            email: $("#frmEditNhanvien input[name=email]").val(),
            address: $("#frmEditNhanvien input[name=address]").val(),
        },
        dataType: 'json',
        success: function (data) {
            $('#frmEditNhanvien').trigger("reset");
            $("#frmEditNhanvien .close").click();
            //window.location.reload();
            var nhanvien = '<tr id="nhanvien' + data.nhanvien.id + '"><td>' + data.nhanvien.id + '</td><td>' + data.nhanvien.name + '</td><td>' + data.nhanvien.phone + '</td><td>' + data.nhanvien.email + '</td><td>' + data.nhanvien.address + '</td>';
            nhanvien += '<td><a onclick="event.preventDefault();editNhanvienForm(' + data.nhanvien.id + ');" href="#" class="edit open-modal" data-toggle="modal" value="' + data.nhanvien.id + '"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
            nhanvien += '<a onclick="event.preventDefault();deleteNhanvienForm(' + data.nhanvien.id + ');" href="#" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td></tr>';

            $('#nhanvien'+data.nhanvien.id).replaceWith(nhanvien);
        },
        error: function (data) {
            var errors = $.parseJSON(data.responseText);
            $('#edit-nhanvien-errors').html('');
            $.each(errors.messages, function (key, value) {
                $('#edit-nhanvien-errors').append('<li>' + value + '</li>');
            });
            $("#edit-error-bag").show();
        }
    });
});

$("#btn-delete").click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var id = $("#frmDeleteNhanvien input[name=nhanvien_id]").val();
    $.ajax({
        type: 'DELETE',
        url: 'api/nhanviens/' + id,
        dataType: 'json',
        success: function (data) {
            $("#frmDeleteNhanvien .close").click();
            $('#nhanvien'+id).remove();
        },
        error: function (data) {
            console.log(data);
        }
    });
});

function addNhanvienForm() {
    $(document).ready(function () {
        $("#add-error-bag").hide();
        $('#addNhanvienModal').modal('show');
    });
}

function editNhanvienForm(id) {
    //console.log(id);
    $.ajax({
        type: 'GET',
        url: 'api/nhanviens/' + id,
        success: function (data) {
            //console.log(data);
            $("#edit-error-bag").hide();
            $("#frmEditNhanvien input[name=name]").val(data.nhanvien.name);
            $("#frmEditNhanvien input[name=phone]").val(data.nhanvien.phone);
            $("#frmEditNhanvien input[name=email]").val(data.nhanvien.email);
            $("#frmEditNhanvien input[name=address]").val(data.nhanvien.address);
            $("#frmEditNhanvien input[name=nhanvien_id]").val(data.nhanvien.id);
            $('#editNhanvienModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function deleteNhanvienForm(id) {
    $.ajax({
        type: 'GET',
        url: 'api/nhanviens/' + id,
        success: function (data) {
            $("#frmDeleteNhanvien #delete-title").html("Delete Nhân Viên (" + data.nhanvien.name + ")?");
            $("#frmDeleteNhanvien input[name=nhanvien_id]").val(data.nhanvien.id);
            $('#deleteNhanvienModal').modal('show');
        },
        error: function (data) {
            console.log(data);
        }
    });
}
