@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh Sách Comment</li>
            <li class="breadcrumb-item"><a href="#">Thêm Comment</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo Mới Comment</h3>
                <div class="tile-body">
                    <form class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Trả Lời Câu Hỏi</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Người Dùng</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn Người dùng --</option>
                                <option>Người Dùng 1</option>
                                <option>Người Dùng 2</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Sản Phẩm</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn Sản Phẩm --</option>
                                <option>Sản Phẩm Dành Cho Nam</option>
                                <option>Sản Phẩm Dành Cho Nữ</option>
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
                </div>
                <div class="table-td-center">
                    <button class="btn btn-success">Lưu </button>
                    <button class="btn btn-danger">Hủy</button>
                </div>
            </div>
        @endsection
