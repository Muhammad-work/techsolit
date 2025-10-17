@extends('index')
@extends('nav')
@extends('footer')

@section('content')
    <section class="banner-home bg_blue">
        <div class="container text-white">
            <div class="row banner-top align-items-center">
                <div class="col-lg-6 banner-content">
                    <span class="sub-hd">Creative Design Solutions That Inspire</span>
                    <h1 class="theme-hd"><span class="bold">Contact Us </span></h1>
                    <p>At Nova Creation, we specialize in turning ideas into impactful visuals that elevate your brand.
                        Whether it’s a logo, website, or complete branding package, our goal is to deliver designs that
                        connect with your audience and make your business stand out. Let’s create something
                        amazing together — reach out today! </p>
                </div>
            </div>
        </div>
        <div class="right-top"><img src="assets/img/about-hero-img.jpg" alt="about-img"></div>
    </section>

    <section class="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="theme-hd">Contact <span class="clr-change">Us</span></h2>
                    <p class="theme-para">Got questions about using our service or anything else? Contact us today, our
                        team is eager to help!</p>
                    <div class="h_banner_form">
                        <form action="{{ route('callback.submit') }}" method="post" >
                            @if (session('success'))
                                <div style="color: green; font-weight: bold; margin-bottom: 15px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @csrf
                            <div class="d-flex">
                                <div class="form-group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" name="h_name" placeholder="Enter Your Full Name"
                                        class="form-control" required="required"
                                        style="color: black; background-color: white;">
                                </div>
                                <div class="form-group">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" name="h_email" placeholder="Enter Your Email Address"
                                        class="form-control" required style="color: black; background-color: white;">
                                </div>
                            </div>
                            <div class="form-group">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="number" name="h_num" placeholder="Enter Your Phone Number"
                                    class="form-control" required="required" style="color: black; background-color: white;">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                <textarea class="form-control" placeholder="Additional question if any" name="h_msg"
                                    style="color: black; background-color: white;"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="h_b_btn" name="banner_btn">Request A Callback</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cnt-info">
                        <a href="tel:+1234567801"><i class="fa fa-phone"></i> +93 3283 394 910</a>
                        <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@novacreation.uk</a>
                        <a href="#"><i class="fa fa-map-marker"></i> your location goes here</a>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    General Inquiries #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    If you have questions about our services, pricing, or process, feel free to reach out.
                                    Our team is happy to assist you with any information you need before getting started.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Project Support #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Already working with us? You can contact your project manager directly or email our
                                    support team for updates, revisions, or help with your ongoing project.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Feedback & Suggestions #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We value your feedback! Share your experience or suggestions to help us improve our
                                    services. Every message helps us grow and serve you better.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="portal-sec">
    </section>
@endsection
