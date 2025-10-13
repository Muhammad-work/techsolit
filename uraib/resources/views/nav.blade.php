@section('nav')
    <header id="header-outer">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav main-nav mb-2 mb-lg-0">
                        <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link ">About</a></li>
                        <li class="nav-item service-menu dropdown">
                            <a href="javascript:;" class="nav-link dropdown-toggle " id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="dissertation.html">Dissertation</a></li>
                                <li><a class="dropdown-item " href="essay.html">Essay</a></li>
                                <li><a class="dropdown-item " href="assignment.html">Assignment</a></li>
                                <li><a class="dropdown-item " href="thesis.html">Thesis</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="e-book.html" class="nav-link ">E-Book</a></li>
                        <li class="nav-item"><a href="packages.html" class="nav-link ">Packages</a></li>
                        <li class="nav-item"><a href="portfolio.html" class="nav-link ">Portfolio</a></li>
                        <li class="nav-item"><a href="testimonials.html" class="nav-link ">Testimonials</a></li>
                    </ul>
                    <ul class="navbar-nav cnt-info">
                        <li class="nav-item"><a href="contact-us.html" class="theme-btn">Contact Now</a></li>
                    </ul>
                </div>
                <!-- mega service menu -->
                <div class="service-dropdown dropdown-sec" style="display:none;">
                    <div class="row service-box justify-content-center">
                        <div class="col-lg-3 web">
                            <a href="services/web-design.html" class="service-type-box">
                                <img alt="img" src="assets/img/icons/web.png" class="service-icon">
                                <h2>Logo Design</h2>
                                <p>A unique logo is the face of your brand.
                                    At Nova Creation, we design modern and
                                    memorable logos that leave a lasting impression.</p>
                            </a>
                        </div>
                        <div class="col-lg-3 logo">
                            <a href="services/logo-design.html" class="service-type-box">
                                <img alt="img" src="assets/img/icons/logo.png" class="service-icon">
                                <h2>Social Media Design</span></h2>
                                <p>From posts to banners, we design engaging
                                    social media content that boosts your brand’s
                                    online presence and connects with your audience.</p>
                            </a>
                        </div>
                        <div class="col-lg-3 ecom">
                            <a href="services/ecommerce.html" class="service-type-box">
                                <img alt="img" src="assets/img/icons/ecom.png" class="service-icon">
                                <h2>Presentation Design</h2>
                                <p>Professional and creative pitch decks,
                                    business presentations, and slides that make
                                    your ideas stand out with impact.</p>
                            </a>
                        </div>
                        <div class="col-lg-3 seo">
                            <a href="services/seo.html" class="service-type-box">
                                <img alt="img" src="assets/img/icons/seo.png" class="service-icon">
                                <h2>E-Book & Cover Design</h2>
                                <p>Beautifully designed e-books and covers that combine
                                    readability with creativity, giving your content a
                                    professional edge.</p>
                            </a>
                        </div>
                        <div class="col-lg-3 smm">
                            <a href="services/smm.html" class="service-type-box">
                                <img alt="img" src="assets/img/icons/smm.png" class="service-icon">
                                <h2>UI/UX Design</h2>
                                <p>Intuitive, user-friendly, and visually consistent
                                    UI/UX designs that bring your digital
                                    products to life.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
