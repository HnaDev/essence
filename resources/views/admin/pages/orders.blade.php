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
                                <th>ID Đơn Hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                <th>Thời Gian Khởi Tạo</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                @foreach ($item->getNameOrder_details as $key)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->Get_userName->full_name }}</td>
                                        <td> {{ $key->name }}</td>
                                        <td>{{ $key->quantity }}</td>
                                        <td>{{ number_format($key->unit_price) }}đ</td>
                                        <td><span class="badge bg-success">Hoàn thành</span></td>
                                        <td>{{ $item->created_at }}</td>

                                        <td>
                                            <a href="{{route('admin.view_product',$key->id)}}" class="btn btn-info">Chi Tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
