@php
    // $navbardata = DB::table('mainmachines')->get() ;
    $navbardata = DB::table('main_categories')->get()

@endphp

        <!--main header start-->
        {{-- <header class="main_header">
            <section class="main_nav">
                <div class="container m-0 p-0">
                    <!--header container-fluid start-->
                    <nav class="navbar navbar-expand-lg">
                        <!--navbar start-->
                        <div class="container-fluid navalign">
                            <div class="main_logo">
                                <div>
                                    <a class="navbar-brand" href="/">
                                        <img src="{{asset('frontend/images/logo.png')}}" alt="Unicorn Logo">
                                    </a>
                                </div>
                                <!-- <div class="contact-details">
                                    <h3>Need help? Talk to an Expert<br><span>+91 987654321</span></h3>
                                </div> -->
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                            <div class="menu-align">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="{{route('aboutus')}}">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Product
                                </a> -->
                                            <a class="nav-link active" href="#">Equipments 
                                                    <i class="fa fa-caret-down"></i></a>
                                            <div class="dropdown-content">
                                                <div class="main_heading_">
                                                    <a href="">
                                                        <h4>Mega Menu</h4>
                                                    </a>
                                                </div>

                                                <div class="megamenucontent d-flex">
                                                    <div class="row">
                                                        <div class="col-md-7 megamenulinks">
                                                            <div class="row">
                                                                <div class="col-md-12 d-grid">
                                                                    @foreach ($navbardata as $navdata)
                                                                    <a href="{{ route('main-machine',$navdata->id) }}" class="text-uppercase navbarcatData"> <b>{{ $navdata->category_name}}</b> </a>  
                                                                    @endforeach

                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 productslist">
                                                            <div class="productsss">
                                                                <div class="productsdesc">
                                                                    <img src="{{asset('frontend/images/trophy.png')}}" alt="">
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo necessitatibus quaerat facere laboriosam .</p>
                                                                </div>
                                                            </div>

                                                            <div class="productsss">
                                                                <div class="productsdescs">
                                                                    <img src="{{asset('frontend/images/trophy.png')}}" alt="">
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo necessitatibus quaerat facere laboriosam .</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="{{ route('services') }}"> Services</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="{{ route('services') }}"> Credentials </a>
                                        </li>

                                        
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href=" {{ route('contact-us') }} ">Contact</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="call-login-button d-flex">
                                <!--<button type="button" class="request-button"><a href="">Dashboard</a></button> -->
                                <button type="button" class="request-button"><a href="{{ route('loginpage') }}">
                                    @php
                                        if(!Auth::user()) {
                                            echo "Login to Dashboard" ;
                                        }
                                        else{
                                            $id = Auth::user()->name ;
                                            echo "$id dashboard" ;
                                        }
                                    @endphp
                                </a></button>

                                <button type="button" class="request-button"><a href=" {{ route('findealer') }} ">Find a Dealer</a></button>
                            </div>
                        </div>
                    </nav>
                    <!--navbar end-->
                </div>
                <!--header container-fluid end-->
            </section>


        </header> --}}
        <!--main header end-->
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"> <img src="{{asset('frontend/images/logo.png')}}" alt="Unicorn Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown text-uppercase">
                                <a class="nav-link dropdown-toggle" href="machine-details.html" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Who we are
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-uppercase" href="{{route('aboutus')}}"> <b>About Us</b> </a></li>
                                    <li><a class="dropdown-item text-uppercase" href="{{route('our-team')}}"><b>Our Team</b></a></li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown text-uppercase">
                                <a class="nav-link dropdown-toggle" href="machine-details.html" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Equipments
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($navbardata as $navdata)
                                        <li><a class="dropdown-item text-uppercase navbarcatData" href="{{ route('main-machine',$navdata->id) }}"> <b>{{ $navdata->category_name}}</b> </a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item text-uppercase">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>

                            <li class="nav-item text-uppercase">
                                <a class="nav-link" href="{{ route('credentials') }}">Credentials</a>
                            </li> 


                            <li class="nav-item text-uppercase">
                                <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
                            </li>

                           
                        </ul>
                        <form class="d-flex">
                           
                            <button class="btn btn-outline-success text-uppercase" type="button">
                                <a href="{{ route('loginpage') }}">
                                    @php
                                        if(!Auth::user()) {
                                            echo "Login to Dashboard" ;
                                        }
                                        else{
                                            $id = Auth::user()->name ;
                                            echo "$id dashboard" ;
                                        }
                                    @endphp
                                </a>
                            </button>
                            <button class="btn btn-outline-success text-uppercase"  type="button"><a href=" {{ route('findealer') }} ">Find a Dealer</a></button>
                        </form>
                    </div>
                </div>
            </nav>

        </header>


        {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $(".navbarcatData").hover(function() {
                    let catData = $(this).closest('a').text() ;
                    console.warn(catData);
                    jQuery.ajax({
                        type: 'post',
                        url:  'ajax_navdata' ,
                        data: 'catData='+catData+'&_token={{ csrf_token() }}',
                        // dataType: "json",
                        success: function (response) {
                            console.warn(response);
                        }
                    });
                })
            })
        </script> --}}
