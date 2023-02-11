@extends('master')
@section('content')
    <section class="invoice">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Chi Tiết Đơn Hàng</b></a></li>
            </ul>
        </div>
<<<<<<< HEAD
        <div class="row invoice-info d-flex">
            <div class="col-sm-6 invoice-col">
                From
                <address>
                    <strong>Admin, Inc.</strong><br>
                    250 Hoàng Quốc Việt<br>
                    Phone: (804) 123-5432<br>
                    Email: essence@gmail.com
                </address>
            </div>

            <div class="col-sm-6 invoice-col">
                To
                @foreach ($order_details as $value)
                    <address>
                        <strong>{{ $value->order->name }}</strong><br>
                        {{ $value->order->address }}<br>
                        Phone: {{ $value->order->phone }}<br>
                        Email: {{ $value->order->email }}
                    </address>
                @endforeach
            </div>
=======
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

>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
        </div>


        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
<<<<<<< HEAD
                            <th>MSĐH</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số Lượng</th>
                            <th>Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>size</th>
                            <th>Mô Tả</th>
                            <th>Phương Thức Thanh Toán</th>
=======
                            <th>Tên Khách Hàng</th>
                            <th>Số Lượng</th>
                            <th>Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Mô Tả</th>
>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
                            <th>Tạm Tính</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_details as $value)
                            <tr>
<<<<<<< HEAD
                                <td>{{ $value->order->id }}</td>
                                <td>{{ $value->order->name }}</td>
                                <td>{{ $value->quantity }}</td>
                                <td>{{ $value->name }}</td>
                                <td><img src="{{ url('upload.product') }}//{{ $value->pro->image }}" alt=""
                                        width="100px" height="100px"></td>
                                <td>{{ $value->size }}</td>
                                <td>{{ $value->order->note }}</td>
                                @if ($value->order->payment_method == 1)
                                    <td>Thanh Toán Khi Nhận Hàng</td>
                                @endif
                                <th>{{ number_format($value->unit_price) }}đ</th>
                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="8">Phí Vận Chuyển</th>
                            <th>30.000đ</th>
                        </tr>
                        <tr>
                            <th colspan="8">Tổng Đơn Hàng</th>
=======
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
>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
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
<<<<<<< HEAD
                            <option value="2">Đang Xử Lí</option>
                            <option value="3">Hoàn Thành</option>
                        </select>
                        <input type="submit" class="btn btn-primary" name="" value="Cập Nhật" id=""
                            style="margin-top: 10px">
                    </form>
                </div>
            </div>

        </div>


        <div class="row no-print">

=======
                            <option value="1">Đang Xử Lý</option>
                            <option value="2">Hoàn Thành</option>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Cập Nhật" name="" id="" style="margin-top:10px">
                            </div>
                        </select>
                    </form>
                </div>
            </div>
>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
        </div>
    </section>
@endsection
