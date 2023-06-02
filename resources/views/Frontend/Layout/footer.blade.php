<!-- footer start -->
<footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="img/footer_logo.png" alt="">
                                    </a>
                                </div>
                             

                            </div>
                        </div>
                        <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                            
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Useful Links
                                </h3>
                                <ul>
                                    <li><a href="/about">About</a></li>
                                    
                                    <li><a href="/contact"> Contact</a></li>
                                    <li><a href="#test-form"> Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Address
                                </h3>
                                <p>
                                    200, D-block, Green lane Pakistan <br>
                                    +92 335-1353953 <br>
                                    faiqali@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" action="{{route('book.appointment')}}" method="POST">
        @csrf
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date" name="date" required>
                        </div>
                        <div class="col-xl-6">
                            <input type="time" placeholder="Suitable time" name="time" required>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="" name="depart" required>
                                <option data-display="Select Department">Department</option>
                             

                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="" name="doctor_id" required>
                               <option value=""></option>

                               

                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Name" name="user_name" required>
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Phone no." name="phone" required>
                        </div>
                        <div class="col-xl-12">
                            <input type="email"  placeholder="Email" name="email" required>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="{{url('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/js/ajax-form.js')}}"></script>
    <script src="{{url('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/js/scrollIt.js')}}"></script>
    <script src="{{url('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('frontend/js/wow.min.js')}}"></script>
    <script src="{{url('frontend/js/nice-select.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('frontend/js/plugins.js')}}"></script>
    <script src="{{url('frontend/js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{url('frontend/js/contact.js')}}"></script>
    <script src="{{url('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.form.js')}}"></script>
    <script src="{{url('frontend/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('frontend/js/mail-script.js')}}"></script>

    <script src="{{url('frontend/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>
