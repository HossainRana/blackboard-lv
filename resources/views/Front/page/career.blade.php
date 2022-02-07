@section('title', 'Career | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    <style>


        .responsive-table {
        background-color: #fefefe;
        border-collapse: collapse;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.02);
        width: 100%;
        margin: 2rem 0;
        overflow: hidden;
        }
        .responsive-table__row {
            display: grid;
            border-bottom: 1px solid #edeef2;
            padding: 0 1.5rem;
        }
        @media (min-width: 768px) {
            .responsive-table__row {
                grid-template-columns: 2fr 1fr 2fr 2fr 1fr;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .responsive-table__row {
                grid-template-columns: 1fr 2fr 1fr;
            }
        }
        .responsive-table__row th, .responsive-table__row td {
            padding: 1rem;
        }
        .responsive-table__head {
            background-color: #e1e8f2;
        }
        @media (max-width: 991px) {
            .responsive-table__head {
                display: none;
            }
        }
        .responsive-table__head__title {
            display: flex;
            align-items: center;
            font-weight: 500;
            text-transform: capitalize;
        }
        .responsive-table__body .responsive-table__row {
            transition: 0.1s linear;
            transition-property: color, background;
        }
        .responsive-table__body .responsive-table__row:last-child {
            border-bottom: none;
        }
        .responsive-table__body .responsive-table__row:hover {
            color: #000000;
            background-color: #ececec;
        }
        .responsive-table__body__text {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }
        .responsive-table__body__text::before {
            margin-right: 1rem;
            font-weight: 600;
            text-transform: capitalize;
        }
        @media (max-width: 991px) {
            .responsive-table__body__text::before {
                /*content: attr(data-title) " :";*/
            }
        }
        @media (max-width: 400px) {
            .responsive-table__body__text::before {
                width: 100%;
                margin-bottom: 1rem;
            }
        }
        .responsive-table__body__text--name {
            font-weight: 600;
        }
        @media (min-width: 768px) {
            .responsive-table__body__text--name::before {
                display: none;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .responsive-table__body__text--name {
                grid-column: 0.5;
                flex-direction: column;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .responsive-table__body__text--status, .responsive-table__body__text--types, .responsive-table__body__text--update {
                grid-column: 0.6666666667;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .responsive-table__body__text--country {
                grid-column: -3;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .responsive-table__body__text--name, .responsive-table__body__text--country {
                grid-row: 2;
            }
        }
        /* SVG Up Arrow Style */
        .up-arrow {
            height: 100%;
            max-height: 1.8rem;
            margin-left: 1rem;
        }
        /* SVG User Icon Style */
        .user-icon {
            width: 100%;
            max-width: 4rem;
            height: auto;
            margin-right: 1rem;
        }
        /* Status Indicator Style */
        .status-indicator {
            display: inline-block;
            width: 1.8rem;
            height: 1.8rem;
            border-radius: 50%;
            background: #222;
            margin-right: 0.5rem;
        }
        .status-indicator--active {
            background: #25be64;
        }
        .status-indicator--inactive {
            background: #dadde4;
        }
        .status-indicator--new {
            background: #febf02;
        }

        .career-container{
            padding: 85px;
        }

        .details-btn{
            background: black;
            color: #ffffff !important;
            padding: 7px 20px;
            border-radius: 4px;
            text-decoration: none !important;
            cursor: pointer;
        }

        .job-details h2{
            margin-bottom: 10px;
            margin-top: 20px;
        }
        .job-details p{
            line-height: 16px !important;
            font-size: .875rem !important;
        }
        .job-details ul li{
            line-height: 16px !important;
            font-size: .875rem !important;
            list-style: circle;
        }
    </style>


    {{--            Preloader           --}}

    @include('Front.preloader')

    <div class="career-container">
        <div class="container">
            <!-- Responsive Table Section -->
            <table class="responsive-table">
                <!-- Responsive Table Header Section -->
                <thead class="responsive-table__head">
                <tr class="responsive-table__row">
                    <th class="responsive-table__head__title responsive-table__head__title--name">Post</th>
                    <th class="responsive-table__head__title responsive-table__head__title--status">Vacancy</th>
                    <th class="responsive-table__head__title responsive-table__head__title--types">Qualification</th>
                    <th class="responsive-table__head__title responsive-table__head__title--update">Deadline</th>
                    <th class="responsive-table__head__title responsive-table__head__title--country">Details</th>
                </tr>
                </thead>
                <!-- Responsive Table Body Section -->
                <tbody class="responsive-table__body">
                <tr class="responsive-table__row">
                    <td class="responsive-table__body__text responsive-table__body__text--name">
                        Junior Graphics Designer
                    </td>
{{--                    <td class="responsive-table__body__text responsive-table__body__text--status"><span class="status-indicator status-indicator--active"></span>Active</td>--}}
                    <td class="responsive-table__body__text responsive-table__body__text--types">03-04</td>
                    <td class="responsive-table__body__text responsive-table__body__text--update">Graduate</td>
                    <td class="responsive-table__body__text responsive-table__body__text--country">31-01-2022</td>
                    <td class="responsive-table__body__text"><a class="details-btn" data-toggle="modal" data-target="#graphicDesigner">Details</a></td>
                </tr>
                <tr class="responsive-table__row">
                    <td class="responsive-table__body__text responsive-table__body__text--name">
                        Junior Animator
                    </td>
{{--                    <td class="responsive-table__body__text responsive-table__body__text--status"><span class="status-indicator status-indicator--new"></span>New</td>--}}
                    <td class="responsive-table__body__text responsive-table__body__text--types">03-04</td>
                    <td class="responsive-table__body__text responsive-table__body__text--update">Graduate</td>
                    <td class="responsive-table__body__text responsive-table__body__text--country">31-01-2022</td>
                    <td class="responsive-table__body__text"><a class="details-btn" data-toggle="modal" data-target="#juniorAnimator">Details</a></td>
                </tr>
                <tr class="responsive-table__row">
                    <td class="responsive-table__body__text responsive-table__body__text--name">
                        Junior Digital Marketer
                    </td>
{{--                    <td class="responsive-table__body__text responsive-table__body__text--status"><span class="status-indicator status-indicator--inactive"></span>Inactive</td>--}}
                    <td class="responsive-table__body__text responsive-table__body__text--types">03-04</td>
                    <td class="responsive-table__body__text responsive-table__body__text--update">Graduate</td>
                    <td class="responsive-table__body__text responsive-table__body__text--country">31-01-2022</td>
                    <td class="responsive-table__body__text"><a class="details-btn"  data-toggle="modal" data-target="#digitalMarketer">Details</a></td>
                </tr>
{{--                <tr class="responsive-table__row">
                    <td class="responsive-table__body__text responsive-table__body__text--name">
                        Content Writer
                    </td>
--}}{{--                    <td class="responsive-table__body__text responsive-table__body__text--status"><span class="status-indicator status-indicator--active"></span>Active</td>--}}{{--
                    <td class="responsive-table__body__text responsive-table__body__text--types">01</td>
                    <td class="responsive-table__body__text responsive-table__body__text--update">Graduate</td>
                    <td class="responsive-table__body__text responsive-table__body__text--country">03-09-2021</td>
                    <td class="responsive-table__body__text"><a class="details-btn"  data-toggle="modal" data-target="#digitalMarketer">Details</a></td>
                </tr>
                <tr class="responsive-table__row">
                    <td class="responsive-table__body__text responsive-table__body__text--name">
                        Content Writer
                    </td>
--}}{{--                    <td class="responsive-table__body__text responsive-table__body__text--status"><span class="status-indicator status-indicator--active"></span>Active</td>--}}{{--
                    <td class="responsive-table__body__text responsive-table__body__text--types">01</td>
                    <td class="responsive-table__body__text responsive-table__body__text--update">Graduate</td>
                    <td class="responsive-table__body__text responsive-table__body__text--country">03-09-2021</td>
                    <td class="responsive-table__body__text"><a class="details-btn"  data-toggle="modal" data-target="#digitalMarketer">Details</a></td>
                </tr>--}}
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->

    <div class="modal fade" id="graphicDesigner" tabindex="-1" role="dialog" aria-labelledby="graphicDesigner" aria-hidden="true" style="padding-top: 65px">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Junior Graphics Designer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="job-details">
                            <div class="row">
                                <div class="col-md-6" >
                                    <p>
                                        Blackboard Digital Limited is looking for Junior Graphic Designer.
                                    </p>

                                    <h2>Job Responsibilities</h2>
                                    <ul class="job-ul">
                                        <li>Study design briefs and determine requirements</li>
                                        <li>Conceptualize visuals based on requirements</li>
                                        <li>Prepare rough drafts and present ideas to clients and stakeholders</li>
                                        <li>Designing software or manually by hand</li>
                                        <li>Use the appropriate colors and layouts for each graphic</li>
                                        <li>Work with copywriters and creative team to produce the final design</li>
                                        <li>Test graphics across various media</li>
                                        <li>Amend designs after feedback</li>
                                        <li>Ensure final graphics and layouts are visually appealing and on-brand</li>
                                    </ul>
                                    <h2>Educational Requirements</h2>
                                    <ul class="job-ul">
                                        <li>Bachelor’s degree in any background</li>
                                        <li>Proven graphic designing experience</li>
                                        <li>A strong portfolio of graphics design</li>
                                        <li>Hands-on experience with design software and technologies (such as InDesign, Adobe Illustrator, Adobe Photoshop and more)</li>
                                        <li>A keen eye for aesthetics and details</li>
                                        <li>Organized with high attention to detail</li>
                                        <li>Methodical and can deliver high-quality work while meeting tight deadlines</li>
                                        <li>Ability to translate ideas into beautiful and competitive creations.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h2>Additional Requirements</h2>
                                    <p>Both males and females are allowed to apply.</p>
                                    <p><b>Workplace:</b>Work at office</p>
                                    <p><b>Job Location:</b> Dhaka (Dhanmondi)</p>
                                    <p><b>Salary:</b> On Discussion</p>
                                    <p><b>Office Time:</b>10am - 7pm</p>
                                    <p><b>Off Day:</b>Friday & Saturday</p>
                                    <br/>
                                    <br/>
                                    <p>Compensation & other benefits</p>
                                    <p>T/A, Mobile bill, Tour allowance, medical allowance, Performance bonus,
                                        Weekly 2 holidays, Insurance</p>
                                    <p><b>Lunch Facilities:</b> Partially Subsidize</p>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <p>* Must send your CV & Portfolio link mentioning <b>“Graphic Designer Junior”</b> in the subject.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('Front/career-template')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="juniorAnimator" tabindex="-1" role="dialog" aria-labelledby="juniorAnimator" aria-hidden="true" style="padding-top: 65px">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Junior Animator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="job-details">
                            <div class="row">
                                <div class="col-md-6" >
                                    <p>
                                        Blackboard Digital Limited is looking for Junior Animator.
                                    </p>

                                    <h2>Job Responsibilities</h2>
                                    <ul class="job-ul">
                                        <li>Read scripts and storylines to understand animation requirements.</li>
                                        <li>Develop storyboards for the initial stages of production</li>
                                        <li>Refine designs with illustration software</li>
                                        <li>Use various colors, graphics and effects to better visualize each concept</li>
                                        <li>Join images with background graphics and special effects</li>
                                        <li>Participate in design briefs with clients, editors and/or marketers to identify their needs</li>
                                        <li>Participate in the editing process</li>
                                        <li>Brainstorm with the design team to come up with new ideas, patterns and styles</li>
                                        <li>Collaborate with production crew (designers, directors etc.)</li>
                                        <li>Stay up-to-date with new design techniques and software</li>
                                    </ul>
                                    <h2>Educational Requirements</h2>
                                    <ul class="job-ul">
                                        <li>Proven animation experience</li>
                                        <li>A strong portfolio of graphics design</li>
                                        <li>Hands-on experience with Animation related software and technologies (such as Adobe After Effects, Adobe Premiere Pro, Adobe Audition/Audacity, Adobe Illustrator, Adobe Photoshop and more)</li>
                                        <li>A keen eye for aesthetics and details</li>
                                        <li>Organized with high attention to detail</li>
                                        <li>Methodical and can deliver high-quality work while meeting tight deadlines</li>
                                        <li>Ability to translate ideas into beautiful and competitive creations.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h2>Additional Requirements</h2>
                                    <p>Both males and females are allowed to apply.</p>
                                    <p><b>Workplace:</b>Work at office</p>
                                    <p><b>Job Location:</b> Dhaka (Dhanmondi)</p>
                                    <p><b>Salary:</b> On Discussion</p>
                                    <p><b>Office Time:</b>10am - 7pm</p>
                                    <p><b>Off Day:</b>Friday & Saturday</p>
                                    <br/>
                                    <br/>
                                    <p>Compensation & other benefits</p>
                                    <p>T/A, Mobile bill, Tour allowance, medical allowance, Performance bonus,
                                        Weekly 2 holidays, Insurance</p>
                                    <p><b>Lunch Facilities:</b> Partially Subsidize</p>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <p>* Must send your CV & Portfolio link mentioning <b>“Junior Animator”</b> in the subject.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('Front/career-template')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="digitalMarketer" tabindex="-1" role="dialog" aria-labelledby="digitalMarketer" aria-hidden="true" style="padding-top: 65px">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Junior Digital Marketer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="job-details">
                            <div class="row">
                                <div class="col-md-6" >
                                    <p>
                                        Blackboard Digital Limited is looking for Junior Digital Marketer.Blackboard Digital Limited is looking for Junior Digital Marketer.
                                    </p>

                                    <h2>Job Responsibilities</h2>
                                    <ul class="job-ul">
                                        <li>Expertise in Social Media platforms Facebook, Instagram, LinkedIn, YouTube, Twitter</li>
                                        <li>Google AdWords, Email marketing, PPC etc. to manage</li>
                                        <li>SEO with link building strategy</li>
                                        <li>Digital marketing campaigns</li>
                                        <li>Implementing and Managing the Company's social media accounts</li>
                                        <li>Tracking digital marketing metrics and making improvements</li>
                                        <li>Cooperate with seniors</li>
                                    </ul>
                                    <h2>Educational Requirements</h2>
                                    <ul class="job-ul">
                                        <li>Bachelor’s degree in any background</li>
                                        <li>Proven Digital Marketing experience</li>
                                        <li>Hands-on experience with marketing tools and strategies</li>
                                        <li>A keen eye for new ways of marketing</li>
                                        <li>Ability to communicate with clients in both Bangla and English versions</li>
                                        <li>Methodical and can deliver high-quality work while meeting tight deadlines</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h2>Additional Requirements</h2>
                                    <p>Both males and females are allowed to apply.</p>
                                    <p><b>Workplace:</b>Work at office</p>
                                    <p><b>Job Location:</b> Dhaka (Dhanmondi)</p>
                                    <p><b>Salary:</b> On Discussion</p>
                                    <p><b>Office Time:</b>10am - 7pm</p>
                                    <p><b>Off Day:</b>Friday & Saturday</p>
                                    <br/>
                                    <br/>
                                    <p>Compensation & other benefits</p>
                                    <p>T/A, Mobile bill, Tour allowance, medical allowance, Performance bonus,
                                        Weekly 2 holidays, Insurance</p>
                                    <p><b>Lunch Facilities:</b> Partially Subsidize</p>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <p>* Must send your CV & Portfolio link mentioning <b>“Junior Digital Marketer”</b> in the subject.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('Front/career-template')
                </div>
            </div>
        </div>
    </div>


    @include('layouts.scroll-top')


    <script>

        const headTitleName = document.querySelector(
            ".responsive-table__head__title--name"
        );
        const headTitleStatus = document.querySelector(
            ".responsive-table__head__title--status"
        );
        const headTitleTypes = document.querySelector(
            ".responsive-table__head__title--types"
        );
        const headTitleUpdate = document.querySelector(
            ".responsive-table__head__title--update"
        );
        const headTitleCountry = document.querySelector(
            ".responsive-table__head__title--country"
        );

        // Select tbody text from Dom
        const bodyTextName = document.querySelectorAll(
            ".responsive-table__body__text--name"
        );
        const bodyTextStatus = document.querySelectorAll(
            ".responsive-table__body__text--status"
        );
        const bodyTextTypes = document.querySelectorAll(
            ".responsive-table__body__text--types"
        );
        const bodyTextUpdate = document.querySelectorAll(
            ".responsive-table__body__text--update"
        );
        const bodyTextCountry = document.querySelectorAll(
            ".responsive-table__body__text--country"
        );

        // Select all tbody table row from Dom
        const totalTableBodyRow = document.querySelectorAll(
            ".responsive-table__body .responsive-table__row"
        );

        // Get thead titles and append those into tbody table data items as a "data-title" attribute
        for (let i = 0; i < totalTableBodyRow.length; i++) {
            bodyTextName[i].setAttribute("data-title", headTitleName.innerText);
            bodyTextStatus[i].setAttribute("data-title", headTitleStatus.innerText);
            bodyTextTypes[i].setAttribute("data-title", headTitleTypes.innerText);
            bodyTextUpdate[i].setAttribute("data-title", headTitleUpdate.innerText);
            bodyTextCountry[i].setAttribute("data-title", headTitleCountry.innerText);
        }
    </script>


@endsection