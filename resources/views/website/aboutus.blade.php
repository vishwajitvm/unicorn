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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus magni aliquam similique obcaecati? Pariatur omnis excepturi dolorem fugiat, ab nihil aperiam suscipit neque numquam repudiandae illum ut doloremque esse quam velit
                        debitis odio tempore atque sint earum aspernatur voluptas. Fuga, optio. Recusandae cum dolores reiciendis nesciunt est doloribus doloremque libero?</p>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus magni aliquam similique obcaecati? Pariatur omnis excepturi dolorem fugiat, ab nihil aperiam suscipit neque numquam repudiandae illum ut doloremque esse quam velit
                        debitis odio tempore atque sint earum aspernatur voluptas. Fuga, optio. Recusandae cum dolores reiciendis nesciunt est doloribus doloremque libero?</p>
                    <button type="button"><a class="custombutton aboutssbtn" href="#">Contact Now</a></button>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/images/about_us_map.png')}}" class="aboutusimg" alt="">
                </div>

            </div>
        </div>
        </div>
    </section>


    <section class="teamsectionn">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <h2 class="text-center mb-5">Our Founders</h2>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/avatar-1.png')}}" alt="">
                        <h3 class="mb-2 mt-3">Vishwa</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/avatar-3.png')}}" alt="">
                        <h3 class="mb-2 mt-3">Sonali</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/avatar-4.png')}}" alt="">
                        <h3 class="mb-2 mt-3">Vishwa</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cardwrapperr text-left py-4 px-4">
                        <img src="{{asset('frontend/images/avatar-5.png')}}" alt="">
                        <h3 class="mb-2 mt-3">Sonali</h3>
                        <div class="mb-2 mt-1">Developer</div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum totam architecto porro excepturi vel.</p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
   
@endsection