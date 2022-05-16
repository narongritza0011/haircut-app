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
                    <h3>บริการ</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->






    @include('frontend.layouts.components.service')




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
