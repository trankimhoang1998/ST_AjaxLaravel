<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>By Trần Kim Hoàng</title>
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <h2>Quản lý nhân viên</h2>
                <a onclick="event.preventDefault();addNhanvienForm();" href="#" class="btn btn-success" data-toggle="modal"><span>Add Nhân Viên</span></a>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody id="nhanviens-list" name="nhanviens-list">
            </tbody>
        </table>
    </div>
</div>
@include('nhanvien_add')
@include('nhanvien_edit')
@include('nhanvien_delete')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/nhanvien.js')}}"></script>
</body>
</html>
