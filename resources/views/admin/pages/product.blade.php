@extends('master')
@section('content')
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="{{route('admin.product_add')}}" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới sản phẩm</a>
              </div>
            </div>
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Giá Khuyến Mại</th>
                  <th>Ảnh</th>
                  <th>Mô Tả</th>
                  <th>Trạng Thái</th>
                  <th>Xuất Sứ</th>
                  <th>Năm Sản Xuất</th>
                  <th>Danh Mục</th>
                  <th>Thương Hiệu</th>
                  <th>Khuyến Mại</th>
                  <th>Tính Năng</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sản Phẩm 1</td>
                  <td>20.000.000đ</td>
                  <td>18.000.000đ</td>
                  <td>
                    <img src="https://i.pinimg.com/564x/2b/3c/7f/2b3c7f865179d2fa774fc5ee79d38b79.jpg" width="100px"
                      alt="">
                  </td>
                  <td width="300px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, ut.</td>
                  <td>Còn Hàng</td>
                  <td>Việt Nam</td>
                  <td>2021</td>
                  <td>Danh mục áo</td>
                  <td>Zara</td>
                  <td>10%</td>
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
