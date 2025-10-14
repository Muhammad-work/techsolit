@section('footer')
    <footer class="bg-blue footer-outer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 foot-about">
                        <a href="index.html"><img src="assets/img/footer-logo.png" alt="footer-logo"></a>
                        <p>Nova Creation is a creative design studio
                            dedicated to crafting logos, websites,
                            social media visuals, and presentations that
                            inspire and connect. We bring ideas to life
                            with originality, clarity, and attention to detail.</p>
                        <ul class="foot-info">
                            <li><a href="mailto:info@techsolit.com"> info@techsolit.com </a></li>
                            <li><a href="tel:+12345678901"> +12345678901</a></li>
                            <li><a href="#"> your text goes here it's just a placeholder</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 foot-services">
                        <h4>All Services</h4>
                        <ul>
                            <li><a href="{{route('ui')}}">UI/UX Design</a></li>
                            <li><a href="{{route('Presentation')}}"> Presentation Design</a></li>
                            <li><a href="{{route('socail')}}"> Social Media Design</a></li>
                            <li><a href="{{route('cover-design')}}"> E-Book & Cover Design</a></li>
                            <li><a href="{{route('logo')}}"> Logo Design</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="{{route('home')}}"> Home</a></li>
                            <li><a href="{{route('about')}}"> About</a></li>
                            <li><a href="#"> Services</a></li>
                            <li><a href="{{route('packages')}}"> Packages</a></li>
                            <li><a href="{{route('e-book')}}"> Careers</a></li>
                            <li><a href="{{route('portfolio')}}"> Portfolio</a></li>
                            <li><a href="{{route('testimonials')}}"> Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 p-0">
                        <h4>Contact Details</h4>
                        <form class="newsletter">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Enter Your Email Here"
                                    name="email">
                            </div>
                            <button type="button">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <p>Copyright © 2025 NOVA CREATION All Rights Reserved. Privacy | Terms of Use<a
                            href="index.html">Privacy</a> | <a href="index.html">Terms of Use</a></p>
                    <div class="foot-social">
                        <a href="https://www.facebook.com/designsmakers99/" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/designsmakers_/" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/designs-makers-8769b9258/" target="_blank"><i
                                class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
