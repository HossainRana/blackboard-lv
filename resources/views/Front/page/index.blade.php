@section('title', 'Home | Blackboard Digital Agency')

@extends('Front.layout')

@section('content')

    @include('Front.preloader')

    <style>
        p*{
            font-size: 16px !important;
        }
    </style>

    <div class="index-container">
        <div class="index-banner">
            <img src="{{asset('public/Front/site/images/svg/wave.svg')}}" width="100%"/>
            <div class="container" style="min-height: 80vh; width: 80%">
                <div class="row m-0">
                    <div class="col-md-6 p-0">
                        <div class="banner-details">
                            <h1>Let's <span style="font-weight: bold">Build</span> Great Experiences Together</h1>
                            <p>We are a digital marketing agency that delivers enterprise-level strategies with local market activation.</p>
                            <a href="{{URL::to('/contact')}}">
                                <button>Let's Talk</button>
                            </a>
                         </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="banner-img">
                            <img src="{{asset('public/Front/site/images/banner/banner1.png')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--            Services Section            --}}


        <div class="services-container" id="servicesContent">
            <div class="services-bg">
                <div class="heading-details" style="text-align: center">
                    <h2>Our Services</h2>
                    <p>What Services Do Digital Marketing Agencies Offer?</p>
                </div>

                <div class="service-card-container">
                    <div class="service-tab">
                        <button class="service-tablinks" onclick="openTab(event, 'serviceBranding')" id="defaultOpen">Branding</button>
                        <button class="service-tablinks" onclick="openTab(event, 'socialMarketing')">Social Media Marketing</button>
                        <button class="service-tablinks" onclick="openTab(event, 'digitalMarketing')">Desigining a perfect logo</button>
                        <button class="service-tablinks" onclick="openTab(event, 'webStrategy')">Website Strategy</button>
                        <button class="service-tablinks" onclick="openTab(event, 'uiUx')">UI/UX</button>
{{--                        <button class="service-tablinks" onclick="openTab(event, 'seo')">Search Engine Optimization (SEO)</button>--}}
{{--                        <button class="service-tablinks" onclick="openTab(event, 'sem')">Search Engine Marketing (SEM)</button>--}}
                        <button class="service-tablinks" onclick="openTab(event, 'contentOptimization')">Content Generation and Optimization</button>
                        <button class="service-tablinks" onclick="openTab(event, 'eventManagement')">Event Management</button>
                    </div>

                    <div id="serviceBranding" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/Branding icon-04.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center" style="padding: 0 15px">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Logo Design</h3>
                                    <p>A perfect logo for your company/organization is less stressful when Blackboard has a proper place for it. Get limitless authentic designs according to your taste & budget. Blackboard provides a logo at a reasonable price.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Infographics</h3>
                                    <p>Choose, customize according to your choice & get the right taste for your website. Make your organization more lifelike & discernible using infographics data. Blackboard provides it at a reasonable price.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Data Visualizations</h3>
                                    <p>Get perfect data visualizations from our website to ease your data processing. Use our guidelines on the best approaches to make your data attractive and easily comprehensible.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Micrographics</h3>
                                    <p>Drop your requirements and purchase Micrographics from Blackboard. Get a complete and comprehensive guideline on what micrographics are best suited for your requirements.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Social Graphics</h3>
                                    <p>Blackboard’s customizable social graphic services leave no limitations to your posts being eye-catching and garnering your target audience. Why wait? Use Blackboard to get a step ahead.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Illustrations</h3>
                                    <p>Are you not getting accurate illustrations for your website or posts? Receive tailor made visuals and illustrations that best bring out the character of your organization.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="socialMarketing" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/wesite development icon-03 (2).png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Social Media Marketing</h3>
                                    <p>Help extend your customer outreach through effective social media marketing techniques that our team of experts can walk you through.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Social Media Campaign</h3>
                                    <p>Blackboard also runs various social media campaigns on behalf of clients. Contact our team for further details.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Social Brand Building</h3>
                                    <p>Establish your brand through our comprehensive strategies to bring your company out into the spotlight.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Social Customer Service</h3>
                                    <p>Increase your customer retention rates through enhanced services our team can help you with.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Facebook ChatBot</h3>
                                    <p>Blackboard’s Facebook Chatbot solutions help you immediately communicate with customers and receive an insight on their preferences.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="digitalMarketing" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/Digital marketing icon.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>SEO strategy</h3>
                                    <p>Increase chances of your platform’s visibility and bring in organic traffic for your website through Blackboard’s effective SEO strategies.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>SEO Audit</h3>
                                    <p>Analyze your platform’s public presence through audits that help you discover the key points in bringing out your best to your target audience.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>On-site SEO</h3>
                                    <p>Improve your website’s web page ranking through on-site SEO services.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Off-site SEO</h3>
                                    <p>Further optimize your discernibility by working on key elements of your platform that can be boosted through off-site SEO services.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Keyword Search</h3>
                                    <p>Utilize Blackboard’s prime services to boost your game on all search engines through key word options for your website.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Link Building</h3>
                                    <p>Work with Blackboard to improve link building techniques for your online platforms.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Search Engine Marketing</h3>
                                    <p>While SEM and SEO both rely on keywords that’s where the similarity ends. SEM strategies involve paying
                                        a search engine to place your website in front of customers. It’s closely related to pay-per-click advertising.
                                        <b>BLACKBOARD</b> is here to help you with this, and Our skilled people are waiting for you.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Promotion</h3>
                                    <p>
                                        Promotion is a type of communication between the buyer and the seller. The seller tries to persuade the buyer to purchase their
                                        goods or services through promotions. It helps in making the people aware of a product, service or a company. It also helps to
                                        improve the public image of a company. Promotion refers to the methods used by a business to make customers aware of its product.
                                        Advertising is just one of the means a business can use to create publicity. Promotional Services are available on Blackboard &
                                        grab your one too! A complete guideline on promotional services. <b>BLACKBOARD</b> has brought a comprehensive helpline for your promotions.
                                    </p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="webStrategy" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/wesite development icon-03 (2).png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">

                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Dynamic Website</h3>
                                    <p>We are proficient in designing a tremendous & flawless website from scratch to a fully furnished product. If you are thinking of world-class website & functional web development, Blackboard is here for you.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Static Website</h3>
                                    <p>Your online image is essential to the success of your business; that’s why you need a fancy design. It doesn’t matter what type of organization you have. A well designed static website will always help you get your target customers.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Chatbot Development</h3>
                                    <p>Our chatbot development services help you promptly engage with your customers through conversational, automated responses, saving time and garnering instant interest for your platform.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Android and IOS App Development</h3>
                                    <p>Android and IOS App Development
                                        We all know that customers search for their required products/services on the Internet. When your business is accessible online, and when you have an app that users can download to their devices, your business will make an excellent impression. Our experienced Android and iOS app development team can help you achieve this.
                                    </p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>{{--
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>IOS Development</h3>
                                    <p>We all know that the customers go to search for a product/service is online. When your business is accessible online, plus you have an app that users can download to their devices, your business will make an excellent impression. We have an experienced iOS App developer team.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Template Purchase</h3>
                                    <p>If you are thinking of purchasing a world-class website design template, Blackboard is here for you; we provide you all the support for buying the template.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="uiUx" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/Ui UX icon-02.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                <div class="serv-inner-r">
                                    <h3>UI & UX Design</h3>
                                    <p>
                                        User experience (UX) is the interaction and experience users have with a company's products and services. ...
                                        User interface (UI) is the specific asset users interact with. For example, UI can deal with traditional concepts
                                        like visual design elements such as colors and typography. We have an experienced UI & UX designer team to help you
                                        to make a tremendous & flawless UI & UX design for your business. <b>BLACKBOARD</b> is here to help you with this, and Our
                                        skilled designers are waiting for you.
                                    </p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div id="seo" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/logo')}}/mug design blackboard-03.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>SEO strategy</h3>
                                    <p>Do you need a proper SEO strategy? Why roaming here and here when blackboard is here. Let’s have a cup of coffee.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>SEO Audit</h3>
                                    <p>Blackboard provide effective SEO audit. If you want a proper SEO audit for your business then don’t waste your time. Make a move.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>On-site SEO</h3>
                                    <p>Do you want on-site SEO. We will give you the proper guideline. So why be late? Let’s work together.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Off-site SEO</h3>
                                    <p>Blackboard also provide off-line SEO. If you are planning for off-line SEO, you can take our expert help for off-line SEO. Let’s sit together.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Keyword Search</h3>
                                    <p>We provide keyword research service. If you think about keyword research, we are here to help you. Let’s have a cup of coffee together.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Link Building</h3>
                                    <p>Do you need a proper link building? Why roaming here and here when blackboard is here. Let’s have a cup of coffee.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sem" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/logo')}}/mug design blackboard-03.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-6">
                                <div class="serv-inner-r">
                                    <h3>Search Engine Marketing</h3>
                                    <p>While SEM and SEO both rely on keywords that’s where the similarity ends. SEM strategies involve paying
                                        a search engine to place your website in front of customers. It’s closely related to pay-per-click advertising.
                                        <b>BLACKBOARD</b> is here to help you with this, and Our skilled People are waiting for you.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                    <div id="contentOptimization" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/Content icon-01.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Website Text Writing</h3>
                                    <p>Blackboard is a place where website text writing is trouble-free at the same time manageable. <b>BLACKBOARD</b> is here to help you with this, and Our skilled team members are waiting for you. So don't be late to contact us as soon as possible.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Short-form Articles</h3>
                                    <p>Quick forms have to make sure real quick. Now you can collect your short-form articles from Blackboard.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Blogs</h3>
                                    <p>Are you struggling with blogs? Have endless blogging & your suitable category on Blackboard!.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Copywriting</h3>
                                    <p>Copywriting makes your activity easier & Blackboard brings out the jest with the platform for it.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Feature Articles</h3>
                                    <p>Featured articles are available on Blackboard. Describe your features & get articles whenever you want! </p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Recipes</h3>
                                    <p>Get adventurous with food & stay healthy while trying out new recipes at home.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Q & As</h3>
                                    <p>Any systematic, knowledgeable, informative Q & As will appear on with the answering session to make your day more productive.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Translation & Book Binding</h3>
                                    <p>Quizzes are amusing when Blackboard is digging. A fun place to add endless questionnaires & puzzles to stop the hustle.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Listicles / guides</h3>
                                    <p>Listicles are magnetic & Guides are constructive. Blackboard is linking both in one place & presenting you to cooperate.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Ghost Written Articles</h3>
                                    <p>Ghostwritten articles are purchasable to twist up the taste.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Long-form Articles</h3>
                                    <p>Blackboard Digital Agency has a place for long-form articles for you to fetch your one too. BLACKBOARD digital agency is here to help you with this, and Our skilled team members are waiting for you. So don't be late to contact us as soon as possible.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="eventManagement" class="service-tabcontent">
                        <div class="serv-img-d">
                            <img src="{{asset('Front/site/images/ServicePng')}}/Event icon-05.png" width="100%"/>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Corporate Event</h3>
                                    <p>An experienced corporate event planner's skills are needed while planning your future corporate event. From conferences to corporate events, Blackboard has the knowledge and expertise to ensure your success.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Personal Event</h3>
                                    <p>Our creative event planning team takes full responsibility of helping you strengthen community relations through well-organized personal functions.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Customized Event</h3>
                                    <p>Blackboard gives you the freedom to arrange any type of customized function, while offering constant support for successful results.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Festival Event</h3>
                                    <p>Blackboard understands the uniqueness of each event. Our prior experiences help us incorporate the key elements needed to instill the perfect atmosphere for your festivities and make them enjoyable for everyone involved.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Sales Event</h3>
                                    <p>Are you facing difficulties in organizing the perfect sales and marketing event? Blackboard provides you with a full proof strategy that helps you achieve all your event goals with ease.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 m-t-b">
                                <div class="serv-inner-r">
                                    <h3>Corporate Works</h3>
                                    <p>Our in-house professionals help provide you with banners, billboards, corporate gifts etc. that are all available on our website.</p>
                                    <div class="serv-slide-s">
                                        <a href="{{URL::to('/contact')}}">
                                            Interested
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-container">
            <div class="portfolio-bg">
                <div class="heading-details" style="text-align: center">
                    <h2 style="color: #ffffff">Portfolio</h2>
                    <p style="color: #ffffff">Design the future of your organization with Blackboard.<br/> The in-house professionals are waiting for you to respond to pick your plans.</p>
                </div>

                <div class="tab-container" style="margin: 20px; overflow-x: auto">
                    <div class="tabs_wrapper">
                        <input type="radio" name="tabs" id="tab_1" checked />
                        <label class="tab" for="tab_1">
                            <span class="material-icons-outlined"> work </span>
                            <span class="title">All Work</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_2" />
                        <label class="tab" for="tab_2">
                            <span class="material-icons-outlined"> web </span>
                            <span class="title">Website</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_3" />
                        <label class="tab" for="tab_3">
                            <span class="material-icons"> branding_watermark </span>
                            <span class="title">Branding</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_4" />
                        <label class="tab" for="tab_4">
                            <span class="material-icons-outlined"> public </span>
                            <span class="title">Social</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_5" />
                        <label class="tab" for="tab_5">
                            <span class="material-icons-outlined"> call_to_action </span>
                            <span class="title">Logo</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_6" />
                        <label class="tab" for="tab_6">
                            <span class="material-icons-outlined"> history_edu </span>
                            <span class="title">UI/UX</span>
                        </label>
                        <input type="radio" name="tabs" id="tab_7" />
                        <label class="tab" for="tab_7">
                            <span class="material-icons-outlined"> event_seat </span>
                            <span class="title">Event</span>
                        </label>
                        <span class="shape"></span>
                    </div>
                </div>

                <div id="allWork">
                    <div class="portfolio-slider-container">
                        <div class="slider">
                            <div class="box1 box">
                                <div class="bg"></div>
                                <div class="details">
                                    <h1 class="slider-heading">Blackboard Promo Video</h1>
                                    <p class="slider-p">
                                        Blackboard’s promotional video for clients to highlight our services.
                                    </p>
                                    <a href="https://www.youtube.com/channel/UCcya9G4vqgY1smpRPWedZOg" target="_blank"><button class="slide-button">Check Now</button></a>
                                </div>

                                <div class="illustration">
                                    <div class="inner" style="display: flex; align-items: center">
                                        <iframe width="500" height="550" src="https://www.youtube.com/embed/CiLI2W1GaLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>


                            <div class="box2 box">
                                <div class="bg"></div>
                                <div class="details">
                                    <h1 class="slider-heading">10 Animated Logo Folio</h1>
                                    <p class="slider-p">
                                        A collection of our customized and well-received logo animation videos for clients.
                                    </p>
                                    <a href="https://www.youtube.com/channel/UCcya9G4vqgY1smpRPWedZOg" target="_blank"><button class="slide-button">Check Now</button></a>
                                </div>

                                <div class="illustration">
                                    <div class="inner" style="display: flex; align-items: center">
                                        <iframe width="500" height="550" src="https://www.youtube.com/embed/VEHH1ifaPmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                            <div class="box3 box">
                                <div class="bg"></div>
                                <div class="details">
                                    <h1 class="slider-heading">UI&UX-Design</h1>
                                    <p class="slider-p">
                                        User experience (UX) is the interaction and experience users
                                        have with a company's products and services.User interface (UI)
                                        is the specific asset users interact with.
                                    </p>
                                    <a href="{{URL::to('/logo-branding')}}"><button class="slide-button">Check Now</button></a>
                                </div>

                                <div class="illustration">
                                    <div class="inner">
                                        <img src="{{asset('Front/site/images/allwork')}}/UI&UX-Design-Blackboard-digital-limited-1-min.png" alt=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="box4 box">
                                <div class="bg"></div>
                                <div class="details">
                                    <h1 class="slider-heading">Mechanix branding</h1>
                                    <p class="slider-p">
                                        Branding is the process of creating a strong, positive perception of a company,
                                        its products or services in the customer's mind by combining such elements as logo,
                                        design, mission statement, and a consistent theme throughout all marketing communications.
                                    </p>
                                    <a href="{{URL::to('/logo-branding')}}"><button class="slide-button">Check Now</button></a>
                                </div>

                                <div class="illustration">
                                    <div class="inner">
                                        <img src="{{asset('Front/site/images/allwork')}}/blackboard-digital-agency-mechanix-work.webp" alt=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="box5 box">
                                <div class="bg"></div>
                                <div class="details">
                                    <h1 class="slider-heading">Card-Mockup</h1>
                                    <p class="slider-p">
                                        Promotion is a type of communication between the buyer and the seller. The seller tries to
                                        persuade the buyer to purchase their goods or services through promotions. It helps in making
                                        the people aware of a product, service or a company.
                                    </p>
                                    <a href="{{URL::to('/logo-branding')}}"><button class="slide-button">Check Now</button></a>
                                </div>

                                <div class="illustration">
                                    <div class="inner">
                                        <img src="{{asset('Front/site/images/allwork')}}/blackboard-digital-agency-mechanix-work-2.webp" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91">
                            <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff" /></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91">
                            <path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff" /></svg>
                        <div class="trail" style="display: none !important;">
                            <div class="box1 active">1</div>
                            <div class="box2">2</div>
                            <div class="box3">3</div>
                            <div class="box4">4</div>
                            <div class="box5">5</div>
                        </div>
                    </div>
                </div>
                <div id="website">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <a href="https://nexkraft.com/" target="_blank">
                                    <div class="image-d">
                                        <img src="{{asset('/Front/site/images/website/sized')}}/Untitled-1-23.jpg" alt="" width="100%"/>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://rainbowtouchbd.com/" target="_blank">
                                    <div class="image-d">
                                        <img src="{{asset('/Front/site/images/portfolio')}}/15.jpg" alt="" width="100%"/>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <a href="https://shareout.com.bd/" target="_blank">
                                    <div class="image-d">
                                        <img src="{{asset('/Front/site/images/website/sized')}}/Untitled-1-27.jpg" alt="" width="100%"/>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://shudristi.com" target="_blank">
                                    <div class="image-d">
                                        <img src="{{asset('/Front/site/images/website/sized')}}/Untitled-1-26.jpg" alt="" width="100%"/>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="branding">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/branding')}}/ecombarta-work-cut.png" alt="" width="100%" style="object-fit: contain"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/branding')}}/Untitled-1-13.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/Eraya')}}/Eraya-10.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/branding')}}/Untitled-1-21.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; padding-top: 50px;">
                        <a href="{{URL::to('/discover-more')}}/#brandingLogo"><button class="view-all">View All</button></a>
                    </div>
                </div>
                <div id="socialMedia">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/social')}}/Untitled-1-05.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/social')}}/Blackboard-digital-limited-social-media-post-design-510x280.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/social')}}/Untitled-1-06.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/social')}}/Untitled-1-08.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; padding-top: 50px;">
                        <a href="{{URL::to('/discover-more')}}/#socialMediaLogo"><button class="view-all">View All</button></a>
                    </div>
                </div>
                <div id="logo_">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/serviceLogo')}}/Untitled-1-07.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/serviceLogo')}}/Untitled-1-17.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/serviceLogo')}}/Untitled-1-12.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/serviceLogo')}}/Untitled-1-22.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; padding-top: 50px;">
                        <a href="{{URL::to('/discover-more')}}/#logos"><button class="view-all">View All</button></a>
                    </div>
                </div>
                <div id="uiUx_">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/uiux')}}/uiux-1.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/uiux')}}/uiux-2.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/uiux')}}/uiux-3.png" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/uiux')}}/uiux-4.png" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; padding-top: 50px;">
                        <a href="{{URL::to('/discover-more')}}/#uiuxLogo"><button class="view-all">View All</button></a>
                    </div>
                </div>
                <div id="event_">
                    <div class="website-container">
                        <div class="row m-0">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/eventmanagement')}}/event-1.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/eventmanagement')}}/event-2.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0" style="margin-top: 14px !important;">
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/eventmanagement')}}/event-3.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-d">
                                    <img src="{{asset('/Front/site/images/eventmanagement')}}/event-4.jpg" alt="" width="100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: center; padding-top: 50px;">
                        <a href="{{URL::to('/discover-more')}}/#eventLogo"><button class="view-all">View All</button></a>
                    </div>
                </div>
            </div>
            <div class="portfolio-bottom">
                <div class="pattern1">
                    <img src="{{asset('public/Front/site/images/circle.png')}}"/>
                </div>

                <div class="pattern2">
                    <img src="{{asset('public/Front/site/images/rectangle.png')}}"/>
                </div>
            </div>
        </div>

        <div class="about-us-container" style="margin-top: -5%">
            <div class="heading-details" style="text-align: center">
                <h2>About Us</h2>
                <p>Check out our portfolio highlighting<br/>the work we have for our clients</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('public/Front/site/images/aboutUs/png two.png')}}" width="100%"/>
                </div>
                <div class="col-md-6">
                    <div class="about-details" style="margin-bottom: 50px; text-align: justify">
                        <h1 style="font-size: 2rem">Reasons for choosing us</h1>
                        <p><b>BLACKBOARD</b> is a digital marketing business based in Bangladesh, staffed by the brightest, most talented, and devoted digital experts in the country;
                            powered by NexKraft Limited, our primary goal is to offer services that create room for innovation & creativity.</p>
                        <p>Our services include: web design & development, graphics design, logo design, digital marketing, legal & business support, event management and training.</p>
                        <p>Over the years, we have provided specialist services to many clients from a variety of industries including travel, e-commerce, software firms and service providers. </p>
                    </div>
                    <a href="{{URL::to('/about-us')}}" class="read-more">
                        Read More
                    </a>
                </div>
            </div>
        </div>

        <div class="team-bg">

            <main class="app">
                <div class="boxes">
                    <ul class="particle">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="our-team-container">
                        <div class="heading-details" style="text-align: center; color: #ffffff; background: black; position: relative">
                            <h1>Our Team</h1>
                            <p>Our wonderful team makes it possible for us <br/>to do the things that we do.</p>
                        </div>
                        <section class="overflow-hidden position-relative">
                            <div class="container">
                                <div class="bg__grub--slider p-3">
                                    <div class="row pt-5 pb-5 pl-4">
                                        <div class="col-md-5 col-lg-4 pb-5 text-center text-md-left pb-md-0 my-auto" style="background-color: #000000">
                                            <h3 class="mb-3" style="color: #ffffff">Our Team</h3>
                                            <p  style="color: #ffffff">Our wonderful team makes it possible for us to do the things that.</p>

                                            <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                                                <li class="arrow__left pointer mr-3 position-relative"><i class="fa fa-chevron-left" aria-hidden="true"></i></li>
                                                <li class="arrow__right pointer position-relative"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                            </ul>

                                        </div>
                                        <div class="col-md-7 col-lg-8 my-auto p-0">

                                            <ul class="ul__list--inline slider__offset">
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/ttt-05.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Mohammad Shahriar Khan</h1>
                                                            <p>CEO</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/ttt-03.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Rtn Mithu Moroel</h1>
                                                            <p>Chairman</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/ttt-04.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Kazi Akram Uddin</h1>
                                                            <p>Growth Manager</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/ttt-02.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Anayet Hossin</h1>
                                                            <p>Motion Graphic Designer</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/ttt-01.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Md Riaj Uddin Riad</h1>
                                                            <p>Graphic Designer</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/mahmud.webp"/>
                                                        <div class="teamMember-details">
                                                            <h1>MD.MAHMUDUL ISLAM</h1>
                                                            <p>Senior Software Engineer</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/sazzad.webp"/>
                                                        <div class="teamMember-details">
                                                            <h1>SHAZZAD HOSSAIN KANON</h1>
                                                            <p>Software Engineer</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/sadia.webp"/>
                                                        <div class="teamMember-details">
                                                            <h1>SADIYA ISROT SUHA</h1>
                                                            <p>Junior Executive, Communication</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/natasha.webp"/>
                                                        <div class="teamMember-details">
                                                            <h1>NATASHA ISLAM</h1>
                                                            <p>Senior Executive- Finance & Accounts</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pl-3 pr-3 images__slider no__outline">
                                                    <div class="team-each-d">
                                                        <img src="{{asset('public/Front/site/images/team')}}/rana.png"/>
                                                        <div class="teamMember-details">
                                                            <h1>Md. Farque Hossain Rana</h1>
                                                            <p>Software Engineer</p>
                                                            <i>Blackboard</i>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>

        <div class="client-container" style="background: #ffffff; position: relative; padding: 5px">
            <div class="heading-details" style="text-align: center">
                <h2>Our Clients</h2>
                <p>Have a project we can help with? Give us a call or<br/>reach out to us on social media</p>
            </div>
            <div style="/*box-shadow: 0 1px 6px 0 rgb(32 33 36 / 28%);*/ border-radius: 5px; margin-bottom: 50px; ">
                <div class="client-logo-container" id="clientContainer">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/brac.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/uniliber.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/bangladeshPOlice.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/microsoftBangladesh.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/abdulmonem.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/agropack.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/arirangAviation.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/banglalink.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/bankasia.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/BmComputers.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/bmksj.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/bmTechnology.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/bpatc.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/eclub.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/elixinol.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/hoicel.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/hts.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/ict.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/iom.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/lankabangla.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/m.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/masterwater.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/microsoftBangladesh.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/mindshaper.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/nexparc.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/notesofshahriar.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/pizza.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/polli.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/rainbowtouch.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/shareOut.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/smart.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/socioconsultant.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/sonicBangla.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/sreda.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/taskgum.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/thedailyStar.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/theWorldbank.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-36.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-37.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-40.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-41.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-42.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-43.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-47.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-52.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-54.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-55.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-56.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-57.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-58.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-59.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-60.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-61.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-62.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-63.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-64.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-65.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-66.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-68.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-69.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-70.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-71.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-72.png')}}"/>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('public/Front/site/images/clientLogo/dribbble white-74.png')}}"/>
                        </div>
                    </div>
                </div>
                <div class="scroll-down" onclick="scrollWin()">
                    <div class="scroll-down-f-d"></div>
                    <div class="scroll-down-s-d"></div>
                </div>
                </div>
        </div>
    </div>


    @include('layouts.scroll-top')



    <script>
        $(function() {
            $('#expanMore').click (function() {
                $('html, body').animate({scrollBottom: $('#clientContainer').offset().bottom }, 'slow');
                return false;
            });
        });
    </script>
    <script>
        $('.slider__offset').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $(".arrow__left"),
            nextArrow: $(".arrow__right"),
            fade: false,
            infinite: true,
            autoplay: false,
            pauseOnHover:true,
            focusOnSelect: true,
            centerPadding: 0,
            slideMargin: 10,
            centerPadding: 0,
            responsive: [
                {
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    </script>

    <script>
        // Slider(all Slides in a container)
        const slider = document.querySelector(".slider");
        // All trails
        const trail = document.querySelector(".trail").querySelectorAll("div");

        // Transform value
        let value = 0;
        // trail index number
        let trailValue = 0;
        // interval (Duration)
        let interval = 8000;

        // Function to slide forward
        const slide = condition => {
// CLear interval
            clearInterval(start);
// update value and trailValue
            condition === "increase" ? initiateINC() : initiateDEC();
// move slide
            move(value, trailValue);
// Restart Animation
            animate();
// start interal for slides back
            start = setInterval(() => slide("increase"), interval);
        };

        // function for increase(forward, next) configuration
        const initiateINC = () => {
// Remove active from all trails
            trail.forEach(cur => cur.classList.remove("active"));
// increase transform value
            value === 80 ? value = 0 : value += 20;
// update trailValue based on value
            trailUpdate();
        };

        // function for decrease(backward, previous) configuration
        const initiateDEC = () => {
// Remove active from all trails
            trail.forEach(cur => cur.classList.remove("active"));
// decrease transform value
            value === 0 ? value = 80 : value -= 20;
// update trailValue based on value
            trailUpdate();
        };

        // function to transform slide
        const move = (S, T) => {
// transform slider
            slider.style.transform = `translateX(-${S}%)`;
//add active class to the current trail
            trail[T].classList.add("active");
        };

        const tl = gsap.timeline({ defaults: { duration: 0.6, ease: "power2.inOut" } });
        tl.from(".bg", { x: "-100%", opacity: 0 }).
        from(".slider-p", { opacity: 0 }, "-=0.3").
        from(".slider-heading", { opacity: 0, y: "30px" }, "-=0.3").
        from(".slide-button", { opacity: 0, y: "-40px" }, "-=0.8");

        // function to restart animation
        const animate = () => tl.restart();

        // function to update trailValue based on slide value
        const trailUpdate = () => {
            if (value === 0) {
                trailValue = 0;
            } else if (value === 20) {
                trailValue = 1;
            } else if (value === 40) {
                trailValue = 2;
            } else if (value === 60) {
                trailValue = 3;
            } else {
                trailValue = 4;
            }
        };

        // Start interval for slides
        let start = setInterval(() => slide("increase"), interval);

        // Next and Previous button function (SVG icon with different classes)
        document.querySelectorAll("svg").forEach(cur => {
// Assign function based on the class Name("next" and "prev")
            cur.addEventListener("click", () => cur.classList.contains("next") ? slide("increase") : slide("decrease"));
        });

        // function to slide when trail is clicked
        const clickCheck = e => {
// CLear interval
            clearInterval(start);
// remove active class from all trails
            trail.forEach(cur => cur.classList.remove("active"));
// Get selected trail
            const check = e.target;
// add active class
            check.classList.add("active");

// Update slide value based on the selected trail
            if (check.classList.contains("box1")) {
                value = 0;
            } else if (check.classList.contains("box2")) {
                value = 20;
            } else if (check.classList.contains("box3")) {
                value = 40;
            } else if (check.classList.contains("box4")) {
                value = 60;
            } else {
                value = 80;
            }
// update trail based on value
            trailUpdate();
// transfrom slide
            move(value, trailValue);
// start animation
            animate();
// start interval
            start = setInterval(() => slide("increase"), interval);
        };

        // Add function to all trails
        trail.forEach(cur => cur.addEventListener("click", ev => clickCheck(ev)));

        // Mobile touch Slide Section
        const touchSlide = (() => {
            let start, move, change, sliderWidth;

// Do this on initial touch on screen
            slider.addEventListener("touchstart", e => {
// get the touche position of X on the screen
                start = e.touches[0].clientX;
// (each slide with) the width of the slider container divided by the number of slides
                sliderWidth = slider.clientWidth / trail.length;
            });

// Do this on touchDrag on screen
            slider.addEventListener("touchmove", e => {
// prevent default function
                e.preventDefault();
// get the touche position of X on the screen when dragging stops
                move = e.touches[0].clientX;
// Subtract initial position from end position and save to change variabla
                change = start - move;
            });

            const mobile = e => {
// if change is greater than a quarter of sliderWidth, next else Do NOTHING
                change > sliderWidth / 4 ? slide("increase") : null;
// if change * -1 is greater than a quarter of sliderWidth, prev else Do NOTHING
                change * -1 > sliderWidth / 4 ? slide("decrease") : null;
// reset all variable to 0
                [start, move, change, sliderWidth] = [0, 0, 0, 0];
            };
// call mobile on touch end
            slider.addEventListener("touchend", mobile);
        })();

    </script>


    <script>
        $(document).ready(function () {
            $("#website").hide();
            $("#branding").hide();
            $("#socialMedia").hide();
            $("#logo_").hide();
            $("#uiUx_").hide();
            $("#event_").hide();
        })

        $(document).ready(function () {
            $("#tab_1").click(function () {
                $("#allWork").show();
                $("#website").hide();
                $("#branding").hide();
                $("#socialMedia").hide();
                $("#logo_").hide();
                $("#uiUx_").hide();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_2").click(function () {
                $("#allWork").hide();
                $("#website").show();
                $("#branding").hide();
                $("#socialMedia").hide();
                $("#logo_").hide();
                $("#uiUx_").hide();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_3").click(function () {
                $("#allWork").hide();
                $("#website").hide();
                $("#branding").show();
                $("#socialMedia").hide();
                $("#logo_").hide();
                $("#uiUx_").hide();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_4").click(function () {
                $("#allWork").hide();
                $("#website").hide();
                $("#branding").hide();
                $("#logo_").hide();
                $("#socialMedia").show();
                $("#uiUx_").hide();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_5").click(function () {
                $("#allWork").hide();
                $("#website").hide();
                $("#branding").hide();
                $("#logo_").show();
                $("#socialMedia").hide();
                $("#uiUx_").hide();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_6").click(function () {
                $("#allWork").hide();
                $("#website").hide();
                $("#branding").hide();
                $("#logo_").hide();
                $("#socialMedia").hide();
                $("#uiUx_").show();
                $("#event_").hide();
            })
        })
        $(document).ready(function () {
            $("#tab_7").click(function () {
                $("#allWork").hide();
                $("#website").hide();
                $("#branding").hide();
                $("#logo_").hide();
                $("#socialMedia").hide();
                $("#uiUx_").hide();
                $("#event_").show();
            })
        })
    </script>

    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("service-tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("service-tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>

    <script>
        function scrollWin() {
            document.getElementById('clientContainer').scrollBy(0, 120);
        }
    </script>

@endsection

@section('script_section')


@endsection