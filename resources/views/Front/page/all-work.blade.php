@section('title', 'Discover More About Blackboard | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    @include('Front.preloader')

    <style>
        .slick-slider .element{
/*            height: 150px;
            width: 150px;*/
        }
        .slick-slider .element .inner-element{
            display: flex;
            flex-direction: column;
            padding-right: 14px;
        }
        .slick-slider .element .inner-element img{
            width: 100%;
            margin-bottom: 14px;
            background: #ffffff;
            padding: 8px;
            border-radius: 8px;
            height: 200px;
            object-fit: contain;
        }

        @media (max-width: 756px) {
            .slick-slider .element .inner-element img{
                width: 100%;
                margin-bottom: 14px;
                background: #ffffff;
                padding: 8px;
                border-radius: 8px;
            }
        }
        .next-arrow{
            position: absolute !important;
            z-index: 1 !important;
            right: 0 !important;
            border: none !important;
            background-color: black !important;
            top: 0% !important;
            outline: none !important;
            opacity: 0.5;
            height: 100%;
            cursor: pointer;
        }

        .prev-arrow{
            position: absolute !important;
            z-index: 1 !important;
            left: 0 !important;
            border: none !important;
            background-color: black !important;
            top: 0% !important;
            outline: none !important;
            opacity: .5;
            height: 100%;
            cursor: pointer;
        }

        .slick-slide:hover .next-arrow .prev-arrow{
            opacity: 1 !important;
        }
    </style>


    {{--            Logos           --}}

    <div class="all-work-container">
        <div class="header-d-d" id="logos">
            <h1 class="all-d-heading">Logos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Nexkraft.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Mindshaper.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Nexmart.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/NexParc.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Notes-of-Shahriar.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Orfactor.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Shahi Kalai.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Share-Out.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Software-Bazar.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Technitian.jpg" >
                        </div>
                    </div>

{{--                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Waves.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Womens-Forum.jpg" >
                        </div>
                    </div>--}}

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Mstudio.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Mechanix.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Mechanic-Mama.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Khan-Traders.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Her-Look.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Golmele.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/E-Commercebarta.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/Eclub.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/logoSlider')}}/Dress-Meet.jpg" >
                            <img src="{{asset('Front/site/images/logoSlider')}}/ABC Logo Presantation-05.jpg" >
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Animated Logos          --}}

        <div class="header-d-d" id="animatedLogo">
            <h1 class="all-d-heading">Animated Logos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="animated-logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/b15bfO46MjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/oLy14SB163c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gl-1ZSPglWs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qYIU-VCR1dE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hPd7TGTEZL8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HvCZ2r2c_SQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/yod2-UA57TE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/USEgwswGZXw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2i9YuahGMDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/nynkw89NYRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Branding          --}}

        <div class="header-d-d" id="brandingLogo">
            <h1 class="all-d-heading">Branding</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/1.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/2.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/3.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/4.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/5.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/6.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/7.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/8.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/9.png" >
                            <img src="{{asset('Front/site/images/branding_')}}/10.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/11.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/12.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/13.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/14.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/15.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/16.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/17.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/18.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/19.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/20.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/21.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/22.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/23.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/24.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/25.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/26.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/branding_')}}/27.jpg" >
                            <img src="{{asset('Front/site/images/branding_')}}/28.jpg" >
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Social Media          --}}

        <div class="header-d-d" id="socialMediaLogo">
            <h1 class="all-d-heading">Social Media</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-01.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-02.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-03.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-04.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-05.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-06.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-07.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-08.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-09.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-10.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-11.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-12.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-13.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-14.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-15.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-18.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-31.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-20.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-21.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-23.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-24.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-25.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-26.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-27.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-28.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-29.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-30.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-31.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-32.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-33.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-35.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-38.png" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-39.png" >
                            <img src="{{asset('Front/site/images/post photos')}}/Blackboard Post Photo-40.png" >
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Ui/UX          --}}

        <div class="header-d-d" id="uiuxLogo">
            <h1 class="all-d-heading">UI/UX</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/1.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/2.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/3.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/4.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/5.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/6.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/7.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/8.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/9.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/10.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/11.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/12.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/13.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/14.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/UI mockup')}}/15.jpg" >
                            <img src="{{asset('Front/site/images/UI mockup')}}/16.jpg" >
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Promotional Videos         --}}

        <div class="header-d-d" id="promotionalLogo">
            <h1 class="all-d-heading">Promotional Video</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="promotional-video-slider">
                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/8cNQzHAaRK4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Vkmr1zEMTkU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/mGEvPB2cgqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/O-hEdtQ6HnE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/AxqfFnwRG9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tYrhzsh6sM8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5NHBXMePgps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N_pIiPsSN-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VEHH1ifaPmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/2iBOLRu8Tkw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KEhMF8hvsAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/GxxJgMGFTSA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zwNGzvHLKck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CiLI2W1GaLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--            Events         --}}

        <div class="header-d-d" id="eventLogo">
            <h1 class="all-d-heading">Event Management</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor nulla at felis eleifend hendrerit.</p>
        </div>
        <div class="all-slider">
            <div class="container">
                <div class="logo-slider">
                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/27.jpeg" >
                            <img src="{{asset('Front/site/images/event')}}/23.jpeg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/24.jpeg" >
                            <img src="{{asset('Front/site/images/event')}}/26.jpeg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/25.jpeg" >
                            <img src="{{asset('Front/site/images/event')}}/16.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/1.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/2.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/3.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/4.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/5.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/6.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/7.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/8.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/9.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/10.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/11.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/12.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/13.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/14.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/15.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/16.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/17.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/18.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/19.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/20.jpg" >
                        </div>
                    </div>

                    <div class="element">
                        <div class="inner-element">
                            <img src="{{asset('Front/site/images/event')}}/21.jpg" >
                            <img src="{{asset('Front/site/images/event')}}/22.jpg" >
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="social-media-container res-mb" style="padding-bottom: 50px">
            <p style="color: #ffffff; text-align: center ">To see our more activities <br/> Please like, subscribe, follow and do visit our site</p>
{{--            <h1 class="portfolio-heading" style="color: #ffffff; text-align: center ">Follow Us</h1>--}}
            <div class="social-icons" style="justify-content: center !important;">
                <a href="https://www.facebook.com/Blackboardlimited/" target="_blank">
                    <img src="{{asset('public/Front/site/images/social-icons/facebook.png')}}"/>
                </a>
                <a href="https://www.instagram.com/blackboard.digital/" target="_blank">
                    <img src="{{asset('public/Front/site/images/social-icons/instagram.png')}}"/>
                </a>
                <a href="https://www.linkedin.com/company/72661551/admin/" target="_blank">
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
            </div>
        </div>
    </div>


    @include('layouts.scroll-top')


    <script>
        // Slick Slider
        jQuery(".logo-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4 * 700,
            arrows : true,
            cssEase: 'linear',
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="material-icons-outlined custom-m-icon">arrow_back_ios</i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="material-icons-outlined custom-m-icon">arrow_forward_ios</i></button>'
        });

        // Animated Logo Slider
        jQuery(".animated-logo-slider, .promotional-video-slider").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4 * 900,
            arrows : true,
            cssEase: 'linear',
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="material-icons-outlined custom-m-icon">arrow_back_ios</i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="material-icons-outlined custom-m-icon">arrow_forward_ios</i></button>'
        });
        

        // Slick Scroll
/*        jQuery(function () {
            const slider = jQuery(".logo-slider");
            slider;

            slider.on("wheel", function (e) {
                e.preventDefault();

                if (e.originalEvent.deltaY < 0) {
                    jQuery(this).slick("slickNext");
                } else {
                    jQuery(this).slick("slickPrev");
                }
            });
        });*/

        // https://codepen.io/vone8/
    </script>

@endsection