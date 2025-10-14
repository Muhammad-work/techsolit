@extends('index')
@extends('nav')
@extends('footer')

@section('content')
  <section class="banner-home bg_blue">
        <div class="container text-white">
            <div class="row banner-top align-items-center">
                <div class="col-lg-7 banner-content">
                    <span class="sub-hd">STRUGGLING TO DESIGN YOUR BRAND ALL BY YOURSELF?</span>
                    <h1 class="theme-hd"><span class="bold">Hire A Team OF <br> Creative Minds </span></h1>
                    <p>Building a strong brand identity takes more than just good ideas — it
                        requires professional design, strategy, and consistency. At Nova Creation,
                        we help businesses craft powerful visuals that connect with their audience
                        and build trust. From stunning logos and engaging websites to impactful
                        social media designs, our team ensures your brand stands out in a competitive market.</p>
                    <p>You can count on us for fresh creativity, on-time delivery,
                        and designs that reflect your unique vision. With Nova Creation,
                        you don’t just get designs — you get a partner committed to your success.</p>
                    <div class="cta-btn">
                        <a href="#" class="theme-btn bdr-btn"><span>Work With Us</span></a>
                        <a href="#" class="theme-btn">View Process</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="h_banner_form bg-white gradient-animate">
                        <h2 class="theme-hd">Hire A Creative Mind</h2>
                        <form action="https://techsolit.com/code.php" method="post" onsubmit="return checkform(this);">
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
                <div class="col-lg-6">
                    <div class="scene2" id="scene1">
                        <div class="layer1" data-depth='0.5'><img src="assets/img/about-img03.webp" alt="img01"></div>
                        <div class="layer2" data-depth='0.3'><img src="assets/img/about-img01.webp" alt="img02"></div>
                    </div>
                </div>
                <div class="col-lg-6 about-content">
                    <span class="sub-hd">How Do We Work?</span>
                    <h2 class="theme-hd">Get Your Answers Here</h2>
                    <p>At Nova Creation, we believe that every great design starts with a clear process. From the very
                        first conversation to the final delivery, we make sure your project is handled with creativity,
                        care,
                        and professionalism. Our step-by-step approach ensures that you always know what’s happening,
                        while we focus on delivering results that truly reflect your brand’s vision.</p>
                    <ul class="about-list">
                        <li>
                            <span class="list-info">
                                <span class="title">Discovery & Research: </span>
                                <span class="desc">We start by understanding your business, target audience, and goals.
                                    This helps us design visuals and strategies that align with your brand
                                    identity.</span>
                            </span>
                        </li>
                        <li>
                            <span class="list-info">
                                <span class="title">Creative Concept: </span>
                                <span class="desc">Once we have the insights, our team crafts unique design concepts —
                                    from
                                    logos to websites — that bring your ideas to life in a professional and appealing
                                    way. </span>
                            </span>
                        </li>
                        <li>
                            <span class="list-info">
                                <span class="title">Design & Development: </span>
                                <span class="desc">With creativity and precision, we refine and develop your chosen
                                    concept.
                                    Every detail is carefully designed to ensure it’s impactful, functional, and
                                    brand-focused. </span>
                            </span>
                        </li>
                        <li>
                            <span class="list-info">
                                <span class="title">Delivery & Support: </span>
                                <span class="desc">After finalizing the project, we deliver everything on time and in
                                    the best quality.
                                    We also provide ongoing support to make sure your brand always stays ahead. </span>
                            </span>
                        </li>
                    </ul>
                    <a href="about.html" class="theme-btn">View More</a>
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
                                <img src="assets/img/technical-suppo.webp" alt="icon01">
                                <span class="title">Create</span>
                                <p>We believe in being good at creating. Dedicated workers do their best work, with
                                    following deadlines.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="assets/img/analyzing.webp" alt="icon02">
                                <span class="title">Refine </span>
                                <p>Every detail matters. We carefully review,
                                    analyze, and refine your designs to ensure
                                    they’re polished, professional, and aligned
                                    with your vision.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon-box">
                                <img src="assets/img/camera-dolly.webp" alt="icon03">
                                <span class="title">Deliver </span>
                                <p>You will have access to all the work, regarding your work, you will be delivered with
                                    the best work with everything you want it to be.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 rt-side">
                    <img src="assets/img/banner.jpg" alt="lf-img">
                </div>
            </div>
        </div>
    </section>   
@endsection