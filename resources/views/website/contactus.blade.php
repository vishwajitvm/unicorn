@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Contact us" ;
        $metakeywordname = "UnicornEqupment Main Machine" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Mainmahine Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

    <!--banner section start-->
    <section class="contactpage  align-items-center">

        <div class="container-fluid p-0">
            <img src="{{asset('frontend/assets/img/banner/contact_banner.jpg')}}" class="img-fluid" width="100%" height="100%">

        </div>

    </section>

    <!--banner section end here-->

    <!-- serach data section start here -->

    <section class="contactdetails">
        <!-- headquator -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_heading">|| Contact info</div>
                    <h3 class="headquater
                    ">Unicorn HEADQUATER</h3>
                    <div class="address">
                        <div class="row">
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Address</b><br>
                                WZ-131, First Floor Near Coffee House, Budela Market Vikas Puri, New Delhi-110018
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>
                                    Call Us On</b><br>
                                +91 98111 11632<br>
                                +91 98117 77774
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Email Us</b><br>
                                <a href="#">equipmentunicorn@gmail.com</a><br>
                                <a href="#"> Salesunicornequipment@gmail.com</a><br>
                                <a href="#"> Info.equipmentunicorn@gmail.com</a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  position-relative  p-4">
                    <!-- <div class="map_box position-absolute"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.866881533123!2d77.07083075820914!3d28.637740445603924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04eec8fb7d11%3A0xe1ccecb9b29b8dcc!2sUnicorn%20Equipment.!5e0!3m2!1sen!2sin!4v1654673251784!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div> -->


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.866881533123!2d77.07083075820914!3d28.637740445603924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04eec8fb7d11%3A0xe1ccecb9b29b8dcc!2sUnicorn%20Equipment.!5e0!3m2!1sen!2sin!4v1654673251784!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- headquatoe closed -->

        <!-- North India Assembly & Stock Point -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_heading">|| Contact info</div>
                    <h3 class="headquater
                    ">North India Assembly & Stock Point</h3>
                    <div class="address">
                        <div class="row">
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Address</b><br>
                                G/F, Plot of Kh no. 556 MS Block , Ranaji Enclave, Near Old Age Home New Delhi-110043
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>
                                    Call Us On</b><br>
                                +91 98111 11632<br>
                                +91 98117 77774
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Email Us</b><br>
                                <a href="#">equipmentunicorn@gmail.com</a><br>
                                <a href="#"> Salesunicornequipment@gmail.com</a><br>
                                <a href="#"> Info.equipmentunicorn@gmail.com</a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  position-relative p-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7772.039210214413!2d80.234478!3d13.097944000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6e7aff5d809711!2sUnicorn%20Equipment!5e0!3m2!1sen!2sin!4v1654674568934!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- South India Assembly & Stock Point -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_heading">|| Contact info</div>
                    <h3 class="headquater
                    ">South India Assembly & Stock Point</h3>
                    <div class="address">
                        <div class="row">
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Address</b><br>
                                No.55, Annai Indra Nagar, Sivabootham Village Vanagaram, Chennai-600095, Tamil Nadu
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>
                                    Call Us On</b><br>
                                +91 98111 11632<br>
                                +91 98117 77774
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Email Us</b><br>
                                <a href="#">equipmentunicorn@gmail.com</a><br>
                                <a href="#"> Salesunicornequipment@gmail.com</a><br>
                                <a href="#"> Info.equipmentunicorn@gmail.com</a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  position-relative p-4 ">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7772.039210214413!2d80.234478!3d13.097944000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6e7aff5d809711!2sUnicorn%20Equipment!5e0!3m2!1sen!2sin!4v1654674796720!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!--West India Assembly & Stock Point -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_heading">|| Contact info</div>
                    <h3 class="headquater
                    ">West India Assembly & Stock Point</h3>
                    <div class="address">
                        <div class="row">
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Address</b><br>
                                Gala no. 1, Hari Hari Corporation Building No. E/16, Next to Aapolo Tire Warehouse,
                                Dapode Village, Near Gajanan petrol pump, Bhiwandi 421302 Maharashtra
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>
                                    Call Us On</b><br>
                                +91 98111 11632<br>
                                +91 98117 77774
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Email Us</b><br>
                                <a href="#">equipmentunicorn@gmail.com</a><br>
                                <a href="#"> Salesunicornequipment@gmail.com</a><br>
                                <a href="#"> Info.equipmentunicorn@gmail.com</a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  position-relative p-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30135.373588708957!2d73.041724!3d19.242244000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe57be09e0943a812!2sShree%20gajanan%20Indian%20Oil%20petrol%20pump!5e0!3m2!1sen!2sin!4v1654674937403!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!--East India Regional Office-->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact_heading">|| Contact info</div>
                    <h3 class="headquater
                    ">East India Regional Office</h3>
                    <div class="address">
                        <div class="row">
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Address</b><br>
                                Nishchinda (West) PO- Ghoshpara (Bally) Howrah, Kolkatta-711227, West Bengal
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>
                                    Call Us On</b><br>
                                +91-8048982966
                            </div>
                            <div class="col-sm-1 offset-sm-1"><i class="fas fa-location"></i></div>
                            <div class="col-sm-10"><b>Email Us</b><br>
                                <a href="#">equipmentunicorn@gmail.com</a><br>
                                <a href="#"> Salesunicornequipment@gmail.com</a><br>
                                <a href="#"> Info.equipmentunicorn@gmail.com</a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  position-relative mt-5 p-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7364.691236600654!2d88.319072!3d22.640899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882c955555555%3A0x6c8e24dbe5187b2b!2sNischinda%2C%20Sapuipara%2C%20Ghosh%20Para%2C%20Howrah%2C%20West%20Bengal%20711227!5e0!3m2!1sen!2sin!4v1654675112390!5m2!1sen!2sin"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </section>

        




   
@endsection