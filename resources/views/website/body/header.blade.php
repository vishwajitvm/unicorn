@php
    // $navbardata = DB::table('mainmachines')->get() ;
    $navbardata = DB::table('main_categories')->get()

@endphp

        
<!--header started -->
<div class="wrapper">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="{{asset('frontend/assets/img/logo (1).png')}}" alt="Unicorn Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ Route('aboutus') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Who we are
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a class="dropdown-item" href="{{ Route('aboutus') }}">About us</a></li>
                            <li><a class="dropdown-item " href="{{route('our-team')}}">Our Team</a></li>


                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="machine-details.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Equipment
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

                            @foreach ($navbardata as $item)
                                <li><a class="dropdown-item navbarcatData" href="{{ route('main-machine',$item->id) }}">{{ $item->category_name }}</a>  </li>
                            @endforeach
                            
                            {{-- <li><a class="dropdown-item" href="main_machine.html">main_machine</a></li>
                            <li><a class="dropdown-item " href="sub_machine.html">main_machine</a></li> --}}

                            {{-- <li class="dropdown-submenu">
                                <a class="dropdown-item" tabindex="-1" href="#">Hover me for more options</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"><a tabindex="-1" href="#">Second level</a></li>

                                    <li class="dropdown-item"><a href="#">Second level</a></li>
                                    <li class="dropdown-item"><a href="#">Second level</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('credentials') }}">Crendintals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
                    </li>

                </ul>
                <div class="d-flex form">

                    <button class="btn btn-outline-success " type="button">
                        <a href="{{ route('loginpage') }}">
                            @php
                                if(!Auth::user()) {
                                    echo "Login" ;
                                }
                                else{
                                    $id = Auth::user()->name ;
                                    echo "$id" ;
                                }
                            @endphp
                        </a>
                    </button>
                    <button class="btn btn-outline-success" type="submit">
                        <a href=" {{ route('findealer') }} ">Find Dealer</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- header closed -->

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".navbarcatData").hover(function() {
            let catData = $(this).closest('a').text() ;
            jQuery.ajax({
                url: '/ajax-navdata',
                type: 'post',
                data: 'catData='+catData+'&_token={{ csrf_token() }}',
                dataType:"json",
                success: function(result){
                    // jQuery('#main_machine_name').html(result) ;
                    console.log(result) ;
                }
            })
        })
    })
</script>







