<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/scrollIt.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>


<!--contact js-->
<script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    var timepicker = $('#timepicker').timepicker({
        format: 'HH.MM'
    });
</script>
