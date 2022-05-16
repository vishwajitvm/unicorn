@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Credential" ;
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
                    <h1 class="text-uppercase">Credentials</h1>
                </div>
            </div>
        </section>
        <!--banner section end here-->

                    <!-- News section start here-->
                    <section class="blogsection categorysection">
                        <div class="container">
                            {{-- <div class="main_title">
                                <h2>OUR Association </h2>
                                <h3 class="title_back_heading">OUR Association</h3>
                                <hr style="width: 6%; height: 4px; color: #feb902; opacity: 1;">
                            </div> --}}

                            <div class="row">
                                
                                @foreach ($data as $items)
                                <div class="col-md-3">
                                    <div class="image">
                                        <img class="image__img" src="{{ (!empty($items->credential_image))?url('upload/gallery_images/'.$items->credential_image):url('upload/no_image.jpg') }}" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title text-uppercase">  {{ $items->gallery_img_name  }} </div>
                                            <p class="image__description text-capitalize">
                                                {{ $items->credential_name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- News section end here -->


    
@endsection