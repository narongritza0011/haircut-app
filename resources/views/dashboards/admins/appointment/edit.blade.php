@extends('layouts.components.master')
@section('content')
    <a class="btn btn-primary m-3" href="{{ url()->previous() }}">ย้อนกลับ</a>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">เวลาจอง</h4>
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
                                action="{{ route('admin.appointment.update', $data->id) }}">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">เเก้ไขข้อมูลเวลาจอง</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">ชื่อ</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->name }}" name="name"
                                                class="form-control">
                                            @error('name')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">วัน</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $data->date }}" name="date"
                                                class="form-control">
                                            @error('date')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">เวลาจอง</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="default-select" name="time" required>

                                                @foreach ($t as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id == $data->time ? 'selected' : '' }}>
                                                        {{ $item->time }}</option>
                                                @endforeach

                                            </select>
                                            @error('time')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-right control-label col-form-label">เบอร์ติดต่อ</label>
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
                                            class="col-sm-3 text-right control-label col-form-label">บริการ</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="default-select" name="service" required>

                                                @foreach ($service as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id == $data->service ? 'selected' : '' }}>
                                                        {{ $item->service }}</option>
                                                @endforeach

                                            </select>
                                            @error('service')
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
                                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>
                                                    รออนุมัติ
                                                </option>
                                                <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>อนุมัติเเล้ว
                                                </option>
                                                <option value="3" {{ $data->status == 3 ? 'selected' : '' }}>เสร็จสิ้น
                                                </option>
                                                <option value="4" {{ $data->status == 4 ? 'selected' : '' }}>ยกเลิก
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
