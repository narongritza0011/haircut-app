@extends('layouts.components.master')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">หน้าหลัก</h4>
                <div class="ml-auto text-right">

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">รายการจองวันนี้ {{ $count_order }} รายการ</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                        <h6 class="text-white">รายการจองทั้งหมด {{ $count_order_all }} รายการ</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">สมาชิกทั้งหมด {{ $count_user }}</h6>
                    </div>
                </div>
            </div>


        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">รายการจองคิววันนี้</h4>

                                </div>
                            </div>
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
                                                <td><span class="badge badge-success mr-2">{{ $item->date }}</span><span
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
                                                        class="btn btn-warning "><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.appointment.del', $item->id) }}"
                                                        class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
    @endsection
