<style>
    :root {
        --color0: #fff;
        --color1: #F25CA2;
        --color2: #0433BF;
        --color3: #032CA6;
        --color4: #021859;
        --color5: #0B9ED9;
        --color6: #000;
    }

    header {
        width: 100%;
        background-color: #000000;
        position: fixed;
        z-index: 9999;
        /*border-bottom: 1px solid #ffffff14;*/
    }

    .container {
        width: 100%;
        max-width: 120rem;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    nav {
        width: 100%;
        height: 5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar-brand {
        display: flex;
    }

    .navbar-brand i {
        font-size: 4rem;
        color:var(--color0);
        margin: auto;
    }

    .nav-list {
        display: flex;
        list-style: none;
    }

    .nav-link {
        text-decoration: none;
        display: block;
        color: var(--color0);
        text-transform: capitalize;
        transform: scale(0);
        transition: transform 650ms;
    }

    .nav-item {
        position: relative;
        line-height: 2rem;
        transition-delay: .4s;
        visibility: hidden;
    }

    .nav-item::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #ffffff;
        left: 0;
        bottom: 0;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 650ms cubic-bezier(.68, -.55, .265, 1.55);
    }

    .nav-item:hover::before {
        transform: scaleX(1);
        transform-origin: left;
    }

    /* Hamburger Menu */
    .hamburger {
        width: 3rem;
        height: 1.8rem;
        position: relative;
        cursor: pointer;
        line-height: 5rem;
        z-index: 99999;
    }

    .hamburger .line {
        width: 70%;
        height: 2px;
        background-color: var(--color0);
        position: absolute;
        display: block;
        right: 0;
        transition: all 650ms;
    }

    .hamburger .line:nth-child(1) {
        top: 0;
    }

    .hamburger .line:nth-child(2) {
        top: 50%;
        margin-top: -1px;
        width: 70%;
    }

    .hamburger .line:nth-child(3) {
        top: 100%;
        margin-top: -2px;
        width: 70%;
    }

    .hamburger.active .line:nth-child(1) {
        transform: translateY(.8rem) rotate(45deg);
        width: 2rem;
    }

    .hamburger.active .line:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .line:nth-child(3) {
        transform: translateY(-.8rem) rotate(-45deg);
        width: 2rem;
    }


    .nav-list.active .nav-link {
        transform: scale(1);
    }

    .nav-list.active .nav-item {
        transition-delay: initial;
        visibility: visible;
    }

    .nav-list.active .nav-item:nth-child(1) .nav-link {
        transition-delay: .5s;
    }

    .nav-list.active .nav-item:nth-child(2) .nav-link {
        transition-delay: .4s;
    }

    .nav-list.active .nav-item:nth-child(3) .nav-link {
        transition-delay: .3s;
    }

    .nav-list.active .nav-item:nth-child(4) .nav-link {
        transition-delay: .2s;
    }

    .nav-list.active .nav-item:nth-child(5) .nav-link {
        transition-delay: .1s;
    }

    /* reverse animation */

    .nav-list .nav-item:nth-child(1) .nav-link {
        transition-delay: .1s;
    }

    .nav-list .nav-item:nth-child(2) .nav-link {
        transition-delay: .2s;
    }

    .nav-list .nav-item:nth-child(3) .nav-link {
        transition-delay: .3s;
    }

    .nav-list .nav-item:nth-child(4) .nav-link {
        transition-delay: .4s;
    }

    .nav-list .nav-item:nth-child(5) .nav-link {
        transition-delay: .5s;
    }

    @media screen and (max-width: 768px) {

        .nav-list {
            width: 100%;
            height: 100vh;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000000;
            position: fixed;
            left: 0;
            bottom: -100vh;
            transform: bottom 650ms;
            z-index: 9999;
            padding: 0 !important;
        }

        .nav-list.active {
            bottom: 0;
        }

    }
    .nav-link,
    .nav-item a{
        font-size: 1.3rem;
    }

    .scroll-add{
        display: none;
    }

    .scroll-show{
        display: block;
    }

    .navbar-brand{
        transition-duration: 3s;
    }
</style>





<header>
    <div class="container">
        <nav>
            <a class="navbar-brand" href="{{URL::to('/')}}">
                <img class="scroll-effect scroll-show" src="{{asset('public/Front/site/images/logo/Blackborad-logo-for-web-white.png')}}" width="220px" style="width: 220px; height: 78px; object-fit: contain; padding: 15px 0"/>
            </a>
            <ul class="nav-list" style="margin: 0">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{URL::to('/#servicesContent')}}" id="services">Our Services</a>
{{--                    <ul class="dropdown-menu menu-custom">
                        <li><a href="{{URL::to('/logo-branding')}}">Logo & Branding</a></li>
                        <li><a href="{{URL::to('/logo-branding')}}">Promotional Video</a></li>
                        <li><a href="{{URL::to('/logo-branding')}}">UI / UX</a></li>
                        <li><a href="{{URL::to('/logo-branding')}}">Social Media</a></li>
                    </ul>--}}
                </li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/about-us')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/logo-branding')}}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/career')}}">Career</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/contact')}}">contacts</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </div>
</header>

<script>
    const elment = document.querySelector('.hamburger');
    const elment1 = document.querySelector('.nav-list');

    elment.addEventListener("click", ()=> {
        elment.classList.toggle('active');
        elment1.classList.toggle('active');
    })
</script>

<script>
    $("#services").click(function() {
        $('html, body').animate({
            scrollTop: $("#servicesContent").offset().top
        }, 2000);
    });

</script>

<script>
    $(window).scroll(function(){
        if($(this).scrollTop()>150) {
            $('.navbar-brand img').attr('src','{{asset('public/Front/site/images/logo/Blackborad-icon-white-web.png')}}').fadeIn();
        }
        else {
            $('.navbar-brand img').attr('src','{{asset('public/Front/site/images/logo/Blackborad-logo-for-web-white.png')}}').fadeIn();
        }
    })


    $(window).scroll(function(){
        if($(this).scrollTop()>350) {
            // $("#scrollTopClick").show();
            $(".scroll-top").addClass('transitionScroll');
            $(".scroll-top").removeClass('fold-up');
        }
        else {
            // $("#scrollTopClick").hide();
            $(".scroll-top").removeClass('transitionScroll');
            $(".scroll-top").addClass('fold-up');
        }
    })
</script>