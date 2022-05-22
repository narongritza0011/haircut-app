@extends('layouts.components.master')
@section('content')
    {{-- <a class="btn btn-primary m-3" href="{{ url()->previous() }}">ย้อนกลับ</a> --}}
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">บัญชีของฉัน</h4>
                <div class="ml-auto text-right">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>

                            </div>
                        </div>


                        <div class="card">
                            <form class="form-horizontal" method="POST"
                                action="{{ route('admin.profile.update', Auth::user()->id) }}">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">เเก้ไขข้อมูลบัญชีของฉัน</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">ชื่อ-นามสกุล</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ Auth::user()->name }}" name="name"
                                                class="form-control" id="fname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">บัญชีผู้ใช้</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email"
                                                value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">เบอร์ติดต่อ</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tel"
                                                value="{{ Auth::user()->tel }}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">รหัสผ่าน</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                    </div>


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endsection
