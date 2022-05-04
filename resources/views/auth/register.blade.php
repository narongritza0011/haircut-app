@include('layouts.components.header')

<body>
    <div class="main-wrapper">

        @include('layouts.components.loader')


        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="assets/images/logo.png" alt="logo" /></span>
                    </div>
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" id="name" value="{{ old('name') }}" autocomplete="name"
                                        autofocus
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        name="name" placeholder="ชื่อ-นามสกุล" aria-label="Username"
                                        aria-describedby="basic-addon1">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i
                                                class="ti-user"></i></span>
                                    </div>
                                    <input type="text" id="tel" value="{{ old('tel') }}" autocomplete="tel" autofocus
                                        class="form-control form-control-lg @error('tel') is-invalid @enderror"
                                        name="tel" placeholder="เบอร์โทร" aria-label="tel"
                                        aria-describedby="basic-addon1">

                                    @error('tel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i
                                                class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" id="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        autocomplete="email" name="email" placeholder="บัญชีผู้ใช้"
                                        aria-label="Username" value="{{ old('email') }}"
                                        aria-describedby="basic-addon1">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        autocomplete="new-password" name="password" placeholder="รหัสผ่าน"
                                        aria-label="Password" aria-describedby="basic-addon1">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i
                                                class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" id="password-confirm"
                                        name="password_confirmation" autocomplete="new-password"
                                        placeholder=" ยืนยันรหัสผ่าน" aria-label="Password"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">สมัครสมาชิก</button>
                                    </div>
                                    <div class="p-t-20">
                                        <span class="text-white">มีบัญชีผู้ใช้อยู่เเล้ว
                                            ?</span>
                                        <a class="text-success" href="{{ route('login') }}">เข้าสู่ระบบ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
</body>

</html>
