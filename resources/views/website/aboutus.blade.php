@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "About Us" ;
        $metakeywordname = "UnicornEqupment Main Machine" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Mainmahine Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

        <!--banner section start-->
        <section class="innerpagebanner d-flex align-items-center">
            <div class="container">
                <div class="mainheadertitle text-center">
                    <h1 class="text-uppercase">About Us</h1>
                </div>
            </div>
        </section>
        <!--banner section end here-->

    <section class="aboutus">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h4>Rajiv Bhardwaj - Founder - Unicorn Equipment</h4>
                    <p>
                        Unicorn Equipment is brand of well reputed vendor of Indian Forces since 1986. Unicorn Equipment is a fully Indian company with long experience of machine assembling point in India. Product development and assembly takes place at our facility in Delhi. The development and design work is guided by products with well thought-out function, good ergonomics, quality in material selection and consideration of both cycle and work environment. Our products are among the major construction &amp; rental companies in India, but also among smaller contractors. 
                    </p>

                    <h5>The dialogue with customers provides the basis for development</h5>
                    <p>
                        The rental companies and their customers' demands for sustainability and product quality are high. They give us valuable views that we take into account when developing new products. Based on customer requests, the product program will therefore be broadened to include products for concrete treatment.
                    </p>

                    <h5>Quality and environment</h5>
                    <p>
                        Our ambitions are considerably higher than that. The main customer group consists of the most demanding companies - the rental &amp; construction companies, and they specify more than any other quality level. We endeavour to be responsive and respond quickly, all in order to drive the development forward. Of course, we work in CAD and other programs and collaborate with external consultants and industrial designers to create the best solutions from both customer and manufacturing perspective.
                    </p>

                </div>

                    <div class="col-md-6">
                        <img src="{{asset('frontend/images/founder.jpg')}}" class="aboutusimg" alt="">
                    </div>
                </div>

                <div class="col-12">
                    <h4>UNICORN environmental policy</h4>

                    <h5>Assembling</h5>
                    <p>
                        Our products are assembling in DELHI, an area with long experience of machine manufacturing. Entrepreneurial spirit and innovation are deeply rooted in us. The knowledge of soil and asphalt packing within UNICORN goes back more than 10 years in the past and has always led us forward in the development of new products and solutions.
                    </p>

                    <h5> Close selected subcontractor</h5>
                    <p>
                        The components are manufactured by subcontractors, selected with respect to quality, delivery reliability, environmental ambitions and resources to, together with UNICORN, continuously develop the end product.
                    </p>

                    <h5>Construction and development </h5>
                    <p>
                        All UNICORN products are designed and manufactured for the rental &amp; construction industry. Rugged chassis, proven engines and oversized air filters are clear evidence of how we think. And because the products can easily be transported, they have large and well-placed lifting brackets.
                        The machines are often subjected to rough treatment and harsh climate. Therefore, we have chosen to galvanize the chassis in order to achieve the very longest service life, in addition it increases the secondary value. The zinc layer resist scraping better than any other surface treatment and protects the steel by its ability to self-heal.
                    </p>

                </div>
                    {{-- <button type="button"><a class="custombutton aboutssbtn" href="#">Contact Now</a></button> --}}
                {{-- <div class="col-md-6">
                    <img src="{{asset('frontend/images/founder.jpg')}}" class="aboutusimg" alt="">
                </div> --}}

        </div>
        </div>
    </section>

    <div class="clearfix"></div>
            
    <!-- about us section start here -->
    <section>
        <div class="aboutussection">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 wrappersection">
                        <div class="contantbox">
                            <h2>The Benefits of using<br>
                                <span style="color: #feca0a;">UNICORN EQUIPMENTS</span></h2>
                            <h3 class="title_back_headin">About Us</h3>

                            <p>
                                Dynamically evisculate synergistic relationships without cross functional results. Quickly utilize cross-media catalysts for change after best-of-breed infomediaries. Objectively synergize granular architectures vis-a-vis impactful products. Uniquely
                                disintermediate 2.0 e-business after diverse leadership. Intrinsicly build synergistic human capital before enterprise content. <br><br>Intrinsicly deliver alternative functionalities
                                through alternative process improvements. Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships.
                            </p>
                            <div class="callnow">
                                <button type="button"><a class="custombutton" href="#"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Contact Us</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 rectangleright">
                        <div class="imageright"><img src="{{asset('frontend/images/about_us_map.png')}}" alt=""></div>
                        <div class="backgroundrectangle">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end here -->

    <div class="clearfix"></div>

   
@endsection