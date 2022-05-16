@include('frontend.layouts.components.header')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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

    <!-- testimonial_area  -->
    {{-- <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Testimonial
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/assets/img/testmonial/1.png') }}"
                                                    alt="">


                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/assets/img/testmonial/1.png') }}"
                                                    alt="">


                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-10">
                                    <div class="single_testmonial text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/assets/img/testmonial/1.png') }}"
                                                    alt="">

                                            </div>
                                            <h3>Watson, web developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /testimonial_area  -->

    {{-- <div class="make_apppointment_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title pl-68">
                        <h3>Make an Appointment</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="appoint_ment_form pl-68">
                        <form action="#">
                            <div class="single_field">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="single_field">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="single_field m-0">
                                <textarea id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <p>I’m available for commissions and collaborations, and i’m <br>
                                excited to hear from you about new projects.</p>
                            <div class="form_btn">
                                <button class="boxed-btn3" type="submit">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="appointMent_info">
                        <div class="single_appontment">
                            <h4>Visit our studio at</h4>
                            <p>221B Baker Street, P. O Box 3 Park Road,
                                USA - 215852</p>
                        </div>
                        <div class="single_appontment">
                            <h4>Message us</h4>
                            <p>Support@colorlib.net <br>
                                (+68) 120034509</p>
                        </div>
                        <div class="single_appontment">
                            <h4>Working Hours</h4>
                            <p class="d-flex justify-content-between">
                                <span>Monday - Friday</span>
                                <span>: 09.00 - 23.00</span>
                            </p>
                            <p class="d-flex justify-content-between">
                                <span>Sunday</span>
                                <span>: 09.00 - 16.00s</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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
