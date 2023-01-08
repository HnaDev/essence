@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Thương Hiệu</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{route('admin.brands_add')}}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới Thương Hiệu</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Thương Hiệu</th>
                                <th>Logo</th>
                                <th>Trạng Thái</th>
                                <th>Tính Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1</td>
                                <td>dior</td>
                                <td>Hình ảnh logo</td>
                                <td>Đang bán</td>
                                <td class="table-td-center">
                                  <button class="btn btn-success">Sửa</button>
                                  <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
