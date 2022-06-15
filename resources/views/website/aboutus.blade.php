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
    <!--banner section start-->
    <section class="innerpagebanner d-flex align-items-center">
        <div class="container">
            <div class="mainheadertitle text-center">
                <h1>About <span style="color:white ;">Us </span></h1>
            </div>
        </div>
    </section>
    </header>
    <!--main header end-->    <!--banner section end here-->

    </header>
    <!--main header end-->

    <!-- our founder section -->
    <section class="founder mt-5">

        <div class="container">
            <div class="row">

                <div class="col-lg-7 ">

                    <h3 class="founder_heading">Rajiv Bhardwaj </h3>
                                        <p class="founder_subheading">Founder - Unicorn Equipment</p>

                    <p class="founder_description">Unicorn Equipment is brand of well reputed vendor of Indian Forces
                        since 1986. Unicorn Equipment is a fully Indian company with long experience of machine
                        assembling point in India. Product development and assembly takes place at our facility in
                        Delhi. The development and design work is guided by products with well thought-out function,
                        good ergonomics, quality in material selection and consideration of both cycle and work
                        environment. Our products are among the major construction & rental companies in India, but also
                        among smaller contractors.<br>
                        <b>The dialogue with customers provides the basis for development</b><br>
                        The rental companies and their customers' demands for sustainability and product quality are
                        high. They give us valuable views that we take into account when developing new products. Based
                        on customer requests, the product program will therefore be broadened to include products for
                        concrete treatment.
                    </p>
                </div>
                <div class="col-lg-5 "><img src="{{asset('frontend/assets/img/founder.jpg')}}" class="img-fluid"></div>

            </div>
        </div>

      
      </div>

    


    </section>



    {{-- <!-- our team section start  -->
    <section class="section-team">
        <div class="container">
            <!-- Start Header Section -->
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header-section">
                        <h3 class="small-title">Our Experts</h3>
                        <h2 class="title">Let's meet with our team members</h2>
                    </div>
                </div>
            </div>
            <!-- / End Header Section -->
            <div class="row">
                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/team1.png')}}" alt="">


                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Rohan</h3>
                            <!-- <span class="speciality">Web Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->
                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/team2.png')}}" alt="">
                            
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Deepak</h3>
                            <!-- <span class="speciality">WordPress Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->
                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/team3.png')}}" alt="">
                            
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Vikash</h3>
                            <!-- <span class="speciality">Angular Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->
                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/team4.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Raghav</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->
            </div>
        </div>
    </section> --}}
   
@endsection