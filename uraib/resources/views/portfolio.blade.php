@extends('index')
@extends('nav')
@extends('footer')

@section('content')
    <section class="banner-home bg_blue">
        <div class="container text-white">
            <div class="row banner-top align-items-center">
                <div class="col-lg-7 banner-content">
                    <span class="sub-hd">Yes! We Have a Portfolio</span>
                    <h1 class="theme-hd"><span class="bold">What We Have <br> Created</span></h1>
                    <p>At Nova Creation, we take pride in crafting designs that inspire and connect.
                        From unique logos to engaging websites, our portfolio highlights the creativity
                        and dedication we put into every project.</p>
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
                                <textarea class="form-control" placeholder="Additional question if any" name="h_msg"></textarea>
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
                    <a id="pills-logo-tab" class="active" data-bs-toggle="pill" data-bs-target="#pills-logo" type="button"
                        role="tab" aria-controls="pills-logo" aria-selected="true">Presentation Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab"
                        aria-controls="pills-web" aria-selected="false">UI/UX Design</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a id="pills-ecom-tab" data-bs-toggle="pill" data-bs-target="#pills-ecom" type="button" role="tab"
                        aria-controls="pills-ecom" aria-selected="false">Social Media Design</a>
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
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/10.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/09.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/08.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/02.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/10.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/09.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/08.webp">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/logo/02.webp">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade " id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-2.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-3.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-4.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-5.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-6.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-7.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/website/thumb-3.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-ecom" role="tabpanel" aria-labelledby="pills-ecom-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/2.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/3.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/4.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/5.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/6.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/7.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/ecommerce/8.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/2.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/3.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/4.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/5.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/6.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/7.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/video-animation/8.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-illus" role="tabpanel" aria-labelledby="pills-illus-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/2.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/3.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/4.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/5.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/6.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/7.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/illustration/8.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="pills-market" role="tabpanel" aria-labelledby="pills-market-tab">
                    <ul class="responsive-slider">
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/2.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/3.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/4.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/5.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/1.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/6.jpg">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="portfoliologo">
                                <img alt="img" src="assets/img/portfolio/branding/7.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
