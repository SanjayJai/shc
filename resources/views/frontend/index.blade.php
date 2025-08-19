@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')

@push('styles')
<style>
.fixed-service-img {
    width: 270px;
    height: 194px;
    object-fit: cover;
    border-radius: 8px; /* Optional: matches your card look */
}

    </style>
@endpush
    <!--====================  hero slider area ====================-->
    <div class="hero-slider-area space__bottom--r120">
        <div class="hero-slick-slider-wrapper">
            <div class="single-hero-slider single-hero-slider--background  position-relative bg-img"
                data-bg="{{ asset('assets/img/hero-slider/hero.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero slider content -->
                            <div class="hero-slider-content hero-slider-content--extra-space">
                                {{-- <h3 class="hero-slider-content__subtitle">Brenda</h3>
                                <h2 class="hero-slider-content__title space__bottom--50">We Construct your Dream in Life
                                </h2> --}}
                                <a href="contact.html" class="default-btn default-btn--hero-slider position-absolute"
                                    style="bottom: 160px; right: 70px;">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="single-hero-slider single-hero-slider--background single-hero-slider--overlay position-relative bg-img"
                data-bg="{{ asset('assets/img/hero-slider/hero-slider-2.webp') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- hero slider content -->
                            <div class="hero-slider-content hero-slider-content--extra-space">
                                <h3 class="hero-slider-content__subtitle">Brenda</h3>
                                <h2 class="hero-slider-content__title space__bottom--50">We Construct your Dream in Life
                                </h2>
                                <a href="contact.html" class="default-btn default-btn--hero-slider">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!--====================  End of hero slider area  ====================-->
    <!--====================  about area ====================-->
    <div class="about-area space__bottom--r120 ">
        <div class="container">
            <div class="row align-items-center row-25">
                <div class="col-md-6">
                    <div class="about-image space__bottom__lm--30">
                        <img width="521" height="498" src="{{ asset('assets/img/about/about-section-1.webp') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <!-- section title -->
                        <div class="section-title space__bottom--25">
                            <h3 class="section-title__sub">Science 1982</h3>
                            <h2 class="section-title__title">Provide the best quality service and construction</h2>
                        </div>
                        <p class="about-content__text space__bottom--40">Publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web
                            sites still in their infance</p>
                        <a href="contact.html" class="default-btn">Start now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of about area  ====================-->
    <!--====================  feature area ====================-->
    <div class="feature-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- feature content wrapper -->
                    <div class="feature-content-wrapper space__bottom--m35">
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-1.webp') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Top Rated</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum
                                    as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-2.webp') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Best Quality</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum
                                    as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                        <div class="single-feature space__bottom--35">
                            <div class="single-feature__icon">
                                <img width="53" height="53" src="{{ asset('assets/img/icons/feature-3.webp') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="single-feature__content">
                                <h4 class="single-feature__title">Low Price</h4>
                                <p class="single-feature__text">Publishing packages and web page editors now use Lorem Ipsum
                                    as their default model text and a search for lorem ipsumwill uncover</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 space__bottom__md--40 space__bottom__lm--40 order-1 order-lg-2">
                    <!-- feature content image -->
                    <div class="feature-content-image">
                        <img width="338" height="367" src="{{ asset('assets/img/feature/feature-banner-1.webp') }}"
                            class="img-fluid" alt="">
                        <img width="301" height="372" src="{{ asset('assets/img/feature/feature-banner-2.webp') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of feature area  ====================-->
    <!--====================  service area ====================-->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-5">
                    <!-- service banner -->
                    <div class="service-banner space__bottom__md--40 space__bottom__lm--40">
                        <img width="328" height="497" src="{{ asset('assets/img/service/service-man.webp') }}"
                            class="float-none float-lg-end" alt="" />
                    </div>
                </div>
                <div class="col-xl-9 col-lg-7 mt-0 mt-lg-4">
                    <!-- section title -->
                    <div class="section-title space__bottom--40">
                        <h3 class="section-title__sub">Our Services</h3>
                        <h2 class="section-title__title">Unique and Quality Service Makes Clients Happy</h2>
                    </div>
                    <!-- service slider -->
                    <!-- Service Section Wrapper -->
                    <div class="service-slider-wrapper space__bottom__md--40 space__bottom__lm--40 slick-slider-x-gap-30">
                        @forelse ($latestServices as $service)
                            <div class="single-service text-center">
                                <div class="single-service__image space__bottom--15">
                                    <a href="{{ route('Service') }}">
                                        <img width="270" height="194" src="{{ asset('storage/' . $service->image) }}"
                                            class="img-fluid fixed-service-img" alt="{{ $service->title }}" />
                                    </a>
                                </div>
                                <h4 class="single-service__content">
                                    <a href="{{ route('Service') }}">{{ $service->title }}</a>
                                </h4>
                            </div>
                        @empty
                            <div class="single-service text-center">
                                <p>No services available.</p>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of service area  ====================-->
    <!--====================  fun fact area ====================-->
    <div class="fun-fact-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- fun fact wrapper -->
                    <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img"
                        data-bg="{{ asset('assets/img/backgrounds/funfact-bg.webp') }}">
                        <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img"
                            data-bg="{{ asset('assets/img/icons/ruler-black.webp') }}">
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
    <!--====================  project area ====================-->
    <div class="project-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Our Projects</h3>
                        <h2 class="section-title__title">Here you find our latest projects that we did and are doing</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-wrapper space__bottom--m5 d-flex flex-wrap justify-content-center"
            id="project-justify-wrapper">
            @if ($recentProjects->isEmpty())
                <div class="empty-gallery-message text-center my-5">
                    <h5>Gallery will be updated soon.</h5>
                </div>
            @else
                @foreach ($recentProjects as $project)
                    <div class="single-project-wrapper">
                        <a class="single-project-item" data-title="{{ $project->title }}">
                            <img width="491" height="359" src="{{ asset('storage/' . $project->image) }}"
                                class="img-fluid" alt="{{ $project->title }}"
                                style="object-fit: cover; width: 100%; height: 359px;">
                            <span class="single-project-title">{{ $project->title }}</span>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>



    </div>
    <!--====================  End of project area  ====================-->
    <!--====================  team area ====================-->
    {{-- <div class="team-area space__bottom--r120 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 space__bottom__md--40 space__bottom__lm--40">
                    <div class="team-member-title-wrapper">
                        <!-- section title -->
                        <div class="section-title space__bottom--30 space__bottom__md--30 space__bottom__lm--20">
                            <h3 class="section-title__sub">Our Team</h3>
                            <h2 class="section-title__title">Best & quality team members</h2>
                        </div>
                        <p class="team-text space__bottom--40 space__bottom__md--30 space__bottom__lm--20">Publishing
                            packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <a href="about.html" class="default-btn">View more</a>
                    </div>
                </div>
                <div class="col-lg-8 team-slider-column-wrapper">
                    <!-- team member slider -->
                    <div class="team-slider-wrapper slick-slider-x-gap-30">
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="776" src="{{ asset('assets/img/team/team-member1.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">Osthir Sholey</h5>
                            <p class="single-team-member__des">Chief Engineer</p>
                        </div>
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="775" src="{{ asset('assets/img/team/team-member2.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">Smarto Jowly</h5>
                            <p class="single-team-member__des">Chief Plamber</p>
                        </div>
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="775" src="{{ asset('assets/img/team/team-member3.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">Franky Moina</h5>
                            <p class="single-team-member__des">Chief Electrician</p>
                        </div>
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="775" src="{{ asset('assets/img/team/team-member4.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">Navira Pareyo</h5>
                            <p class="single-team-member__des">Chief Architect</p>
                        </div>
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="776" src="{{ asset('assets/img/team/team-member5.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">Tandur Belali</h5>
                            <p class="single-team-member__des">Engineer</p>
                        </div>
                        <div class="single-team-member text-center">
                            <div class="single-team-member__image space__bottom--10">
                                <img width="510" height="775" src="{{ asset('assets/img/team/team-member4.webp') }}" alt="">
                            </div>
                            <h5 class="single-team-member__name">John Doe</h5>
                            <p class="single-team-member__des">Site Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of team area  ====================-->
    <!--====================  testimonial cta area ====================-->
    <div class="testimonial-cta-area space__bottom--r120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 space__bottom__md--40 space__bottom__lm--40">
                    <!-- cta block -->
                    <div class="cta-block cta-block--shadow cta-block--bg bg-img"
                        data-bg="{{ asset('assets/img/backgrounds/cta-bg.webp') }}">
                        <div class="cta-block__inner background-color--default-light-overlay space__inner--ry100"
                            style="color: #fff;">
                            <p class="cta-block__light-text text-center">More than <span>25</span> years</p>
                            <p class="cta-block__semi-bold-text text-center">Do you have project <br> Just dial (toll free)
                            </p>
                            <p class="cta-block__bold-text text-center">+91-9597677439 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Testimonials</h3>
                        <h2 class="section-title__title">What clients say</h2>
                    </div>
                    <!-- testimonial slider -->
                    <div class="testimonial-slider-wrapper space__inner__bottom__md--30  space__inner__bottom__lm--30">
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span>
                                Publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                and a search for lorem ipsum will uncover many web sites still in infance <span
                                    class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">Nicolus Vengelious</h5>
                            <p class="single-testimonial__author-des">CEO, Octafact Group</p>
                        </div>
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span>
                                Publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                and a search for lorem ipsum will uncover many web sites still in infance <span
                                    class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">John Doe</h5>
                            <p class="single-testimonial__author-des">CTO, HB Group</p>
                        </div>
                        <div class="single-testimonial text-center">
                            <p class="single-testimonial__text space__bottom--40"> <span class="quote-left">"</span>
                                Publishing packages and web page editors now use Lorem Ipsum as their default model text,
                                and a search for lorem ipsum will uncover many web sites still in infance <span
                                    class="quote-right">"</span></p>
                            <div class="single-testimonial__rating space__bottom--10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h5 class="single-testimonial__author">Jonathon Doe</h5>
                            <p class="single-testimonial__author-des">CIO, Oct Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial cta area  ====================-->
    <!--====================  blog grid slider area ====================-->
    {{-- <div class="blog-grid-slider-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title text-center  space__bottom--40 mx-auto">
                        <h3 class="section-title__sub">Latest Post</h3>
                        <h2 class="section-title__title">Blog posts about our various construction projects</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-wrapper space__bottom--m40">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img width="370" height="271" src="{{ asset('assets/img/blog/grid1.webp') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> New design concept & idea</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem
                                        Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img width="370" height="271" src="{{ asset('assets/img/blog/grid2.webp') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> Biggest construction design</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem
                                        Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-blog-grid space__bottom--40">
                                    <div class="single-blog-grid__image space__bottom--15">
                                        <a href="blog-details-left-sidebar.html">
                                            <img width="370" height="271" src="{{ asset('assets/img/blog/grid3.webp') }}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <h4 class="single-blog-grid__title space__bottom--10"><a href="blog-details-left-sidebar.html"> Steel structure design concept</a></h4>
                                    <p class="single-blog-grid__text">Publishing packages and web page editors now use Lorem
                                        Ipsum as their default model text and a search for lorem ipsumwill</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of blog grid slider area  ====================-->
    <!--====================  brand logo area ====================-->
    <x-brand />
    <!--====================  End of brand logo area  ====================-->
    <!--====================  newsletter area ====================-->
    <div class="newsletter-area newsletter-area-bg bg-img"
        data-bg="{{ asset('assets/img/backgrounds/newsletter-bg.webp') }}">
        <x-newsletter />

    </div>

    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--====================  End of scroll top  ====================-->
@endsection
