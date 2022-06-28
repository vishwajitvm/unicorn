@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Our Team" ;
        $metakeywordname = "UnicornEqupment Keywords" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

        <!--banner section start-->
        <section class="innerpagebanner d-flex align-items-center">

            <div class="container">
                <div class="mainheadertitle text-center">
                    <h1>Our <span style="color:white ;">Team</span> </h1>
                </div>
            </div>
        </section>

    <!-- our team section start  -->
    <section class="section-team">
        <div class="container">
            <!-- Start Header Section -->
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header-section">
                        <h3 class="small-title">Unicorn Equipment Team</h3>
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

                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/vinnet.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Vinnet</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->

                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/krishna.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Krishna</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->

                 <!-- Start Single Person -->
                 <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/mahima.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">Mahima</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->

                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/aftab.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">aftab</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->

                <!-- Start Single Person -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/rohit.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">rohit</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->

                 <!-- Start Single Person -->
                 <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="single-person">
                        <div class="person-image">
                            <img src="{{asset('frontend/assets/img/team/unknown.png')}}" alt="">
                           
                        </div>
                        <div class="person-info">
                            <h3 class="full-name">rohit</h3>
                            <!-- <span class="speciality">Javascript Developer</span> -->
                        </div>
                    </div>
                </div>
                <!-- / End Single Person -->


            </div>
        </div>
    </section>
        
@endsection
