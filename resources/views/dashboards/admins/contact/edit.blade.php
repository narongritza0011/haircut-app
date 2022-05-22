@extends('layouts.components.master')
@section('content')
    <a class="btn btn-primary m-3" href="{{ url()->previous() }}">ย้อนกลับ</a>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">ที่อยู่</h4>
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
                                action="{{ route('admin.contact.update', $data->id) }}">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">เเก้ไขข้อมูลที่อยู่</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">เวลาเปิด-ปิดร้าน</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->work }}" name="work"
                                                class="form-control">
                                            @error('work')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">เบอร์</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->tel }}" name="tel"
                                                class="form-control">
                                            @error('tel')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->email }}" name="email"
                                                class="form-control">
                                            @error('email')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">เเผนที่</label>
                                        <div class="col-sm-9">

                                            <textarea class="form-control" name="map" id="" cols="30" rows="10">{{ $data->map }}</textarea>
                                            @error('map')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">ที่อยู่</label>
                                        <div class="col-sm-9">

                                            <textarea class="form-control" name="address" id="" cols="30" rows="10">{{ $data->address }}</textarea>
                                            @error('address')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">Facebook</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->fb }}" name="fb"
                                                class="form-control">
                                            @error('fb')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">IG</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->ig }}" name="ig"
                                                class="form-control">
                                            @error('ig')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
