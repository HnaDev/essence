@extends('master')
@section('content')
    <section class="invoice">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Chi Tiết Đơn Hàng</b></a></li>
            </ul>
        </div>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                </address>
            </div>

            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                </address>
            </div>

            <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div>

        </div>


        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tên Khách Hàng</th>
                            <th>Số Lượng</th>
                            <th>Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Mô Tả</th>
                            <th>Tạm Tính</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_details as $value)
                            <tr>
                                <td>{{ $value->order->Get_userName->full_name }}</td>
                                <td>{{ $value->quantity }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ number_format($value->unit_price) }}đ</td>
                                <td>{{ $value->order->note }}</td>
                                <td>{{ number_format($value->unit_price) }}đ</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="5">Phí Vận Chuyển</th>
                            <th>30.000đ</th>
                        </tr>
                        <tr>
                            <th colspan="5">Tổng Tiền</th>
                            <th class="text-danger">{{ number_format($value->order->total_price) }}đ</th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-6">
                <div class="table-responsive">
                    <form action="" method="post">
                        @csrf
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value="1">Đang Xử Lý</option>
                            <option value="2">Hoàn Thành</option>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Cập Nhật" name="" id="" style="margin-top:10px">
                            </div>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
