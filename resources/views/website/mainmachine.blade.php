@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Home" ;
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
                <h1>Main <span style="color:white ;">Machine</span> </h1>
            </div>
        </div>

    </section>

    <!--banner section end here-->

    <!--main ,achines section start here-->

        <!--main ,achines section start here-->
        <section class="main_machines">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    
                    @foreach ($data as $item)
                    <div class="col-md-3">
                        <div class="categoryimgbox mainmachineinner"><img class="img-thumbnail" src="{{ (!empty($item->machine_image))?url('upload/user_images/'.$item->machine_image):url('upload/no_image.jpg') }}" alt=""></div>
                        <div class="category_titleheading">
                            <h3><a href="{{ route('submachine',$item->id) }}"> <b> {{ Str::upper($item->machine_name) }} </b> </a></h3>
                        </div>
                    </div>    
                    @endforeach

                </div>
            </div>
        </section>
        <!--main ,achines section end here-->

    <!--main ,achines section end here-->
@endsection