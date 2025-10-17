@extends('index')
@extends('nav')
@extends('footer')

@section('content')
    <section class="banner-home bg_blue">
        <div class="container text-white">
            <div class="row banner-top align-items-center">
                <div class="col-lg-6 banner-content">
                    <span class="sub-hd">3 years’ worth experience in design</span>
                    <h1 class="theme-hd"><span class="bold">Designs That Speak for Your Brand</span></h1>
                    <p>At Nova Creation, we craft modern, professional, and
                        eye-catching designs — from logos and websites to social media content
                        and presentations — helping your brand stand out with creativity that connects. </p>
                    <div class="cta-btn">
                        <a href="#" class="theme-btn bdr-btn"><span>Work With Us</span></a>
                        <a href="#" class="theme-btn">View Process</a>
                    </div>
                </div>
                <div class="col-lg-6 banner-img scene">
                    <div id="scene" class="scene desktop-sec">
                        <img alt="img" src="{{ asset('assets/img/desktop.webp') }}" data-depth='0.3' alt="banner-img">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="counter-sec">
        <div class="container">
            <div class="counter-area">
                <div class="counter-content bg-pink ">
                    <h2>
                        <div class="stat-number" data-n="35"><span class="Single">36.5</span>k+</div>
                    </h2>
                    <span>Happy Clients </span>
                </div>
                <div class="counter-content bg-green ">
                    <h2>
                        <div class="stat-number" data-n="35"><span class="Single">36</span>k+</div>
                    </h2>
                    <span>Projects Delivered </span>
                </div>
                <div class="counter-content bg-blue">
                    <h2>
                        <div class="stat-number" data-n="35"><span class="Single">423</span>+</div>
                    </h2>
                    <span>Team Players </span>
                </div>
                <div class="counter-content bg-pink">
                    <h2>
                        <div class="stat-number" data-n="35"><span class="Single">23</span>+</div>
                    </h2>
                    <span>Excellence Awards</span>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="scene2" id="scene1">
                        <div class="layer1" data-depth='0.5'><img src="{{ asset('assets/img/about-img03.webp') }}"
                                alt="img01"></div>
                        <div class="layer2" data-depth='0.3'><img src="{{ asset('assets/img/about-img01.webp') }}"
                                alt="img02"></div>
                    </div>
                </div>
                <div class="col-lg-6 about-content">
                    <span class="sub-hd">MORE ABOUT NOVA CREATION</span>
                    <h2 class="theme-hd">About Us</h2>
                    <p>At Nova Creation, we believe every design tells a story. Our mission is to craft creative,
                        modern,
                        and professional visuals that help brands stand out and connect with their audience.
                        From logos and websites to social media designs and presentations, we bring fresh ideas to life
                        with passion and precision.</p>
                    <p>Though we are at the beginning of our journey, our focus is on delivering originality,
                        attention to detail, and designs that leave a lasting impression. Nova Creation is more
                        than just design—it’s about transforming ideas into meaningful visual experiences.</p>
                    <!-- <ul class="about-list">
                                <li>
                                    <span class="list-info">
                                        <span class="title">Boosting the Organization: </span>
                                        <span class="desc">Hiring the most polished and skilled individuals to help put the work
                                            satisfaction of the company at higher values with our clients, and making sure we
                                            meet every demand our client requires.</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="list-info">
                                        <span class="title">Satisfied Clients</span>
                                        <span class="desc">A number of satisfied clients that prove our consistency and
                                            dedication towards them. We believe in creating cordial and long term relationships
                                            with our clients. </span>
                                    </span>
                                </li>
                                <li>
                                    <span class="list-info">
                                        <span class="title">Projects Delivered</span>
                                        <span class="desc">We have completed tens of thousands of projects to date, and our
                                            established portfolio and client list of major corporations attest to the caliber of
                                            the work we produce.</span>
                                    </span>
                                </li>
                            </ul> -->
                    <a href="about.html" class="theme-btn">View More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="our-services">
        <div class="container">
            <div class="theme-content text-center">
                <span class="sub-hd">What We Offer</span>
                <h2 class="theme-hd">Professional Creative <br> Design Services</h2>
                <p>Nova Creation offers modern and impactful design solutions — from logos and websites to social media,
                    presentations, and more — crafted to help your brand stand out.</p>
            </div>

            <div class="row service-box justify-content-center">
                <div class="col-lg-4 web">
                    <a href="{{route('logo')}}" class="service-type-box">
                        <span class="img"><img alt="img" src="{{ asset('assets/img/icons/service-1.png') }}"
                                class="service-icon"></span>
                        <h2>Logo Design </h2>
                        <p>A unique logo is the face of your brand.
                            At Nova Creation, we design modern and
                            memorable logos that leave a lasting impression.</p>
                    </a>
                </div>
                <div class="col-lg-4 logo">
                    <a href="{{route('socail')}}" class="service-type-box">
                        <span class="img"><img alt="img" src="{{ asset('assets/img/icons/service-2.png') }}"
                                class="service-icon"></span>
                        <h2>Social Media Design</span></h2>
                        <p>From posts to banners, we design engaging
                            social media content that boosts your brand’s
                            online presence and connects with your audience.</p>
                    </a>
                </div>
                <div class="col-lg-4 ecom">
                    <a href="{{route('Presentation')}}" class="service-type-box">
                        <span class="img"><img alt="img" src="{{ asset('assets/img/icons/service-3.png') }}"
                                class="service-icon"></span>
                        <h2>Presentation Design</h2>
                        <p>Professional and creative pitch decks,
                            business presentations, and slides that make
                            your ideas stand out with impact.</p>
                    </a>
                </div>
                <div class="col-lg-4 seo">
                    <a href="{{route('cover-design')}}" class="service-type-box">
                        <span class="img"><img alt="img" src="{{ asset('assets/img/icons/service-4.png') }}"
                                class="service-icon"></span>
                        <h2>E-Book & Cover Design</h2>
                        <p>Beautifully designed e-books and covers that combine
                            readability with creativity, giving your content a
                            professional edge.</p>
                    </a>
                </div>
                <div class="col-lg-4 smm">
                    <a href="{{route('ui')}}" class="service-type-box">
                        <span class="img"><img alt="img" src="{{ asset('assets/img/icons/service-5.png') }}"
                                class="service-icon"></span>
                        <h2>UI/UX Design</h2>
                        <p>Intuitive, user-friendly, and visually consistent
                            UI/UX designs that bring your digital
                            products to life.</p>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio-sec">
        <div class="container">
            <div class="theme-content text-center">
                <span class="sub-hd">Our Portfolio</span>
                <div class="double-bdr"></div>
                <h2 class="theme-hd">Showcasing Our <br> Creative Journey</h2>
                <p>Explore Nova Creation’s designs that blend creativity with professionalism. From logos and websites
                    to social media and
                    presentations, here’s a showcase of our journey in crafting visuals that inspire.</p>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="pills-logo-tab" class="active" data-bs-toggle="pill" data-bs-target="#pills-logo"
                        type="button" role="tab" aria-controls="pills-logo" aria-selected="true">Presentation
                        Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button"
                        role="tab" aria-controls="pills-web" aria-selected="false">UI/UX Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-ecom-tab" data-bs-toggle="pill" data-bs-target="#pills-ecom" type="button"
                        role="tab" aria-controls="pills-ecom" aria-selected="false">Social Media Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button"
                        role="tab" aria-controls="pills-video" aria-selected="false">E-Book & Cover Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-illus-tab" data-bs-toggle="pill" data-bs-target="#pills-illus" type="button"
                        role="tab" aria-controls="pills-illus" aria-selected="false">Logo Design</a>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo" >
                                <img  alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-1.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-2.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-3.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-4.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-5.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-6.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-7.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/Presentation-8.jpg') }}">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade " id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/ui-1.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/ui-2.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/ui-3.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/ui-4.jpg') }}">
                            </a>
                        </li>
                        {{-- <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/thumb-5.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/thumb-6.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/thumb-7.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/website/thumb-3.jpg') }}">
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-ecom" role="tabpanel" aria-labelledby="pills-ecom-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-1.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-2.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-3.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-4.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-5.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/socail-6.jpg') }}">
                            </a>
                        </li>
                        {{-- <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/7.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/ecommerce/8.jpg') }}">
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/ebook.jpg') }}">
                            </a>
                        </li>
                        {{-- <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/2.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/3.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/4.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/5.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/6.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/7.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/video-animation/8.jpg') }}">
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-illus" role="tabpanel" aria-labelledby="pills-illus-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/logo-1.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/logo-2.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/logo/logo-3.jpg') }}">
                            </a>
                        </li>
                        {{-- <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/illustration/4.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/illustration/5.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/illustration/6.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/illustration/7.jpg') }}">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="{{ asset('assets/img/portfolio/illustration/8.jpg') }}">
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="process-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 lf-side">
                    <div class="theme-content">
                        <span class="sub-hd">How Does All This Work?</span>
                        <h2 class="theme-hd">What We Work for</h2>
                        <p>At Nova Creation, we believe that every great design begins with understanding your vision.
                            That’s why we take the time to listen, learn,
                            and collaborate with you from the very first conversation. Our process is built on clear
                            communication and creativity, ensuring each step
                            feels simple, transparent, and tailored to your needs.</p>
                        <p>We focus on blending originality with attention to detail, so whether it’s a logo, website,
                            or social media design,
                            every project reflects your brand’s personality and purpose. You’ll always be updated,
                            involved,
                            and confident that your ideas are shaping the final result.</p>
                        <p>Our goal is more than just delivering designs that look good — we create work that inspires,
                            connects, and helps your brand grow.
                            With dedication, care, and on-time delivery, Nova Creation turns your vision into designs
                            that truly make an impact.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="{{asset('assets/img/technical-suppo.webp')}}" alt="icon01">
                                <span class="title">Create</span>
                                <p>We believe in being good at creating. Dedicated workers do their best work, with
                                    following deadlines.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="{{asset('assets/img/analyzing.webp')}}" alt="icon02">
                                <span class="title">Refine </span>
                                <p>Every detail matters. We carefully review,
                                    analyze, and refine your designs to ensure
                                    they’re polished, professional, and aligned
                                    with your vision.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="{{asset('assets/img/camera-dolly.webp')}}" alt="icon03">
                                <span class="title">Deliver </span>
                                <p>You will have access to all the work, regarding your work, you will be delivered with
                                    the best work with everything you want it to be.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 rt-side">
                    <img src="{{asset('assets/img/banner.jpg')}}" alt="lf-img">
                </div>
            </div>
        </div>
    </section>
@endsection
