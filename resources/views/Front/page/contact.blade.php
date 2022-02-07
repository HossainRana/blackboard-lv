@section('title', 'Contact | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    <style>
        .container-contact{
            padding-top: 80px;
            /*width: 80%;*/
            margin: 0 auto;
            min-height: 100vh;
        }

        .contact-inner-d{
            height: 100%;
            width: 100%;
            margin-top: 40px;
        }

        @media screen and (max-width: 1400px) {
            .contact-inner-d{
                margin-top: 80px;
            }
        }
        .contact-heading{
            display: flex;
            justify-content: space-around;
        }
        .contact-heading h2{
            font-size: 2.5rem;
            font-weight: 700;
        }
        .contact-heading p{
            font-size: 1rem;
            line-height: 20px;
        }

/*        .form-background{
            background-image: url('./public/Front/site/images/contact_png/Untitled-1-03.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
        }*/


        form {
            min-width: 25rem;
        }
        form .title {
            color: #212529;
            font-size: 2.5rem;
        }
        form .form-control {
            background-color: #f2f6f8;
            border-radius: 2rem;
            border: none;
            box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.11);
        }
        form .form-control.thick {
            height: 3.3rem;
            padding: 0.5rem 1.8rem;
        }
        form .form-control:focus {
            background-color: #f2f6f8;
            border: none;
            box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.11);
        }
        form .message .form-control {
            padding: 0.5rem 1.8rem;
        }
        form ::placeholder {
            font-family: 'Quicksand', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            color: #838788;
            position: relative;
            left: 0;
        }
        form input, form textarea {
            font-family: 'Quicksand', sans-serif;
            color: #212529;
            font-size: 1.1rem;
        }
        form .icon {
            color: #57565c;
            height: 1.3rem;
            position: absolute;
            left: 1.5rem;
            top: 1.1rem;
        }
        .btn.btn-primary {
            font-family: 'Quicksand', sans-serif;
            font-weight: bold;
            height: 55px;
            line-height: 2.5rem;
            padding: 0 3rem;
            border: 0;
            border-radius: 3rem;
            /*background-image: linear-gradient( 131deg , #ffffff, #212121, #000000, #ffffff);*/
            background-size: 300% 100%;
            transition: all 0.3s ease-in-out;
            background-color: #3e79d9;
        }
        .btn.btn-primary:hover:enabled {
            box-shadow: 0 0.5em 0.5em -0.4em #ff923c ba;
            background-size: 100% 100%;
            transform: translateY(-0.15em);
        }

        .form-bg-img{
            position: relative;
        }

        .container-form{
            padding-top: 40px;
            margin-bottom: 30px;
        }

        @media screen and (max-width: 1440px) {

            .container-form{

            }

        }
        .social-media-container{
            padding-top: 0;
            padding-bottom: 50px;
            margin-top: 25%;
        }
        #contact .social-icons img{
            width: 60px;
        }

        .social-icons{
            justify-content: left;
        }

        .form-background{
            background-image: url('./public/Front/site/images/contact_png/Untitled-1-03.png');
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            height: 100%;
            width: 100%;
        }

        .container-form form{
            /*margin-top: 10%;*/
        }

        .right-img-d{
            background-image: url('./public/Front/site/images/contact_png/Untitled-1-05.png');
            background-repeat: no-repeat;
            background-position: left center;
            background-size: cover;
            height: 100%;
            width: 100%;
            margin-top: 85px;
        }

        .custom-input{
            width: 20px;
            height: 20px;
            margin: 0px 0px 4px;
        }

        .custom-label{
            color: #6c757d;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .position-relative input:checked + label {
            color: #ffffff !important;
        }
    </style>


    {{--            Preloader           --}}

    @include('Front.preloader')


    <div class="container-contact">
        <div class="contact-inner-d">
            <div class="contact-heading">
                <div>
                    <h2 style="padding: 1rem 1.8rem; font-weight: 600">Say hi</h2>
                </div>
                <div>
                    <h2>Contact us</h2>
                    <p>Have a project we can help with? <br/>Give us a call or reach out to us on social media.</p>
                </div>
            </div>

            <div class="row m-0">
                <div class="col-md-6 col-lg-7 col-sm-12 p-0">
                    <div class="form-background">
                        <div class="container container-form d-flex justify-content-center align-items-center">
                            <form method="post" action="{{URL::to('/send-mail')}}" id="contact-form" enctype="multipart/form-data" method="POST">
                                {{csrf_field()}}

                                <!-- Subject -->
                                <div class="form-group position-relative">
                                    <label for="subject" class="d-block">
                                        <i class="icon" data-feather="user"></i>
                                    </label>
                                    <input type="text" id="subject" name="subject" hidden  class="form-control form-control-lg thick" value="Request Call Back" readonly>
                                </div>

                                <!-- Name -->
                                <div class="form-group position-relative">
                                    <label for="name" class="d-block">
                                        <i class="icon" data-feather="user"></i>
                                    </label>
                                    <input type="text" id="formName" name="name" class="form-control form-control-lg thick" placeholder="Name" required>
                                </div>

                                <!-- E-mail -->
                                <div class="form-group position-relative">
                                    <label for="email" class="d-block">
                                        <i class="icon" data-feather="mail"></i>
                                    </label>
                                    <input type="email" id="formEmail" name="email" required class="form-control form-control-lg thick" placeholder="E-mail">
                                </div>

                                <!-- Phone -->
                                <div class="form-group position-relative">
                                    <label for="phone" class="d-block">
                                        <i class="icon" data-feather="mail"></i>
                                    </label>
                                    <input type="text" id="formPhone" name="phone" class="form-control form-control-lg thick" placeholder="Phone" required>
                                </div>


                                <!-- Checkbox -->

                                <div class="form-group position-relative form-control" style="padding-left: 30px;; background: transparent; box-shadow: none">
                                    <input type="checkbox" id="branding" class="custom-input" name="branding" value="Branding">
                                    <label for="branding" class="custom-label">Branding</label><br>
                                    <input type="checkbox" id="social" class="custom-input" name="social" value="Social Media Marketing">
                                    <label for="social" class="custom-label">Social Media Marketing</label><br>
                                    <input type="checkbox" id="digitalMarketing" class="custom-input" name="digitalMarketing" value="Digital Marketing">
                                    <label for="digitalMarketing" class="custom-label">Digital Marketing</label><br>
                                    <input type="checkbox" id="webStrategy" class="custom-input" name="webStrategy" value="Web Strategy">
                                    <label for="webStrategy" class="custom-label">Web Strategy</label><br>
                                    <input type="checkbox" id="uiux" class="custom-input" name="uiux" value="UI/UX">
                                    <label for="uiux" class="custom-label">UI/UX</label><br>
                                    <input type="checkbox" id="cGeneration" class="custom-input" name="cGeneration" value="Content Generation">
                                    <label for="cGeneration" class="custom-label">Content Generation</label><br>
                                    <input type="checkbox" id="eventManagement" class="custom-input" name="eventManagement" value="Event Management">
                                    <label for="eventManagement" class="custom-label">Event Management</label><br>
                                </div>

                                <!-- Message -->

                                <div class="form-group message">
                                    <textarea class="form-control form-control-lg" id="formMessage" name="messageQuery" rows="2" placeholder="Message" style="max-height: 105px; overflow: auto; resize: none"></textarea>
                                </div>

                                <!-- Submit btn -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" tabIndex="-1">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-sm-0 p-0">
                    <div class="right-img-d">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <form action="{{URL::to('/send-mail')}}" enctype="multipart/form-data" method="POST">
        <h1>We Will Contact You</h1><span class="lnr lnr-heart"></span>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label class="control-label">Full Name</label>
            <div>
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" name="name" value="">
                    <input type="hidden" class="form-control input-lg" name="job_title" value="">
                    <input type="hidden" class="form-control input-lg" name="user_email" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">E-Mail Address</label>
            <div>
                <input type="email" class="form-control input-lg" name="email" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Mobile No.</label>
            <div>
                <input type="text" class="form-control input-lg" name="phone" data-format="+1 (ddd) ddd-dddd">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Message</label>
            <div>
                <textarea type="email" class="form-control input-lg" name="message" value=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="resume" >Resume</label>
            <input type="file" class="form-control" name="document" />
            <label class="text-danger mt-1" >(*File type- pdf,docx,doc*)</label>
        </div>
        <div class="form-group">
            <div>
                <button type="submit" value="submit" name="submit" class="btn btn-success">
                    Submit
                </button>
            </div>
        </div>
    </form>--}}

@endsection