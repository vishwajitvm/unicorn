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

<div class="containtdata">
                    <!--banner section start-->
                    <section class="main_banner">

                        <div id="wrap" class="container-fluid">

                            <!-- Carousel -->
                            <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" id="imgbg" data-slide-number="0" data-toggle="lightbox" data-gallery="gallery" data-remote="../style/image/main_banner_1.jpg">
                                        <div class="slideimage1">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-7">
                                                        <div class="headercontent">
                                                            <h2>Company Performance</h2>
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel est voluptates dolorem, mollitia eligendi aut autem porro asperiores. Eaque, voluptates ducimus? Perferendis voluptas alias exercitationem
                                                                error blanditiis quae quasi aperiam!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-slide-number="1" data-toggle="lightbox" data-gallery="gallery" data-remote="frontend/style/image/main_banner_2.jpg">
                                        <div class="slideimage2">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-7">
                                                        <div class="headercontent">
                                                            <h2>Company Performance</h2>
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel est voluptates dolorem, mollitia eligendi aut autem porro asperiores. Eaque, voluptates ducimus? Perferendis voluptas alias exercitationem
                                                                error blanditiis quae quasi aperiam!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-slide-number="2" data-toggle="lightbox" data-gallery="gallery" data-remote="../style/image/main_banner_3.jpg">
                                        <div class="slideimage3">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-7">
                                                        <div class="headercontent">
                                                            <h2>Company Performance</h2>
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel est voluptates dolorem, mollitia eligendi aut autem porro asperiores. Eaque, voluptates ducimus? Perferendis voluptas alias exercitationem
                                                                error blanditiis quae quasi aperiam!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-slide-number="3" data-toggle="lightbox" data-gallery="gallery" data-remote="../style/image/main_banner_4.jpg">
                                        <div class="slideimage4">
                                            <div class="container">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-md-7">
                                                        <div class="headercontent">
                                                            <h2>Company Performance</h2>
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel est voluptates dolorem, mollitia eligendi aut autem porro asperiores. Eaque, voluptates ducimus? Perferendis voluptas alias exercitationem
                                                                error blanditiis quae quasi aperiam!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <a class="carousel-fullscreen" href="#carousel" role="button">
                                    <span class="carousel-fullscreen-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Fullscreen</span>
                                </a>
                                <a class="carousel-pause pause" href="#carousel" role="button">
                                    <span class="carousel-pause-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Pause</span>
                                </a>
                            </div>

                            <!-- Carousel Navigatiom -->
                            <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-slide-number="0">
                                        <div class="row mx-0 justify-content-center">
                                            <div id="carousel-selector-0" class="thumb col-3 px-1 py-2 selected" data-target="#carousel" data-slide-to="0">
                                                <img src="{{asset('frontend/style/image/main_banner_1.jpg')}}" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-1" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="1">
                                                <img src="{{asset('frontend/style/image/main_banner_2.jpg')}}" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-2" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="2">
                                                <img src="{{asset('frontend/style/image/main_banner_3.jpg')}}" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-3" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="3">
                                                <img src="{{asset('frontend/style/image/main_banner_4.jpg')}}" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="carousel-item " data-slide-number="1">
                                        <div class="row mx-0">
                                            <div id="carousel-selector-4" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="4">
                                                <img src="https://source.unsplash.com/kmRZFcZEMY8/1600x900.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-5" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="5">
                                                <img src="https://source.unsplash.com/HJDdrWtlkIY/1600x900.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-6" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="6">
                                                <img src="https://source.unsplash.com/VfuJpt81JZo/1600x900.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div id="carousel-selector-7" class="thumb col-3 px-1 py-2" data-target="#carousel" data-slide-to="7">
                                                <img src="https://source.unsplash.com/NLkXZQ7kHzI/1600x900.jpg" class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> -->
                            </div>
                        </div>

                    </section>
                    <!--header end-->

                    <!-- login section start here-->
                    <section class="loginsection">
                        <div class="container">
                            <div class="row shadowbg">
                                <div class="col-md-6 borderright">
                                    <div class="headingcontent">
                                        <h2 class="headinggcontent">Log In</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium a veritatis aperiam ipsam sapiente consequatur dicta autem soluta rem.</p>
            
                                        <p>Officiis vitae deserunt eum ipsum nesciunt repellendus quas animi! Tempora, praesentium.</p>
                                        <span><b>Ready to create your account?</b> <a href="#">Get Started</a></span>
                                    </div>
            
                                </div>

                                <div class="col-md-6">
                                    <div class="formcontent">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="password">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" onclick="myFunction()" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
            
                                            <div class="forpassword w-100 text-center mt-3">
                                                <a href="{{ route('password.request') }}" class="">Forgot Password?</a> <a href="{{ route('register') }}" class="ml-5">Sign Up</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- login section end here-->
            
                    <!-- Category section start here-->
                    <section class="sections categorysection">
                        <div class="container">
                            <div class="main_title">
                                <h2>Unicorn Equipment</h2>
                                <h3 class="title_back_heading">Our Products</h3>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                                <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">
                                <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis cupiditate fuga doloremque necessitatibus beatae <br>architecto modi velit, nisi expedita, similique molestiae perspiciatis ut dolor minima suscipit illum aut, fugiat
                                    exercitationem.
                                </p>
                            </div>
                            <div class="row firstcategorysection">
                                                                
                                @foreach ($data as $item)
                                <div class="col-md-3">
                                    <div class="categoryimgbox"><img class="img-thumbnail" src="{{ (!empty($item->machine_image))?url('upload/user_images/'.$item->machine_image):url('upload/no_image.jpg') }}" alt=""></div>
                                    <div class="category_titleheading">
                                        <h3><a href="{{ route('submachine',$item->id) }}"> {{ $item->machine_name }} </a></h3>
                                    </div>
                                </div>
                                @endforeach

                            </div>
            
                            <div class="morecategory">
                                <button type="button"><a class="custombutton" href=" {{ route('mainmachine') }} ">Find More</a></button>
                            </div>
                        </div>
                    </section>
                    <!-- category section end here -->
            
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

                    <!-- usps section start here -->
                    <section>
                        <div class="uspsection">
                            <div class="container">
                                <div class="row wrapperssectionmargin">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="imagebox">
                                            <img src="./images/trophy.png" alt="">
                                            <h4 class="uspheading">15<br><span>Awards</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="imagebox">
                                            <img src="./images/trophy.png" alt="">
                                            <h4 class="uspheading">1024<br><span>Happy Clients</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="imagebox">
                                            <img src="./images/trophy.png" alt="">
                                            <h4 class="uspheading">1500<br><span>Projects</span></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-3 d-flex justify-content-center">
                                        <div class="imagebox">
                                            <img src="./images/trophy.png" alt="">
                                            <h4 class="uspheading">99<br><span>Up Time</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- usps section end here -->
            
                    <div class="clearfix"></div>
            
                    <!-- features section start here-->
                    <section class="sections categorysection">
                        <div class="container">
                            <div class="main_title">
                                <h2>Features</h2>
                                <h3 class="title_back_heading">Our Best</h3>
                                <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-7">
                                    <div class="featuresicon">
                                        <div class="iconn">
                                            <img src="{{asset('frontend/images/road-roller_1.png')}}" alt="">
                                        </div>
                                        <div class="contentt">
                                            <h3>Provide Quality Equipments</h3>
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                    <div class="featuresicon">
                                        <div class="iconn">
                                            <img src="{{asset('frontend/images/road-roller_1.png')}}" alt="">
                                        </div>
                                        <div class="contentt">
                                            <h3>Provide Quality Equipments</h3>
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                    <div class="featuresicon">
                                        <div class="iconn">
                                            <img src="{{asset('frontend/images/road-roller_1.png')}}" alt="">
                                        </div>
                                        <div class="contentt">
                                            <h3>Provide Quality Equipments</h3>
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                    <div class="featuresicon">
                                        <div class="iconn">
                                            <img src="{{asset('frontend/images/road-roller_1.png')}}" alt="">
                                        </div>
                                        <div class="contentt">
                                            <h3>Provide Quality Equipments</h3>
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="imagee">
                                        <img src="{{asset('frontend/images/rightsidefeatures.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </section>
                    <!-- features section end here -->
            
                    <div class="clearfix"></div>
            
            
                    <!-- how does it works section start here -->
                    <section class="sections categorysection">
                        <div class="container">
                            <div class="main_title">
                                <h2>How does it works</h2>
                                <h3 class="title_back_heading">The process</h3>
                                <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="contentttbox featuresicon">
                                        <div class="countingg"><span>1</span></div>
                                        <div class="headingcontentt">
                                            <h3>Search For The Equipment You Need
                                                <hr>
                                            </h3 style="color: #feb902; width: 50%; height: 2px;">
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="imageee">
                                        <img src="{{asset('frontend/images/laptop_image.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
            
                            <div class="row rowmargin">
                                <div class="lineimage ">
                                    <img src="./images/line.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="imageee">
                                        <img src="{{asset('frontend/images/laptop_image.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="contentttbox featuresicon">
                                        <div class="countingg"><span>2</span></div>
                                        <div class="headingcontentt">
                                            <h3>Search For The Equipment You Need
                                                <hr>
                                            </h3 style="color: #feb902; width: 50%; height: 2px;">
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="lineimage ">
                                    <img src="{{asset('frontend/images/bottom-line.png')}}" alt="">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="contentttbox featuresicon">
                                        <div class="countingg"><span>3</span></div>
                                        <div class="headingcontentt">
                                            <h3>Search For The Equipment You Need
                                                <hr>
                                            </h3 style="color: #feb902; width: 50%; height: 2px;">
                                            <p>Compellingly brand alternative communities whereas parallel deliverables. Objectively formulate business results without alternative relationships. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="imageee">
                                        <img src="{{asset('frontend/images/laptop_image.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </section>
                    <!-- how does it works section end here -->
            
            
                    <!-- News section start here-->
                    <section class="blogsection categorysection">
                        <div class="container">
                            <div class="main_title">
                                <h2>News</h2>
                                <h3 class="title_back_heading">Our Blogs</h3>
                                <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">
                            </div>
                            <div class="row firstcategorysection">
                                <div class="col-md-4">
                                    <div class="blogimgbox">
                                        <img class="img-thumbnail" src="{{asset('frontend/images/CM20220203-c5714-40e22.jpg')}}" alt="">
                                        <div class="category_titleheading">
                                            <h3><a href="">Walk Behind Roller</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem incidunt explicabo est quis expedita soluta.</p>
                                            <div class="morecategory mt-5 mb-3">
                                                <button type="button"><a class="custombutton" href="#">Read More</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blogimgbox">
                                        <img class="img-thumbnail" src="{{asset('frontend/images/CM20220203-c5714-40e22.jpg')}}" alt="">
                                        <div class="category_titleheading">
                                            <h3><a href="">Walk Behind Roller</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem incidunt explicabo est quis expedita soluta.</p>
                                            <div class="morecategory mt-5 mb-3">
                                                <button type="button"><a class="custombutton" href="#">Read More</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="blogimgbox">
                                        <img class="img-thumbnail" src="{{asset('frontend/images/CM20220203-c5714-40e22.jpg')}}" alt="">
                                        <div class="category_titleheading">
                                            <h3><a href="">Walk Behind Roller</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem incidunt explicabo est quis expedita soluta.</p>
                                            <div class="morecategory mt-5 mb-3">
                                                <button type="button"><a class="custombutton" href="#">Read More</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- News section end here -->
            
            
                    <!-- video section Start Here -->
                    <section class="videosection" id="video">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <iframe width="60%" height="500px" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="60%" height="500px" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="60%" height="500px" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
                    <!-- video section end here -->
</div>

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