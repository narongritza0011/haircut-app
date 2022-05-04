@extends('layouts.components.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">พนักงาน</h4>
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
                                                        <th>ชื่อ-นามสกุล</th>
                                                        <th>บัญชีผู้ใช้</th>
                                                        <th>เบอร์ติดต่อ</th>
                                                        <th>จัดการ</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->tel }}</td>

                                                            <td> <a href="{{ route('admin.users.edit', $item->id) }}"
                                                                    class="btn btn-warning "><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="{{ route('admin.users.del', $item->id) }}"
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
                                    <form class="form-horizontal" method="POST" action="{{ route('admin.users.add') }}">
                                        @csrf
                                        <div class="card-body">
                                            <h4 class="card-title">ข้อมูลพนักงาน</h4>
                                            <div class="form-group row">
                                                <label for="fname"
                                                    class="col-sm-3 text-right control-label col-form-label">ชื่อ-นามสกุล</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name">
                                                    @error('name')
                                                        <span class="text-danger">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="lname"
                                                    class="col-sm-3 text-right control-label col-form-label">บัญชีผู้ใช้</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="email">
                                                    @error('email')
                                                        <span class="text-danger">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname"
                                                    class="col-sm-3 text-right control-label col-form-label">เบอร์ติดต่อ</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tel">
                                                    @error('tel')
                                                        <span class="text-danger">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lname"
                                                    class="col-sm-3 text-right control-label col-form-label">รหัสผ่าน</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="password">
                                                    @error('password')
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
