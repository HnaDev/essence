@extends('master_user')
@section('register')
    <section class="h-100 bg-image" style="background-color: #eee;">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <h2 class="text-uppercase text-center mb-2">Tạo Tài Khoản</h2>
                                <form method="post" action="">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="form3Example1cg">Họ Và Tên</label>
                                        <input name="full_name" type="text" id="form3Example1cg"
                                            class="form-control form-control-lg" />
                                        @error('full_name')
                                            <div class="alert alert-danger cl-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="text" name="email" id="form3Example3cg"
                                            class="form-control form-control-lg" />
                                            @error('email')
                                            <div class="alert alert-danger cl-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Địa Chỉ</label>
                                        <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        @error('address')
                                            <div class="alert alert-danger cl-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-outline mb-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Số Điện Thoại</label>
                                        <input class="form-control" name="phone" id="exampleFormControlTextarea1">
                                        @error('phone')
                                        <div class="alert alert-danger cl-red">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example4cg">Mật Khẩu</label>
                                        <input type="password" name="password" id="form3Example4cg"
                                            class="form-control form-control-lg" />
                                            @error('password')
                                            <div class="alert alert-danger cl-red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="form3Example4cdg">Nhập Lại Mật Khẩu</label>
                                        <input type="password" name="confirmpassword" id="form3Example4cdg"
                                            class="form-control form-control-lg" />
                                            @error('confirmpassword')
                                            <div class="alert alert-danger cl-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-outline mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="role" type="radio" value="1"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="role" type="radio" value="0"
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Người Dùng
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="d-flex flex-column justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-2 text-body">Đăng Kí
                                        </button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản ?
                                        <a href="{{route('login')}}" class="fw-bold text-body"><u>Đăng Nhập Tại Đây !</u></a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="{{ url('assets-user') }}/css/style.css">
@endsection
