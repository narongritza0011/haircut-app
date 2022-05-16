@include('frontend.layouts.components.header')

<body>


    <!-- header-start -->
    @include('frontend.layouts.components.navbar')
    <!-- header-end -->

    <!-- slider_area_start -->
    @include('frontend.layouts.components.slide')
    <!-- slider_area_end -->

    <!-- about_area_start -->
    @include('frontend.layouts.components.about')
    <!-- about_area_end -->

    @include('frontend.layouts.components.service')


    @include('frontend.layouts.components.price')


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
