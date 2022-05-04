@extends('layouts.components.master')
@section('content')
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
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>ชื่อบริการ</th>
                                                        <th>ราคา</th>
                                                        <th>สถานะ</th>
                                                        <th>จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->service }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>
                                                                @if ($item->status == 1)
                                                                    <span class="badge badge-success">เปิดการใช้งาน</span>
                                                                @else
                                                                    <span class="badge badge-danger">ปิดการใช้งาน</span>
                                                                @endif
                                                            </td>

                                                            <td> <a href="{{ route('admin.service.edit', $item->id) }}"
                                                                    class="btn btn-warning "><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="{{ route('admin.service.del', $item->id) }}"
                                                                    class="btn btn-danger "><i
                                                                        class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('admin.service.store') }}">
                                        @csrf
                                        <div class="card-body">
                                            <h4 class="card-title">ข้อมูลบริการ</h4>
                                            <div class="form-group row">
                                                <label for="fname"
                                                    class="col-sm-3 text-right control-label col-form-label">ชื่อบริการ</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="service">
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
                                                    <input type="number" class="form-control" name="price">
                                                    @error('price')
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
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
