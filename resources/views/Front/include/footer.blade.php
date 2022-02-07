<style>
    .footer-section {
        background: #151414;
        position: relative;
    }
    .footer-cta {
        /*border-bottom: 1px solid #373636;*/
    }
    .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
    }
    .cta-text {
        padding-left: 15px;
        display: inline-block;
    }
    .cta-text p{
        color: #878787 !important;
    }
    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }
    .cta-text span {
        color: #757575;
        font-size: 15px;
        line-height: 25px;
    }
    .footer-content {
        position: relative;
        z-index: 2;
    }
    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }
    .footer-logo {
        /*margin-bottom: 30px;*/
    }
    .footer-logo img {
        max-width: 140px;
    }
    .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #7e7e7e;
        line-height: 28px;
    }
    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }
    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }
    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }
    .facebook-bg{
        background: #3B5998;
    }
    .twitter-bg{
        background: #55ACEE;
    }
    .google-bg{
        background: #DD4B39;
    }
    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }
    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
    }
    .footer-widget ul li {
        display: inline-block;
        /*float: left;*/
        width: 50%;
        margin-bottom: 12px;
    }
    .footer-widget ul li a:hover{
        color: #ff5e14;
    }
    .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
    }
    .subscribe-form {
        position: relative;
        overflow: hidden;
    }
    .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
    }
    .subscribe-form button {
        position: absolute;
        right: 0;
        background: #ff5e14;
        padding: 13px 20px;
        border: 1px solid #ff5e14;
        top: 0;
        margin-top: 16px;
    }
    .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
    }
    .copyright-area{
        background: #202020;
        padding: 25px 0;
    }
    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }
    .copyright-text p a{
        color: #ff5e14;
    }
    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }
    .footer-menu li:hover a{
        color: #ff5e14;
    }
    .footer-menu li a {
        font-size: 14px;
        color: #878787;
    }

    .mb-15{
        margin-bottom: 15px;
    }
    #footer-social img{
        width: 100% !important;
    }

    @media screen and (max-width: 720px) {
        .cta-text{
            padding-left: 0;
        }

    }
</style>

<footer class="footer-section">
    <div class="container">
        <div class="footer-content" style="padding-top: 15px">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{URL::to('/')}}"><img src="{{asset('public/Front/site/images/logo/Blackborad-logo-for-web-white.png')}}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="margin-top: 14px">BLACKBOARD is a digital marketing business based in Bangladesh, staffed by the brightest, most talented, and devoted digital experts in the country; powered by NexKraft Limited, our primary goal is to offer services that create room for innovation & creativity.</p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 mb-15" style="margin-top: 50px">
                        <div class="single-cta" style="display: flex">
{{--                            <i class="fa fa-external-link"></i>--}}
                            <div class="cta-text">
                            <span id="footer-social" class="social-icons">
                                <a href="https://www.facebook.com/Blackboardlimited/" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/facebook.png')}}"/>
                                </a>
                                <a href="https://www.instagram.com/blackboard.digital/" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/instagram.png')}}"/>
                                </a>
                                <a href="www.linkedin.com/company/blackboardlimited/" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/linkedin.png')}}"/>
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/pintres.png')}}"/>
                                </a>
                                <a href="https://twitter.com/blackboard_ltd" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/twitter.png')}}"/>
                                </a>
                                <a href="https://www.youtube.com/channel/UCcya9G4vqgY1smpRPWedZOg" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/youtube.png')}}"/>
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/whatsapp.png')}}"/>
                                </a>
                                <a href="https://www.behance.net/blackboardlimited" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/dribbble white-05.png')}}"/>
                                </a>
                                <a href="https://dribbble.com/blackboardlimited" target="_blank">
                                    <img src="{{asset('public/Front/site/images/social-icons/web.png')}}"/>
                                </a>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-15">
                    <div class="row">
                        <div class="footer-widget col-md-5">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li><a href="#servicesContent">services</a></li>
                                <li><a href="{{URL::to('/logo-branding')}}">portfolio</a></li>
                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                <li><a href="{{URL::to('/about-us')}}">About us</a></li>
                            </ul>
                        </div>
                        <div class="single-cta col-md-7">
                            <div class="cta-text footer-widget-heading">
                                <h3>Call Us</h3>
                                <p>01759 355 355</p>
                                <p>01323 991 999</p>
                                <p>01776 000 008</p>
                            </div>
                            <div style="padding-top: 30px">
                                <i class="material-icons-outlined">location_on</i>
                                <p style="color: #878787; display: flex; margin-top: 5px">50 Lake Circus Road,<br/> Kalabagan, Dhanmondi, <br/> Dhaka-1209,Bangladesh</p>
                            </div>
                        </div>
                    </div>
{{--                    <div class="footer-widget-heading">
                        <h3 style="color: #ffffff">50 Lake Circus, Kolabagan Dhaka, 1207</h3>
                    </div>--}}

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Connect Now</h3>
                        </div>
{{--                        <div class="footer-text mb-25">
                            <p>Request a Call Back...<br/>Let’s have a Cup of Coffee! </p>
                        </div>--}}
                        <div class="subscribe-form">
                            <form action="{{URL::to('/send-mail')}}" method="post">
                                {{csrf_field()}}
                                <!-- Subject -->
                                    <div class="form-group position-relative">
                                        <label for="subject" class="d-block">
                                            <i class="icon" data-feather="user"></i>
                                        </label>
                                        <input type="text" id="subject" name="subject" hidden  class="form-control form-control-lg thick" value="Footer Request" readonly>
                                    </div>
                                <input type="email" id="formEmail" name="email" placeholder="Email Address">
                                <button type="submit"><i class="fa fa-telegram"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single-cta">
{{--                        <i class="fa fa-map-marker"></i>--}}
                        <div class="cta-text" style="padding-top: 15px; padding-left: 0; width: 100%">
                            <span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.943289922846!2d90.3799380719473!3d23.751423661702407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b91946bd980b%3A0x3246c78990d3433e!2sBlackboard%20Digital!5e0!3m2!1sen!2sbd!4v1625500647878!5m2!1sen!2sbd" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row" style="justify-content: center">
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021, All Rights Reserved <a href="https://nexkraft.com" target="_blank">Nexkraft</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
