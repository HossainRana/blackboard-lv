@section('title', 'Logo & Branding | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    <style>
        @media screen and (max-width: 768px){
            .social-icons img{
                width: 100% !important;
            }
        }
    </style>



    {{--            Preloader           --}}

    @include('Front.preloader')

    <div class="logo-branding">
        <div class="heading-details" style="text-align: center">
            <h1 style="color: #ffffff">Portfolio</h1>
            <p style="color: #ffffff">Check out the works we've done for our other clients<br/>Our portfolio includes case studies work done for<br/>design, development and social.</p>
        </div>


        <div class="portfolio-branding-container">
            <div>
                <div class="pattern1">
                    <img src="{{asset('public/Front/site/images/circle.png')}}"/>
                </div>

                <div class="pattern2">
                    <img src="{{asset('public/Front/site/images/rectangle.png')}}"/>
                </div>
            </div>
            <h1 class="portfolio-heading">Branding</h1>
            <div class="row m-0 pb-5">
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('public/Front/site/images/portfolio/1.jpg')}}" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('public/Front/site/images/portfolio/2.jpg')}}" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('public/Front/site/images/portfolio/3.jpg')}}" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/branding')}}/ecombarta-work-cut.png" alt="" width="100%"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-website-container">
            <h1 class="portfolio-heading">Website</h1>
            <div class="row m-0">
                <div class="col-md-6">
                    <a href="https://nexkraft.com/" target="_blank">
                        <div class="portfolio-image-d">
                            <img src="{{asset('public/Front/site/images/portfolio/4.jpg')}}" alt="" width="100%"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://shareout.com.bd/" target="_blank">
                        <div class="portfolio-image-d">
                            <img src="{{asset('public/Front/site/images/portfolio/5.jpg')}}" alt="" width="100%"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://mindshaper.xyz/" target="_blank">
                        <div class="portfolio-image-d">
                            <img src="{{asset('public/Front/site/images/Mindshaper')}}/mindshaper.jpeg" alt="" width="100%" style="transform: scale(1.1)"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="https://shudristi.com" target="_blank">
                        <div class="portfolio-image-d">
                            <img src="{{asset('public/Front/site/images/portfolio/9.jpg')}}" alt="" width="100%"/>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="portfolio-sociaL-container">
            <h1 class="portfolio-heading">Social Media</h1>
            <div class="row m-0 pb-5">
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/social')}}/Untitled-1-05.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/social')}}/Blackboard-digital-limited-social-media-post-design-510x280.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/social')}}/Untitled-1-06.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/social')}}/Untitled-1-08.jpg" alt="" width="100%"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-sociaL-container">
            <h1 class="portfolio-heading">UI/UX</h1>
            <div class="row m-0 pb-5">
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/uiux')}}/uiux-5.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/uiux')}}/uiux-2.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/uiux')}}/uiux-3.png" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/uiux')}}/uiux-4.png" alt="" width="100%"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-sociaL-container">
            <h1 class="portfolio-heading">Event Management</h1>
            <div class="row m-0 pb-5">
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/eventmanagement')}}/event-1.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/eventmanagement')}}/event-2.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/eventmanagement')}}/event-3.jpg" alt="" width="100%"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-image-d">
                        <img src="{{asset('/Front/site/images/eventmanagement')}}/event-4.jpg" alt="" width="100%"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-sociaL-container">
            <h1 class="portfolio-heading">Promotional Videos</h1>
            <div class="row m-0 pb-5">
                <div class="col-md-6">
                    <div class="portfolio-y-tube">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/zwNGzvHLKck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-y-tube">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/GxxJgMGFTSA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-y-tube">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/KEhMF8hvsAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-y-tube">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/VEHH1ifaPmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scroll-top')

@endsection