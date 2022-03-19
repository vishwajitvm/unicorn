@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Dealer" ;
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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!--banner section end-->

        <!--contact us section-->
        <section class="contactdetails">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" col-md-4 ">
                        <div class="cardwrapper ">
                            <img src="{{asset('frontend/style/image/main_banner_1.jpg ')}}" alt=" ">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">Delhi, India</a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="# ">+91 1234567890</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">Vikaspuri, Delhi</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.356837018893!2d77.08077131500805!3d28.58906998243498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b41b7bf3f0f%3A0xaf4ab794d32d9f05!2sPalam!5e0!3m2!1sen!2sin!4v1645525396568!5m2!1sen!2sin "
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
    
        <section class="contactdetails1 contactdetails">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" col-md-4 ">
                        <div class="cardwrapper ">
                            <img src="{{asset('frontend/style/image/main_banner_1.jpg ')}}" alt=" ">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">Delhi, India</a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="# ">+91 1234567890</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">Vikaspuri, Delhi</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.356837018893!2d77.08077131500805!3d28.58906998243498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b41b7bf3f0f%3A0xaf4ab794d32d9f05!2sPalam!5e0!3m2!1sen!2sin!4v1645525396568!5m2!1sen!2sin "
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
    
        <section class="contactdetails2 contactdetails">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" col-md-4 ">
                        <div class="cardwrapper ">
                            <img src="{{asset('frontend/style/image/main_banner_1.jpg ')}}" alt=" ">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">Delhi, India</a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="# ">+91 1234567890</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>Lorem ipsum dolor sit amet </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">Vikaspuri, Delhi</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.356837018893!2d77.08077131500805!3d28.58906998243498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b41b7bf3f0f%3A0xaf4ab794d32d9f05!2sPalam!5e0!3m2!1sen!2sin!4v1645525396568!5m2!1sen!2sin "
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
        <!--contact us section end-->



   
@endsection