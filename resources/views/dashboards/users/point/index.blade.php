@extends('layouts.components.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">รายการสะสมเเต้ม</h4>
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
                <h6 class="text-danger">สะสมเเต้ม ครบ 10 ครั้งตัดฟรี 1</h6>
                <div class="card shadow">

                    <div class="card-body">


                        @foreach ($point as $item)
                            <img src="{{ asset('assets/images/points1.png') }}" height="100" alt="">
                        @endforeach

                    </div>
                </div>




                @if ($count_point < 10)
                    <button class="btn btn-github">คุณมีเเต้มสะสมอยู่ <span
                            class="text-danger">{{ $count_point }}</span>
                        ไม่สามารถใช้ได้</button>
                @elseif ($count_point >= 10)
                    <button type="button" data-toggle="modal" data-target="#Modal2"
                        class="btn btn-github">ใช้เเต้มสะสม</button>
                @endif



            </div>
        </div>






        <!-- Modal -->
        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('user.point.store') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ใช้เเต้ม</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="modal-body">



                            <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden"  name="email" value="{{ Auth::user()->email }}">


                            <h6 class="btn btn-success">คุณมีเเต้มสะสมอยู่ {{ $count_point }} </h6>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">ใช้เเต้มสะสม</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
