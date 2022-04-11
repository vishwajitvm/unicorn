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
                            <img src="{{asset('frontend/images/unicorn_center.jpeg')}}"  alt="unicorn center image">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">WZ-131, First Floor 

                                        Near Coffee House, Budela Market
                                        
                                        Vikas Puri, New Delhi-110018 </a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="tel:919811111632">+91 98111 11632</a> <br>
                                    <a href="tel:919811777774">+91 98117 77774</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>
                                        <a href="mailto:equipmentunicorn@gmail.com">equipmentunicorn@gmail.com</a> <br>
                                        <a href="mailto:Salesunicornequipment@gmail.com">Salesunicornequipment@gmail.com</a> <br>
                                        <a href="mailto:Info.equipmentunicorn@gmail.com">Info.equipmentunicorn@gmail.com</a> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">Head Office</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1238.0628228894145!2d77.07197543315591!3d28.63664055453823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04eec8fb7d11%3A0xe1ccecb9b29b8dcc!2sUnicorn%20Equipment.!5e0!3m2!1sen!2sin!4v1648533732103!5m2!1sen!2sin"
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
                            <img src="{{asset('frontend/images/unicorn_center.jpeg')}}"  alt="unicorn center image">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">G/F, Plot of Kh no. 556

                                        MS Block , Ranaji Enclave, Near Old Age Home
                                        
                                        New Delhi-110043</a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="tel:919811111632">+91 98111 11632</a> <br>
                                    <a href="tel:919811777774">+91 98117 77774</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>
                                        <a href="mailto:equipmentunicorn@gmail.com">equipmentunicorn@gmail.com</a> <br>
                                        <a href="mailto:Salesunicornequipment@gmail.com">Salesunicornequipment@gmail.com</a> <br>
                                        <a href="mailto:Info.equipmentunicorn@gmail.com">Info.equipmentunicorn@gmail.com</a> 
                                    </p>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">North India Assembly & Stock Point</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4582173316953!2d77.0111222154204!3d28.616025891577905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0558ffdcaae5%3A0xf831a225f6aa8772!2sMS%20Block%20Rd%2C%20Masudabad%2C%20Najafgarh%2C%20Delhi%2C%20110043!5e0!3m2!1sen!2sin!4v1648533876931!5m2!1sen!2sin"
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
                            <img src="{{asset('frontend/images/unicorn_center.jpeg')}}"  alt="unicorn center image">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">No.55, Annai Indra Nagar, Sivabootham Village

                                        Vanagaram, Chennai-600095, Tamil Nadu</a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="tel:919811111632">+91 98111 11632</a> <br>
                                    <a href="tel:919811777774">+91 98117 77774</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>
                                        <a href="mailto:equipmentunicorn@gmail.com">equipmentunicorn@gmail.com</a> <br>
                                        <a href="mailto:Salesunicornequipment@gmail.com">Salesunicornequipment@gmail.com</a> <br>
                                        <a href="mailto:Info.equipmentunicorn@gmail.com">Info.equipmentunicorn@gmail.com</a> 
                                    </p>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">South India Assembly & Stock Point </h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.019527535821!2d80.23228901526097!3d13.097948915636124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265cb7dbf5eb5%3A0xb6e7aff5d809711!2sUnicorn%20Equipment!5e0!3m2!1sen!2sin!4v1648533921564!5m2!1sen!2sin"
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
        <!--contact us section end-->

        <section class="contactdetails2 contactdetails">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" col-md-4 ">
                        <div class="cardwrapper ">
                            <img src="{{asset('frontend/images/unicorn_center.jpeg')}}"  alt="unicorn center image">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">Gala no. 1, Hari Hari Corporation Building No. E/16,

                                        Next to Aapolo Tire Warehouse, Dapode Village,
                                        
                                        Near Gajanan petrol pump, Bhiwandi 421302 Maharashtra  </a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="tel:919811111632">+91 98111 11632</a> <br>
                                    <a href="tel:919811777774">+91 98117 77774</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>
                                         <a href="mailto:equipmentunicorn@gmail.com">equipmentunicorn@gmail.com</a> <br>
                                         <a href="mailto:Salesunicornequipment@gmail.com">Salesunicornequipment@gmail.com</a> <br>
                                         <a href="mailto:Info.equipmentunicorn@gmail.com">Info.equipmentunicorn@gmail.com</a> 
                                     </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">West India Assembly & Stock Point  </h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15067.35586655835!2d73.03702830831584!3d19.245848669001628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bd2b442eebad%3A0xe57be09e0943a812!2sShree%20gajanan%20petrol%20pump!5e0!3m2!1sen!2sin!4v1648534275493!5m2!1sen!2sin"
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                                
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
        <!--contact us section end-->


        <section class="contactdetails2 contactdetails">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class=" col-md-4 ">
                        <div class="cardwrapper ">
                            <img src="{{asset('frontend/images/unicorn_center.jpeg')}}"  alt="unicorn center image">
                            <div class="cardaddress ">
                                <div class="iconset "><i class="fas fa-map-marker-alt "></i></div>
                                <div class="addresscontent ">
                                    <h4>Address</h4>
                                    <a href="# ">Nishchinda (West) PO- Ghoshpara (Bally)

                                        Howrah, Kolkatta-711227, West Bengal
                                        
                                        </a>
                                </div>
                            </div>
                            <div class="cardphone ">
                                <div class="iconset "><i class="fas fa-phone-alt "></i></div>
                                <div class="phonecontent ">
                                    <h4>Call Us On</h4>
                                    <a href="tel:918048982966">+91-8048982966</a>
                                </div>
                            </div>
                            <div class="cardemail ">
                                <div class="iconset "><i class='fas fa-envelope'></i></div>
                                <div class="emailcontent ">
                                    <h4>Email Us</h4>
                                    <p>
                                        <a href="mailto:equipmentunicorn@gmail.com">equipmentunicorn@gmail.com</a> <br>
                                        <a href="mailto:Salesunicornequipment@gmail.com">Salesunicornequipment@gmail.com</a> <br>
                                        <a href="mailto:Info.equipmentunicorn@gmail.com">Info.equipmentunicorn@gmail.com</a> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="mapcontent ">
                            <h3 class="addressheading">East India Regional Office</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.3454886598124!2d88.31688301534068!3d22.640903836165055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882c955555555%3A0x6c8e24dbe5187b2b!2sNischinda%2C%20Sapuipara%2C%20Ghosh%20Para%2C%20Howrah%2C%20West%20Bengal%20711227!5e0!3m2!1sen!2sin!4v1648534362135!5m2!1sen!2sin"
                                width="100% " height="470px" style="border:0; border-radius: 8px;" allowfullscreen=" " loading="lazy "></iframe>
                                
                        </div>
    
                    </div>
    
                </div>
    
    
    
            </div>
            </div>
        </section>
        <!--contact us section end-->




   
@endsection