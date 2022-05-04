@extends('layouts.components.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">สมาชิก</h4>
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
                            <div class="col-lg-12">
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

                                                            <td> <a href="{{ route('admin.member.edit', $item->id) }}"
                                                                    class="btn btn-warning "><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="{{ route('admin.member.del', $item->id) }}"
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
                            {{-- <div class="col-lg-3">
                                
                            </div> --}}
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
