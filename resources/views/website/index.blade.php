@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Home" ;
        $metakeywordname = "UnicornEqupment Keywords" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

<main class="site">

    <!-- banner -->
    <div class="banner">
        <section class="cd-slider">
            <ul>
                <li data-color="">
                    <div class="content d-flex align-items-center" style="background-image:url('{{asset('frontend/assets/img/banner/BANNER\ 1.png')}}')">
                        <div class="container">
                            <blockquote>
                                <p>RIDE ON <br> ROLLER </p>
                                <span>Amidst our wide range of products, we are also engaged in offering a wide range of
                                    Ride on roller or Ride on vibratory roller. </span><br><br>
                                <button class="btn button"><a href="#">Explore now</a></button>
                            </blockquote>
                        </div>

                    </div>
                </li>
                <li data-color="#feca0a">
                    <div class="content  d-flex align-items-center" style="background-image:url('{{asset('frontend/assets/img/banner/BANNER\ 2.png')}}')">
                        <div class="container">
                            <blockquote>
                                <p>WALK BEHIND ROLLER</p>
                                <span>Walk Behind rollers can be double drum model, both types are self-propelled and
                                    can work in reverse travel direction. these roller controlled by cable or road
                                    linkages.</span><br><br>
                                <button class="btn button"><a href="#">Explore now</a></button>
                            </blockquote>
                        </div>
                    </div>
                </li>
                <li data-color="#303030">
                    <div class="content  d-flex align-items-center" style="background-image:url('{{asset('frontend/assets/img/banner/BANNER\ 3.png')}}')">
                        <div class="container">
                            <blockquote>
                                <p>BAR CUTTING MACHINE</p>
                                <span>Unicorn Equipment a unit of M/S global links is a unique name. which is engaged in
                                    presenting a wide range of bar cutting machine. This brings duty bar cutting machine
                                    with strong construction and high quality components.</span><br><br>
                                <button class="btn button"><a href="#">Explore now</a></button>
                            </blockquote>
                        </div>
                    </div>
                </li>
            </ul>
            <nav class="sliderr">
                <div>
                    <a class="prev" href="#"></a>
                </div>
                <div>
                    <a class="next" href="#"></a>
                </div>
            </nav>
        </section>

    </div>
    <!-- banner closed -->

    <!-- login form -->
    <div class="login">
        <div class="container login-box p-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 welcome">
                    <div class="heading">
                        <h2 class="py-2">LOGIN</h2>
                        <p>Welcome back! Please enter your details</p>
                    </div>

                    <form class="mt-5 px-2" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" placeholder=" Enter your email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

                            <div class="mb-3 my-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" id="password" placeholder=" Enter your Password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <div class="row">
                                    <div class="col-6"> <input type="checkbox" onclick="myFunction()" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1" >View Password</label>
                                    </div>
                                    <div class="col-6 col-sm-6"><a href="#">Forget password</a></div>
                                </div>

                            </div>
                            <button type="submit w-75" class="btn btn-primary button-submit">Submit</button>
                            <div class="text-center my-3">
                                <p>Do you Have an account? <a href="#" style="color:#FDB900">Sign up</a></p>
                            </div>
                    </form>

                    </div>

                </div>

                <div class="col-lg-6 col-md-6 welcome-2 ">
                    <div class="logo-box"><img src="frontend/assets/img/logo (1).png" class="img-fluid" width="20%" height="20%">
                    </div>
                    <div class="heading-logo">
                        <h2 class="py-4">Welcome Back</h2>
                    </div>
                    <ol class="list">
                        <li>Create an account At Unicorn Equipment</li>
                        <li>Create an account At Unicorn Equipment</li>
                        <li>Create an account At Unicorn Equipment</li>
                    </ol>
                    <button type="submit" class="btn btn-primary button-submit">Ready to create an account</button>

                </div>

            </div>
        </div>
        <!-- login closed -->

        <!-- category section start -->
        <section class="category mb-5">
            <div class="container ">
                <div class="category_title">
                    <h2>CATEGORIES</h2>
                    <h3 class="title_back_heading">OUR PRODUCT</h3>
                    <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">

                </div>
                <div class="row category_items">

                    <!--unicorn category here-->
                    @foreach ($data as $key=>$item)
                    @php
                        $imgData = explode('|' , $item->category_images)
                    @endphp

                    <div class="col-lg-4 col-sm-12 mb-5 text-center ">
                        <div class="m-auto "> <!--border background_cat -->
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ URL::to($imgData[0]) }}" class="img-fluid" alt="category img 1">
                                    </div>

                                    @for ($i = 1; $i < count($imgData); $i++)
                                        <div class="carousel-item">
                                            <img src="{{ URL::to($imgData[$i]) }}" class="img-fluid">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('main-machine',$item->id) }}" class="text-dark"><p class="category_name">{{ Str::title($item->category_name) }}</p></a>
                    </div>

                    @endforeach
                    <!--end unicorn categopry here-->



                </div>

            </div>

            <div class="Find-button text-center">
                <button class="btn btn-primary"><a href="{{ Route('mainmachine') }}">Explore All Unicorn Machine</a></button>
            </div>

        </section>
        <!-- category close -->

        <!-- feature   start-->

        <section class="feature">
            <div class="container ">
                <div class="feature_title">
                    <h2>FEATURE</h2>
                    <h3 class="feature_back_heading">OUR Best</h3>
                    <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1; text-align:right;
                display:inline-block;">

                </div>
                <div class="row feature-back d-flex justify-content-between;">
                    <div class="col-lg-6 "><img src="frontend/assets/img/img.png" class="img-fluid"></div>
                    <div class="col-lg-5">

                        <div class="row featur_details">
                            <div class="col-md-3 topp  col-sm-3 mt-3 ">
                                <div class="fa_img"><img src="frontend/assets/img/icon.png"></div>
                            </div>
                            <div class="col-md-9 col-sm-12 fa-content mt-3 "><br> 25 years of engineering excellence <br> & Universally accepted standard of quality </div>
                        </div>
                        <div class="row featur_details">
                            <div class="col-md-3  col-sm-3 mt-3 ">
                                <div class="fa_img"><img src="frontend/assets/img/icon.png"></div>
                            </div>
                            <div class="col-md-9  col-sm-12 fa-content mt-3 "><br> Excellence in the offered array</div>
                        </div>
                        <div class="row featur_details">
                            <div class="col-md-3 col-sm-3 mt-3 ">
                                <div class="fa_img"><img src="frontend/assets/img/icon.png"></div>
                            </div>
                            <div class="col-md-9 col-sm-12 fa-content mt-3 "> <br> Manufactures and supplies of an extensive range </div>
                        </div>
                        <div class="row featur_details">
                            <div class="col-md-3 bottomm col-sm-3 mt-3 ">
                                <div class="fa_img"><img src="frontend/assets/img/icon.png"></div>
                            </div>
                            <div class="col-md-9 col-sm-12 fa-content mt-3 py-4"> <br>Customer Focused Approch </div>
                        </div>

                    </div>
                </div>



            </div>

        </section>


        <!-- Reward section -->
        <section class="reward">

            <div class="container reward-main">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-4 my-5"><img src="frontend/assets/img/trophy 1 (Traced).png"><br>
                        <h3>Processing Orders</h3>
                        <br>
                        <h4>{{ $requestmachine }}</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 my-5"><img src="frontend/assets/img/Group 21.png"><br>
                        <h3>Order Complete</h3>
                        <br>
                        <h4>{{ $dealdone }}</h4>
                    </div>

                    <div class="col-md-4 col-sm-4 my-5"><img src="frontend/assets/img/verify.png"><br>
                        <h3>Service Completed</h3>
                        <br>
                        <h4>{{ $servicedone }}</h4>
                    </div>
                </div>
            </div>

        </section>

        <!-- rewar section closed -->

        <!-- testimonional -->

        <section class="testimonials ">
            <div class="container">
                <div class="category_title">
                    <h2>OUR CLIENT</h2>
                    <h3 class="title_back_heading">TESTIMONIALS</h3>
                    <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">

                </div>
                <div class="row">
                    <div class="col-lg-7 col-sm-12  col-md-7 test_box_1"><img src="frontend/assets/img/Mask group.png" class="img-fluid"></div>

                    <div class="col-lg-8 col-sm-12 col-md-7 test_box_2 bg-dark">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7 col-sm-7 col-md-8-">
                                <div class="content-test">
                                    <!-- reviews -->
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <h3>Rishabh thakur</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus excepturi sed impedit quos, aut nesciunt, sunt non labore dolore quibusdam et velit tempore eligendi. Error expedita quae deserunt
                                                    dicta aliquid!</p>
                                            </div>
                                            <div class="carousel-item ">
                                                <h3>Anuj</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus excepturi sed impedit quos, aut nesciunt, sunt non labore dolore quibusdam et velit tempore eligendi. Error expedita quae deserunt
                                                    dicta aliquid!</p>
                                            </div>
                                            <div class="carousel-item ">
                                                <h3>Rohit</h3>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus excepturi sed impedit quos, aut nesciunt, sunt non labore dolore quibusdam et velit tempore eligendi. Error expedita quae deserunt
                                                    dicta aliquid!</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial closed -->

        <!-- association -->
        <section class="association">
            <div class="container-fluid">
                <div class="asso_title">
                    <h2> ASSOCIATION</h2>
                    <h3 class="asso_back_heading"> OUR</h3>
                    <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1; text-align:right; margin-right: 130px;  display:inline-block;">

                </div>

                <div class="row association_bg text-center">
                    <div class="col-lg-4 col-md-4 col-sm-4 px-5"><img src="frontend/assets/img/logo 1ds.png" class="img-fluid"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4  mt-3 px-5"><img src="frontend/assets/img/logo 2ds.png" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 px-5"><img src="frontend/assets/img/logo 3ds.png" class="img-fluid"></div>
                </div>
            </div>

        </section>
        <!-- association closed -->


        <!-- update start-->
        <div class="our_update">
            <div class="container">
                <div class="category_title">
                    <h2>OUR LATEST</h2>
                    <h3 class="title_back_heading">Videos </h3>
                    <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">

                </div>
            </div>

            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" border-radius="" src="https://www.youtube.com/embed/ml8A-KHHa5U"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" src="https://www.youtube.com/embed/a8Rltz2Xe2c"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" border-radius="" src="https://www.youtube.com/embed/fThcvT-6H3U"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" border-radius="" src="https://www.youtube.com/embed/kQS6XMBqE8E"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" border-radius="" src="https://www.youtube.com/embed/j8uvFyHGCx4"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="video-content">
                                <div class="card-video">
                                    <iframe width="100%" height="220px" border-radius="" src="https://www.youtube.com/embed/kqlSUBGzcs8"  allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
        <!-- update close -->



</main>

    <script>
        function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
@endsection

