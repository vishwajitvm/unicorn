@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title =  "$data->sub_machine_name"  ;
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
                        <h1> {{ $data->main_machine_name }} </h1>
                    </div>
                </div>
            </section>

                    <!-- sub-machine details Start Here -->
        <section class="submachinedetails">
            <div class="container">
                <div class="submachineheading">
                    <h3> {{ $data->sub_machine_name }} </h3>
                </div>
                <div class="row">
                    <div class="col-md-7 mt-5">
                        <div class="submachineprice">
                            <h4>Approx Price: <span>Rs {{ $data->sub_machine_price }}</span> / Piece</h4>
                            <a href="#" class="ml-5">Get Latest Price</a>
                        </div>
                        {{-- <div class="tabledata mt-5">
                            <table>
                                <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                    <th>Country</th>
                                </tr>
                                <tr>
                                    <td>Alfreds Futterkiste</td>
                                    <td>Maria Anders</td>
                                    <td>Germany</td>
                                </tr>
                                <tr>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>Francisco Chang</td>
                                    <td>Mexico</td>
                                </tr>
                                <tr>
                                    <td>Ernst Handel</td>
                                    <td>Roland Mendel</td>
                                    <td>Austria</td>
                                </tr>
                                <tr>
                                    <td>Island Trading</td>
                                    <td>Helen Bennett</td>
                                    <td>UK</td>
                                </tr>
                                <tr>
                                    <td>Laughing Bacchus Winecellars</td>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                </tr>
                                <tr>
                                    <td>Magazzini Alimentari Riuniti</td>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                </tr>
                            </table>
                        </div>
                        <div class="submachinedescription  mt-5 mb-5">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat esse ut, quas ipsum quo magnam? Fugiat excepturi ut alias officia laudantium reiciendis, quisquam laborum non distinctio voluptates inventore sunt rem.
                            </p>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorum labore, maiores dolor repudiandae nemo. Ipsa dolores, voluptatum impedit distinctio repudiandae, exercitationem corrupti repellendus atque sapiente
                                expedita error dolore reprehenderit.</p>
                        </div> --}}

                        {!! $data->sub_machine_description !!}
                        <a class="custombutton intrestedbtn mt-5 ml-0" href="#">Yes I am Intrested</a>
                    </div>
                    <div class="col-md-5 mt-5">
                        <div id="photo-view-container">
                            <div id="photo-display"></div>
                            <div id="commentary"></div>
                            <div id="photo-container-holder">
                                <div id="photo-container" style="margin-left:0;">
                                    {{-- <div class="photo-holder"><img src="./style/image/main_banner_1.jpg" onclick=viewPhoto(this) class="photo-item" alt="Lorem"></div> --}}
                                    <!--exp zone-->
                                    @php
                                        $imgData = explode('|' , $data->sub_machine_image)
                                    @endphp
                                    @foreach ($imgData as $item)
                                        {{-- <img src="  " class="all studio isotope-item" style="width: 300px ; height: 300px ; margin:10px ; object-fit: cover; border:5px solid white ; "  alt=""> --}}
                                        <div class="photo-holder"><img src="{{ URL::to($item) }}" onclick=viewPhoto(this) class="photo-item" alt="{{$data->sub_machine_name!=null?$data->sub_machine_name:''}}" style=" object-fit:contain; border:5px solid white ; "></div>

                                    @endforeach
                                    <!--exp zone end-->
                                    <!-- <div class="photo-holder"><img src="https://webdesign-assistant.com/images/dummy/photo3.jpg" onclick=viewPhoto(this) class="photo-item" alt="Lorem"></div> -->
                                </div>
                            </div>
                            <!-- <img id="left" src="https://webdesign-assistant.com/images/dummy/left.png" onclick=leftRight(this) alt="">
                            <img id="right" src="https://webdesign-assistant.com/images/dummy/right.png" onclick=leftRight(this) alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sub-machine details end here -->

        <script>
            window.onload = function() {
                // load thumbnails
                photo = document.querySelectorAll('.photo-item');
                photoLength = photo.length;
                for (i = 0; i < photoLength; i++) {
                    photoW = photo[i].naturalWidth;
                    photoH = photo[i].naturalHeight;
                    if (photoW >= photoH) {
                        photo[i].style.height = '100px';
                    } else {
                        photo[i].style.width = '100px';
                    }
                }
                conentW = photoLength * 115;
                document.getElementById('photo-container').style.width = conentW + 'px';
    
                // load first photo
                firstPhoto = document.querySelectorAll('.photo-item');
                firstPhoto = firstPhoto[0];
                firstPhotoUrl = firstPhoto.src;
                firstPhotoAlt = firstPhoto.alt;
                document.getElementById('photo-display').innerHTML = '<img src="' + firstPhotoUrl + '" id="selected-photo" alt="">';
                document.getElementById('commentary').innerHTML = firstPhotoAlt;
            }
        </script>
        <script>
            marginL = 0;
    
            function leftRight(obj) {
                spaceLeft = document.getElementById('photo-container').style.marginLeft;
                spaceLeft = spaceLeft.replace('px', null);
                spaceLeft = parseInt(spaceLeft);
                step = 300;
                totalLength = document.querySelectorAll('.photo-item').length;
                totalLength *= -115;
                objId = obj.id;
                if (objId == 'left') {
                    if (spaceLeft >= -step) {
                        marginL = 0;
                    } else {
                        marginL += step;
                    }
                }
                if (objId == 'right') {
                    if (spaceLeft <= totalLength + 500 + step) {
                        marginL = totalLength + 500;
                    } else {
                        marginL -= step;
                    }
                }
                document.getElementById('photo-container').style.marginLeft = marginL + 'px';
            }
    
            function viewPhoto(obj) {
                objUrl = obj.src;
                objAlt = obj.alt;
                document.getElementById('photo-display').innerHTML = '<img src="' + objUrl + '" id="selected-photo" alt="">';
                document.getElementById('commentary').innerHTML = objAlt;
                console.log(objAlt);
            }
        </script>




@endsection