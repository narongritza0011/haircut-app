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
                    <h3>เกี่ยวกับ</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

    <!-- about_area_start -->
    @include('frontend.layouts.components.about')
    <!-- about_area_end -->






    <!-- team_area_start  -->
    @include('frontend.layouts.components.team')
    <!-- team_area_end  -->




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
