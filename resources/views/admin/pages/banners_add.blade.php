@extends('master')
@section('content')
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh Sasch Banners</li>
        <li class="breadcrumb-item"><a href="#">Thêm Mới Banner</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Mới Banner</h3>
          <div class="tile-body">
            <form class="row" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group col-md-3">
                <label class="control-label">Tên Banner</label>
                <input class="form-control" type="text" name='name'>
                @error('name')
                <div class="alert alert-danger cl-red">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                <select class="form-control"name='status'>
                  <option>-- Chọn trạng thái--</option>
                  <option value='0'>Ẩn</option>
                  <option value='1'>Hiện</option>
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Danh Mục</label>
                <select class="form-control" name='category_id'>
                  <option>-- Chọn tình trạng --</option>
                  @foreach ($Category as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                 
                </select>
              </div>
              <div class="form-group col-md-12 m-3">
                <label class="control-label pr-1">Ảnh:</label>
                <input type="file" id="" name="banner_img"/>
                @error('banner_img')
                  <div class="alert alert-danger cl-red">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="table-td-center">
              <button class="btn btn-success" type="submit">Lưu</button>
               
              <a href="{{ route('admin.banners') }}" type="submit" class="btn btn-danger">>Hủy</a>
            </div>
        </form>
        </div>
@endsection
