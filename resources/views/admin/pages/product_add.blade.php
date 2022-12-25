@extends('master')
@section('content')
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <form class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Tên Sản Phẩm</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Giá</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Giá Khuyến Mại</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Xuất Sứ</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Năm Sản Xuất</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh Mục</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn danh mục --</option>
                  <option>Danh Mục Nam</option>
                  <option>Danh Mục Nữ</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Thương Hiệu</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn Thương hiệu --</option>
                  <option>Gucci</option>
                  <option>Chanel</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Khuyến Mại</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn Gía Khuyến mãi --</option>
                  <option>10%</option>
                  <option>20%</option>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô Tả</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
              </div>
              <div class="form-group col-md-12 p-3">
                <label class="control-label pr-1">Ảnh Sản Phẩm:</label>
                <input type="file" id="" name=""/>
              </div>
          </div>
          <div class="table-td-center">
            <button class="btn btn-success">Lưu</button>
            <button class="btn btn-danger">Hủy</button>
          </div>
        </div>
@endsection
