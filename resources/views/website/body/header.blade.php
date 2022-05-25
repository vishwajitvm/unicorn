@php
    // $navbardata = DB::table('mainmachines')->get() ;
    $navbardata = DB::table('main_categories')->get()

@endphp

        
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
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
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

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
        <script>
            $(document).ready(function() {
                $(".navbarcatData").hover(function() {
                    let catData = $(this).closest('a').text() ;
                    console.log(catData);
                    Jquery.ajax({
                        type: 'POST',
                        url:  '/ajax_navdata' ,
                        data: 'catData='+catData+'&_token={{ csrf_token() }}',
                        success: function (response) {
                            console.warn(response)
                        }
                    })
                })
            })
        </script>



