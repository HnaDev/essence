@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Tài Khoản Người Dùng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th width="150">Họ Và Tên</th>
                                <th width="300">Địa Chỉ</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Trạng Thái</th>
                                <th>Vai Trò</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nguyen Van a</td>
                                <td>Hồ Thị Thanh Ngân</td>
                                <td>155-157 Trần Quốc Thảo, Quận 3, Hồ Chí Minh </td>
                                <td>nguyenvana@gmail.com</td>
                                <td>nguoi dung</td>
                                <td>1</td>
                                <td class="table-td-center">
                                    <button class="btn btn-success">Sửa</button>
                                    <button class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
