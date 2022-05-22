@include('frontend.layouts.components.header')

<body>


    <!-- header-start -->
    @include('frontend.layouts.components.navbar')
    <!-- header-end -->



    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>ติดต่อ</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->





    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">



            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">แผนที่</h2>
                </div>
                @foreach ($map as $r)
                    <div class="col-lg-8">
                        <iframe src="{{ $r->map }}" width="600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3> Address</h3>
                                <p> {{ $r->address }}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>{{ $r->tel }}</h3>
                                <p>{{ $r->work }}</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>{{ $r->email }}</h3>
                                <p>ส่งข้อความของคุณได้ตลอดเวลา!</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- ================ contact section end ================= -->





    <!-- footer_start  -->
    @include('frontend.layouts.components.footer')
    <!-- footer_end  -->


    <!-- form itself end-->
    @include('frontend.layouts.components.form')
    <!-- form itself end -->

    <!-- JS here -->
    @include('frontend.layouts.components.script')

</body>

</html>
