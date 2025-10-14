@extends('index')
@extends('nav')
@extends('footer')

@section('content')
     <section class="banner-home bg_blue">
        <div class="container text-white">
            <div class="row banner-top align-items-center">
                <div class="col-lg-7 banner-content">
                    <span class="sub-hd">CREATING DESIGNS THAT SPEAK LOUDER THAN WORDS</span>
                    <h1 class="theme-hd"><span class="bold">UI/UX Design & <br> Creative Solutions </span></span>
                    </h1>
                    <p>At Nova Creation, we craft experiences that go beyond visuals — we design with purpose.
                        Our UI/UX solutions are built to give your audience seamless interactions and
                        memorable journeys. From intuitive interfaces to modern, user-focused layouts,
                        we ensure every click, scroll, and action feels natural and engaging. With us,
                        design isn’t just about looks — it’s about making your brand unforgettable.</p>
                    <div class="cta-btn">
                        <a href="#" class="theme-btn bdr-btn"><span>Work With Us</span></a>
                        <a href="#" class="theme-btn"><i class="fa fa-phone"></i> Call Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="h_banner_form bg-white gradient-animate">
                        <h2 class="theme-hd">Hire A Creative Mind</h2>
                        <form action="https://techsolit.com/services/code.php" method="post"
                            onsubmit="return checkform(this);">
                            <div class="d-flex">
                                <div class="form-group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" name="h_name" placeholder="Enter Your Full Name"
                                        class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" name="h_email" placeholder="Enter Your Email Address"
                                        class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="number" name="h_num" placeholder="Enter Your Phone Number"
                                    class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <textarea class="form-control" placeholder="Additional question if any"
                                    name="h_msg"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="h_b_btn" name="banner_btn">Request A Callback</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-img scene">
                    <div id="scene" class="scene desktop-sec">
                        <img alt="img" src="../assets/img/desktop.webp" data-depth='0.3' alt="banner-img">
                    </div>
                </div>
                <div class="col-lg-6 about-content">
                    <span class="sub-hd">THE RELIABLE UI/UX DESIGN AGENCY</span>
                    <h2 class="theme-hd">LEADING UI/UX DESIGN
                        COMPANY</h2>
                    <p>At Nova Creation, we don’t just design — we create experiences. Our UI/UX design services focus
                        on
                        building interfaces that are visually stunning, easy to navigate, and crafted with your users in
                        mind.
                        Every detail is thoughtfully designed to ensure seamless interaction, boosting engagement and
                        leaving a lasting impression. Whether it’s a website, app, or digital platform, we make sure
                        your
                        audience enjoys every click.</p>
                    <ul class="about-list">
                        <li class="phone">
                            <span class="list-info">
                                <span class="title"><a href="tel:+1234567891">Call Us </a> </span>
                                <span class="desc">Let’s talk about how our UI/UX experts can transform
                                    your digital presence.</span>
                            </span>
                        </li>
                        <li class="live-chat">
                            <span class="list-info">
                                <span class="title"><a href="#">Click here to Live Chat </a> </span>
                                <span class="desc">Connect with us instantly and get answers to your
                                    design queries right away.</span>
                            </span>
                        </li>
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
                                <img src="../assets/img/technical-suppo.webp" alt="icon01">
                                <span class="title">Create</span>
                                <p>We believe in being good at creating. Dedicated workers do their best work, with
                                    following deadlines.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="../assets/img/analyzing.webp" alt="icon02">
                                <span class="title">Refine </span>
                                <p>Every detail matters. We carefully review,
                                    analyze, and refine your designs to ensure
                                    they’re polished, professional, and aligned
                                    with your vision.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="../assets/img/camera-dolly.webp" alt="icon03">
                                <span class="title">Deliver </span>
                                <p>You will have access to all the work, regarding your work, you will be delivered with
                                    the best work with everything you want it to be.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 rt-side">
                    <img src="../assets/img/banner.jpg" alt="lf-img">
                </div>
            </div>
        </div>
    </section>   
@endsection