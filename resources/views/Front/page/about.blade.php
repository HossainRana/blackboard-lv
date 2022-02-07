@section('title', 'About Us | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    <style>
        section:nth-child(odd){
        // background-color: grey;
            color:gray;
            background-color: #000000;

        }
    </style>


    {{--            Preloader           --}}

    @include('Front.preloader')


    <div class="about-us">
        <div class="heading-details" style="text-align: center; color: #ffffff">
            <h1>About Us</h1>
            <p>Check out our portfolio highlighting<br/>the work we have for our clients</p>
        </div>
        <div class="about-brief">
            <p>
                <b>BLACKBOARD</b> is a digital marketing business based in Bangladesh, staffed by the brightest, most talented, and devoted digital experts in the country.
                Our services include: web design & development, graphics design, logo design, digital marketing, legal & business support, event management and training.
                Over the years, we have provided specialist services to many clients from a variety of industries including travel, e-commerce, software firm and service
                providers. It’s all about embracing your brand’s vision. <b>BLACKBOARD</b> is powered by NexKraft Limited, whose primary goal is to offer services that create
                room for innovation & creativity.
            </p>
        </div>
    </div>
    <div class="about-details" style="padding-top: 15px !important;">
        <div class="row">
            <div class="col-md-8">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/2.jpg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"After completing a successful project with A2i & ICT Ministry. Ingratiation by Prime Minister Sheikh Hasina."</i>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"Birthday Celebration of our CTO."</i>
                    </p>
                </div>
            </div>
            <div class="col-md-8" style="display: flex; justify-content: flex-end">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/3.jpg">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/1.jpg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"Attending a discussion meeting with FBCCI"</i>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"Our business manager providing brand expansion solutions to a client."</i>
                    </p>
                </div>
            </div>
            <div class="col-md-8" style="display: flex; justify-content: flex-end">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/Blackboard-digital-activity-6.jpg">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/Blackboard-digital-activity-2.jpg">
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"UI UX Presentation at BRAC center for the Internal Apps."</i>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="info-details">
                    <p>
                        <i>"Blackboard New Year celebration 2022"</i>
                    </p>
                </div>
            </div>
            <div class="col-md-8" style="display: flex; justify-content: flex-end">
                <div class="office-env">
                    <img src="{{asset('Front/site/images/our activites image')}}/newyear2022.jpeg">
                </div>
            </div>
        </div>
    </div>



    <div class="about-wave">

    </div>

    <div class="team-meeting">
        <div class="pattern1" style="top: 0 !important;">
            <img src="{{asset('public/Front/site/images/circle.png')}}"/>
        </div>

        <div class="pattern2" style="top: 0 !important;">
            <img src="{{asset('public/Front/site/images/rectangle.png')}}"/>
        </div>
        <div class="heading-details" style="text-align: center; color: #ffffff">
            <h1>Our Activity</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="team-details">
                    <h2 style="text-align: center; color: #ffffff">Move over cliches like “New Year, New us.</h2>
                    <p>
                        This was the day that we started a new journey after the pandemic. The day that brought forth renewed hope and wishes of providing services
                        for clients that were even better than before. The most important part of our family is that we work together, celebrate together and achieve
                        together. Working as a team and celebrating like family.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-img">
                    <img src="{{asset('Front/site/images/ourActivity')}}/activity-1.jpg"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="team-img">
                    <img src="{{asset('Front/site/images/ourActivity')}}/activity-3.jpg"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-details">
                    <h2 style="text-align: center; color: #ffffff">Hang out with the whole team at the movies for a day of refreshment</h2>
                    <p style="text-align: left">
                        After long hours of work, everybody needs a well-deserved break. This is our team at Cineplex, enjoying their time together.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="team-details">
                    <h2 style="text-align: center; color: #ffffff">Celebration after successfully finalizing a big agreement</h2>
                    <p>
                        Our entire team's efforts and accomplishments are rewarded with joy. Making sure we count every small effort made, Blackboard never fails to
                        celebrate success that comes from the hard work from every staff member.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-img">
                    <img src="{{asset('Front/site/images/ourActivity')}}/activity-2.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-0">
        <div class="col-md-6 p-0">
            <div class="team-discussion">
                <div class="inner-d-dis">
                    <h1>Team</h1>
                    <p>Celebration</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="team-meeting-b">
                <div class="inner-d-dis">
                    <h1>Team</h1>
                    <p>Celebration</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scroll-top')

@endsection