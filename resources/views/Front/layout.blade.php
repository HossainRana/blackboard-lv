<!doctype html>
<html>

<head>
    @include('Front.include.head')
</head>

<body>

    <header>
        @include('Front.include.header')
    </header>
    <div class="layout_space">
        @yield('content')
    </div>
    <footer>
        @include('Front.include.footer')
    </footer>

    {{-- All Script related part  --}}
    <script type="text/javascript">
    $(window).on("scroll", function() {
        // if($(window).scrollTop() > 350) {
        //     $(".header").addClass("_header");
        //     $(".NK_menu").addClass("_NK_menu"); 
        //     $(".a_header").addClass("_a_header");
        // } else {
        //     //remove the background property so it comes transparent again (defined in your css)
        //    $(".header").removeClass("_header");
        //    $(".NK_menu").removeClass("_NK_menu");
        //    $(".a_header").removeClass("_a_header");
        // }
    });
    </script>
    <script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = '<i class="fa fa-pause-circle icon_size" aria-hidden="true"></i>';
        } else {
            video.pause();
            btn.innerHTML = '<i class="fa fa-play-circle icon_size" aria-hidden="true"></i>';
        }
    }


    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    </script>

</body>

</html>