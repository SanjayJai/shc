@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('content')

    <!--====================  breadcrumb area ====================-->
    <div class="page-breadcrumb bg-img space__bottom--r120" data-bg="{{ asset('assets/img/backgrounds/bc-bg.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-breadcrumb-content text-center">
                        <h1>About Us</h1>
                        <ul class="page-breadcrumb-links">
                            <li><a href="{{ route('Home') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of breadcrumb area  ====================-->
    <!--====================  about area ====================-->
    <div class="about-area space__bottom--r120 ">
        <div class="container">
            <div class="row align-items-center row-25">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="about-content">
                        <!-- section title -->
                        <div class="section-title space__bottom--25">
                            <h3 class="section-title__sub">Science 1982</h3>
                            <h2 class="section-title__title">Provide the best quality service and construction</h2>
                        </div>
                        <p class="about-content__text space__bottom--40">Publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web
                            sites still in their infance</p>
                        <a href="{{ route('Contact') }}" class="default-btn">Start now</a>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="about-image space__bottom__lm--30">
                        <img width="671" height="408" src="{{ asset('assets/img/about/about-section-2.webp') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about area  ====================-->
    <!--====================  cta area ====================-->
    <div class="cta-area cta-area-bg bg-img" data-bg="{{ asset('assets/img/backgrounds/cta-bg2.webp') }}">
        <div class="cta-wrapper background-color--dark-overlay space__inner__top--50 space__inner__bottom--150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="cta-block cta-block--default-color">
                            <p class="cta-block__light-text text-center">More than <span>25</span> years</p>
                            <p class="cta-block__semi-bold-text cta-block__semi-bold-text--medium text-center">Do you have a
                                project? Just dial (toll free)</p>
                            <p class="cta-block__bold-text text-center">+98565 569 874</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of cta area  ====================-->
    <!-- funfact include -->
    <div class="funfact-wrapper space__top--m100">
        <!--====================  fun fact area ====================-->
        <div class="fun-fact-area space__bottom--r120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- fun fact wrapper -->
                        <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img" data-bg="{{ asset('assets/img/backgrounds/funfact-bg.webp') }}">
                            <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img" data-bg="{{ asset('assets/img/icons/ruler-black.webp') }}">
                                <div class="fun-fact-content-wrapper">
                                    <div class="single-fun-fact">
                                        <h3 class="single-fun-fact__number counter">985</h3>
                                        <h4 class="single-fun-fact__text">Projects</h4>
                                    </div>
                                    <div class="single-fun-fact">
                                        <h3 class="single-fun-fact__number counter">529</h3>
                                        <h4 class="single-fun-fact__text">Clients</h4>
                                    </div>
                                    <div class="single-fun-fact">
                                        <h3 class="single-fun-fact__number counter">888</h3>
                                        <h4 class="single-fun-fact__text">Success</h4>
                                    </div>
                                    <div class="single-fun-fact">
                                        <h3 class="single-fun-fact__number counter">100</h3>
                                        <h4 class="single-fun-fact__text">Awards</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of fun fact area  ====================-->
    </div>
    <!--====================  feature area ====================-->
    <div class="feature-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- feature content wrapper -->
                    <div class="feature-content-wrapper space__bottom--m35">
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-1.webp') }}" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Top Rated</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-2.webp') }}" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Best Quality</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-3.webp') }}" class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Low Price</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 space__bottom__md--40 space__bottom__lm--40 order-1 order-lg-2">
                    <!-- feature content image -->
                    <div class="feature-content-image">
                        <img width="338" height="367" src="{{ asset('assets/img/feature/feature-banner-1.webp') }}" class="img-fluid" alt="">
                        <img width="301" height="372" src="{{ asset('assets/img/feature/feature-banner-2.webp') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature area  ====================-->
    <!--====================  team area ====================-->
  
    <!--====================  End of team area  ====================-->
    <!--====================  testimonial area ====================-->
    
    <!--====================  End of testimonial area  ====================-->
    <!--====================  brand logo area ====================-->
    <x-brand />
    <!--====================  End of brand logo area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img" data-bg="{{ asset('assets/img/backgrounds/newsletter-bg.webp') }}">
       <x-newsletter />
    </div>
    <!--====================  End of newsletter area  ====================-->
 
    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--====================  End of scroll top  ====================-->
   
@endsection