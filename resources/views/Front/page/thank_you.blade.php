@section('title', 'Thank you | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    <style>
        footer{
            display: none !important;
        }

        .thankyou-wrapper h1{
            text-align:center;
            color:#ffffff;
            padding:0px 10px 10px;
        }
        .thankyou-wrapper p{
            text-align:center;
            color:#ffffff;
        }
        .thankyou-wrapper a{
            text-align: center;
            color: #ffffff;
            display: block;
            text-decoration: none;
            width: 200px;
            background: #151414;
            margin: 10px auto 0px;
            padding: 15px 20px 15px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        .thankyou-wrapper a:hover{
            border: 1px solid #000000;
            background: #ffffff;
            color: #000000;
            transition: all 0.3s ease;
        }
        .thankyou-details{
            color: #ffffff;
            position: absolute;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
            margin-left: 185px;
        }

        @media (max-width: 756px) {
            .thankyou-details{
                margin-left: 15px;
            }

        }
        .thankyou-details h1{
            font-size: 3rem;
        }
        .thankyou-details p{
            color: #ffffff;
        }
        .back-home{
            margin: 20px 0;
            border: none;
            background: #ffffff;
            padding: 10px 20px;
            /*border-radius: 12px;*/
            font-size: 1.25rem;
            font-weight: 600;
            cursor: pointer;
        }
    </style>

    <div class="main-container-thank-you">
        <div class="thankyou-details">
            <h1>Thank you</h1>
            <p>for contacting us, we will get in touch with you soon... </p>
            <a href="{{URL::to('/')}}">
                <button class="back-home">Back to home</button>
            </a>
        </div>
    </div>

@endsection