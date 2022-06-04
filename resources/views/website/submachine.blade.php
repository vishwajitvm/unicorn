@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Home" ;
        $metakeywordname = "UnicornEqupment sub Machine" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment sub machine Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->


        <!--banner section start-->
        <section class="innerpagebanner d-flex align-items-center">

            <div class="container">
                <div class="mainheadertitle text-center">
                    <h1> {{ Str::upper($idData->machine_name) }} </h1>
                </div>
            </div>

        </section>
        <!--banner section end here-->

        <!--main ,achines section start here-->
        <section class="sub_machines">
            <div class="container">
                <div class="row d-flex align-items-center">
                    
                    @if($data->count() > 0)
                    @foreach ($data as $item)
                    <div class="col-md-4 wrapper_box">
                        <div class="submachinebox">
                            <div class="imag">
                                @php
                                $imgData = explode('|' , $item->sub_machine_image)
                            @endphp
                          
                            <img class="img-thumbnail" src=" {{ URL::to($imgData[0]) }} "   alt="">
                                {{-- <img class="img-thumbnail" src="{{ (!empty($item->sub_machine_image))?url('upload/user_images/'.$item->sub_machine_image):url('upload/no_image.jpg') }}" alt=""> --}}
                            </div>
                            <div class="category_titleheading">
                                <h3> <b> {{ Str::upper($item->sub_machine_name) }} </b> </h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veritatis ex sunt quibusdam totam et, perspiciatis possimus unde at dolores harum placeat suscipit tenetur sequi quos, eius voluptates? Ut, nostrum.</p> --}}
                            </div>
                            <div class="custom-buttonnn">
                                <a href=" {{ route('submachinedetail',$item->id) }} "> <strong>Explore Models</strong> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="alert alert-warning">
                        <strong>Sorry!</strong> No Model Found.
                    </div>      
                    @endif

                </div>
            </div>
        </section>
        <!--main ,achines section end here-->

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