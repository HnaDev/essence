@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MD0837</td>
                                <td>Triệu Thanh Phú</td>
                                <td>Ghế làm việc Zuno, Bàn ăn gỗ Theresa</td>
                                <td>2</td>
                                <td>9.400.000 đ</td>
                                <td><span class="badge bg-success">Hoàn thành</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MĐ8265</td>
                                <td>Nguyễn Thị Ngọc Cẩm</td>
                                <td>Ghế ăn gỗ Lucy màu trắng</td>
                                <td>1</td>
                                <td>3.800.000 đ</td>
                                <td><span class="badge bg-success">Hoàn thành</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>MT9835</td>
                                <td>Đặng Hoàng Phúc</td>
                                <td>Giường ngủ Jimmy, Bàn ăn mở rộng cao cấp Dolas, Ghế làm việc Zuno</td>
                                <td>3 </td>
                                <td>40.650.000 đ</td>
                                <td><span class="badge bg-success">Hoàn thành</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>ER3835</td>
                                <td>Nguyễn Thị Mỹ Yến</td>
                                <td>Bàn ăn mở rộng Gepa</td>
                                <td>1 </td>
                                <td>16.770.000 đ</td>
                                <td><span class="badge bg-info">Chờ thanh toán</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>AL3947</td>
                                <td>Phạm Thị Ngọc</td>
                                <td>Bàn ăn Vitali mặt đá, Ghế ăn gỗ Lucy màu trắng</td>
                                <td>2 </td>
                                <td>19.770.000 đ</td>
                                <td><span class="badge bg-warning">Đang giao hàng</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                <td>QY8723</td>
                                <td>Ngô Thái An</td>
                                <td>Giường ngủ Kara 1.6x2m</td>
                                <td>1 </td>
                                <td>14.500.000 đ</td>
                                <td><span class="badge bg-danger">Đã hủy</span></td>
                                <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                            class="fas fa-trash-alt"></i> </button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i
                                            class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
