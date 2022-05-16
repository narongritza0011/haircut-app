<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo-img">
                            <a href="/">
                                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu_wrap d-none d-lg-block">
                            <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                <div class="main-menu">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="/">หน้าหลัก</a></li>
                                            <li><a href="/service">บริการ</a></li>
                                            <li><a href="/about">เกี่ยวกับ</a></li>
                                            <li><a href="/contact">ติดต่อ</a></li>
                                            <li><a href="#">อื่นๆ <i class="ti-angle-down"></i></a>



                                                @if (Route::has('login'))
                                                    <ul class="submenu">

                                                        @auth
                                                            <li><a href="{{ route('admin.dashboard') }}">ผู้ดูเเล</a></li>
                                                        @else
                                                            <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>

                                                            @if (Route::has('register'))
                                                                <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
                                                            @endif
                                                        @endauth

                                                    </ul>
                                                @endif

                                                {{-- <li><a href="/register">สมัครสมาชิก</a></li> --}}

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="book_room">
                                    <div class="book_btn">
                                        <a class="popup-with-form" href="#test-form">จองคิวตัดผม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
