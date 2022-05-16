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
                <div class="col-lg-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7637.862434088056!2d100.20268424040592!3d16.829768033027538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dfbcdf34fb8a47%3A0x84e765ec5aec4d20!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lie4Li04Lia4Li54Lil4Liq4LiH4LiE4Lij4Liy4Lih!5e0!3m2!1sth!2sth!4v1652628949420!5m2!1sth!2sth"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0805077810</h3>
                            <p>จันทร์ - ศุกร์ 9.00 - 18.00 น.</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>test@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
