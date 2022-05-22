@extends('layouts.components.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">รายการจองคิว</h4>
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
                                                        <th>ชื่อ</th>
                                                        <th>วัน-เวลา</th>
                                                        <th>บริการ</th>
                                                        <th>เบอร์ติดต่อ</th>
                                                        <th>สถานะ</th>
                                                        <th>จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td><span
                                                                    class="badge badge-success mr-2">{{ $item->date }}</span><span
                                                                    class="badge badge-primary">{{ $item->time }}</span>
                                                            </td>

                                                            <td>{{ $item->service . ' ราคา ' }} <span
                                                                    class="badge badge-success">{{ number_format($item->price, 2) }}</span>
                                                            </td>
                                                            <td>{{ $item->tel }}</td>
                                                            @if ($item->status == 1)
                                                                <td> <span class="badge badge-warning">รออนุมัติ</span>
                                                                </td>
                                                            @elseif ($item->status == 2)
                                                                <td>
                                                                    <span class="badge badge-success">อนุมัติเเล้ว</span>

                                                                </td>
                                                            @elseif ($item->status == 3)
                                                                <td>
                                                                    <span class="badge badge-primary">เสร็จสิ้น</span>

                                                                </td>
                                                            @elseif ($item->status == 4)
                                                                <td>
                                                                    <span class="badge badge-danger">ยกเลิก</span>

                                                                </td>
                                                            @endif

                                                            <td> <a href="{{ route('admin.appointment.edit', $item->id) }}"
                                                                    class="btn btn-warning "><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="{{ route('admin.appointment.del', $item->id) }}"
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
