<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar"
            src="https://toplist.vn/images/800px/nice-studio-915688.jpg" width="50px" height="80px" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><b>{{Auth::user()->full_name}}</b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
        </div>
    </div>
    <hr>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="{{route('admin.index')}}">
                <i class="app-menu__icon fa-solid fa-gauge" style="font-size: 22px;"></i>
                <span class="app-menu__label">Bảng Điều Khiển</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item " href="{{route('admin.account')}}">
                <i class="app-menu__icon fa-solid fa-users"></i>
                <span class="app-menu__label">Quản Lý Tài Khoản</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.category')}}">
                <i class="app-menu__icon fa-solid fa-list"></i>
                <span class="app-menu__label">Quản Lý Danh Mục</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.product')}}">
                <i class="app-menu__icon fa-solid fa-shop"></i>
                <span class="app-menu__label">Quản Lý Sản Phẩm</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.orders')}}">
                <i class="app-menu__icon fa-solid fa-cart-arrow-down"></i>
                <span class="app-menu__label">Quản Lý Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{route('admin.brands')}}">
                <i class="app-menu__icon fa-solid fa-n"></i>
                <span class="app-menu__label">Quản Lý Nhãn Hàng</span>
            </a>
        </li>
        {{-- <li>
            <a class="app-menu__item" href="{{route('admin.banners')}}">
                <i class="app-menu__icon fa-solid fa-b"></i>
<<<<<<< HEAD
                <span class="app-menu__label">Quản lý banners</span>
            </a>
        </li> --}}
        {{-- <li>
            <a class="app-menu__item" href="{{route('admin.comments')}}">
                <i class="app-menu__icon fa-solid fa-comments"></i>
                <span class="app-menu__label">Quản lý Comment</span>
=======
                <span class="app-menu__label">Quản Lý Banners</span>
>>>>>>> f7e07087f3be252c225cdd12e9b3307deee2d3fa
            </a>
        </li> --}}
        <li>
            <a class="app-menu__item" href="{{route('admin.attribute')}}">
                <i class="app-menu__icon fa-solid fa-palette"></i>
                <span class="app-menu__label">Quản Lý Thuộc Tính</span>
            </a>
        </li>
    </ul>
</aside>
<!-- end sidebar -->
