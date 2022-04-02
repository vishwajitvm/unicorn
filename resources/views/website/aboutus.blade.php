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
                    <h1>About Us</h1>
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

                    <button type="button"><a class="custombutton aboutssbtn" href="#">Contact Now</a></button>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/images/about_us_map.png')}}" class="aboutusimg" alt="">
                </div>

            </div>
        </div>
        </div>
    </section>


    {{-- <section class="teamsectionn">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <h2 class="text-center mb-5">Our Founders</h2>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/te1.jpg')}}" alt="">
                        <h3 class="mb-2 mt-3">Vishwa</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/te2.jpg')}}" alt="">
                        <h3 class="mb-2 mt-3">Sonali</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/te1.jpg')}}" alt="">
                        <h3 class="mb-2 mt-3">Vishwa</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/te2.jpg')}}" alt="">
                        <h3 class="mb-2 mt-3">Sonali</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section> --}}
   
@endsection