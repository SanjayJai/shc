
    <!--====================  End of newsletter area  ====================-->
    <!--====================  footer area ====================-->
    <div class="footer-area bg-img space__inner--ry120" data-bg="{{ asset('assets/img/backgrounds/footer-bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-widget__logo space__bottom--40">
                            <a href="{{ route('Home') }}">
                                {{-- <img width="142" height="31" src="{{ asset('assets/img/logo-white.webp') }}" class="img-fluid" alt=""> --}}
                                <img width="142" height="31" src="{{ asset('assets/img/SHCb.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <p class="footer-widget__text space__bottom--20">Publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search</p>
                        <ul class="social-icons">
                            <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                        <h5 class="footer-widget__title space__bottom--20">Information</h5>
                        <ul class="footer-widget__menu">
                            <li><a href="{{ route('About') }}">About Us</a></li>
                            <li><a href="{{ route('Service') }}">Our Services</a></li>
                            <li><a href="{{ route('projects') }}">Our Gallery</a></li>
                            <li><a href="{{ route('Contact') }}">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                        <h5 class="footer-widget__title space__bottom--20">Support</h5>
                        <ul class="footer-widget__menu">
                            <li><a href="#">About Brenda</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Projects</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Blog Post</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-5 col-md-6">
                    <h5 class="footer-widget__title space__top--15 space__bottom--20 space__top__md--40 space__top__lm--40">
                        Contact us</h5>
                    <div class="footer-contact-wrapper">
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-map-marker"></i></div>
                            <div class="single-footer-contact__text">Office: No.60/1A, Vetrilaikara Street, Opp.<br> Ayappan Temple, Walajapet, Ranipet Dist. - 632 513.</div>
                        </div>
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-phone"></i></div>
                            <div class="single-footer-contact__text"> <a href="tel:98548658125">+91-9597677439</a> <br> <a href="tel:65487235457">+91-73732 31781</a> </div>
                        </div>
                        <div class="single-footer-contact">
                            <div class="single-footer-contact__icon"><i class="fa fa-globe"></i></div>
                            <div class="single-footer-contact__text"><a href="mailto:info@example.com">squarehomeconstruction@gmail.com</a>
                                <br> <a href="#">www.example.com</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright text -->
    <div class="copyright-area background-color--deep-dark space__inner--y30">
        <div class="container">
           <div class="row">
    <div class="col-lg-12 text-center">
        <p class="copyright-text">&copy; Brenda {{ date('Y') }} Made with <i class="fa fa-heart"></i> .Developed By  <a href="https://redbackstudios.in " target="_blank">Redback</a></p>
    </div>
</div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->

