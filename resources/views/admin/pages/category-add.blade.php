@extends('master')
@section('content')
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh Sách Danh Mục</li>
        <li class="breadcrumb-item"><a href="#">Add category</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo Mới Danh Mục</h3>
          <div class="tile-body">
            <form class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Tên Danh Mục</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Loại Danh Mục</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn Loại Danh Mục --</option>
                  <option>Danh Mục Nam</option>
                  <option>Danh Mục Nữ</option>
                </select>
              </div>
          </div>
          <td class="table-td-center">
            <button class="btn btn-success">Lưu</button>
            <button class="btn btn-danger">Hủy</button>
          </td>
        </div>
@endsection
