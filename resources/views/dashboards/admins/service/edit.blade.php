@extends('layouts.components.master')
@section('content')
    <a class="btn btn-primary m-3" href="{{ url()->previous() }}">ย้อนกลับ</a>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">บริการ</h4>
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
                                action="{{ route('admin.service.update', $data->id) }}">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">เเก้ไขข้อมูลบริการ</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">ชื่อบริการ</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->service }}" name="service"
                                                class="form-control" id="fname">
                                            @error('service')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">ราคา</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="price"
                                                value="{{ $data->price }}">
                                            @error('price')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-right control-label col-form-label">สถานะ</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="form-control" style="height: 36px;width: 100%;">
                                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>เปิดการใช้งาน
                                                </option>
                                                <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>ปิดการใช้งาน
                                                </option>
                                            </select>
                                            @error('status')
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
