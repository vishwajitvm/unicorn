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
                    <h1>Our Team</h1>
                </div>
            </div>
        </section>

        <section class="teamsectionn">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center pt-5">
                    <!-- <h2 class="text-center mb-5">Our Founders</h2> -->
                    <div class="col-md-3 col-sm-12 col-lg-3 ">
                        <div class="cardwrapperr text-left py-4 px-4">
                            <img src="frontend/images/team1.png" alt="">
                            <h3 class="mb-2 mt-3">Vishwajit</h3>
                            <div class="mb-2 mt-1">Developer</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro
                                excepturi vel.</p>
                        </div>
                    </div>
                    <div class=" col-md-3 col-lg-3 ">
                        <div class="cardwrapperr text-left py-4 px-4">
                            <img src="frontend/images/team2.png" alt="">
                            <h3 class="mb-2 mt-3">Sonali</h3>
                            <div class="mb-2 mt-1">Developer</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro
                                excepturi vel.</p>
                        </div>
                    </div>
                    <div class=" col-md-3 col-lg-3 ">
                        <div class="cardwrapperr text-left py-4 px-4">
                            <img src="frontend/images/team3.png" alt="">
                            <h3 class="mb-2 mt-3">Vishwa</h3>
                            <div class="mb-2 mt-1">Developer</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro
                                excepturi vel.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cardwrapperr text-left py-4 px-4">
                            <img src="frontend/images/team4.png" alt="">
                            <h3 class="mb-2 mt-3">Sonali</h3>
                            <div class="mb-2 mt-1">Developer</div>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro
                                excepturi vel.</p>
                        </div>
                    </div>
    
                </div>
            </div>
            </div>
        </section>
        <!--banner section end here-->

        
@endsection
