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
                        <h1 class="text-uppercase text-light"> {{ $data->main_machine_name }} </h1>
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
                            {{-- <a href="#" class="ml-5">Get Latest Price</a> --}}
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Get Latest Price
                              </a>

                            <!--model start here-->
                            <!--model start here-->                            
                            <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog bg-warning rounded border border-dark" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Send Your Request</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body px-4">
                                      <form action="{{ route('popup-request-store') }}" method="POST">
                                          @csrf
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label"> <span class="text-danger">*</span>Your Name:</label>
                                          <input type="text" class="form-control" name="request_username"  id="recipient-name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Your Email:</label>
                                            <input type="text" class="form-control" name="request_useremail" id="recipient-name">
                                          </div>

                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label"><span class="text-danger">*</span>Your Phone Number:</label>
                                            <input type="text" class="form-control" name="request_userphone_number" id="recipient-name" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Machine Name:</label>
                                            <input type="text" class="form-control" name="request_machine" value="{{ $data->main_machine_name }}" id="recipient-name" readonly>
                                          </div>

                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Sub Machine Name:</label>
                                            <input type="text" class="form-control" name="request_submachine" value="{{ $data->sub_machine_name }}" id="recipient-name" readonly>
                                          </div>

                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Quantity</label>
                                            <input type="text" class="form-control" name="request_quantity" id="recipient-name">
                                          </div>

                                        <div class="form-group">
                                          <label for="message-text" class="col-form-label">Message:</label>
                                          <textarea class="form-control" name="request_message" id="message-text"></textarea>
                                        </div> <br>

                                        <input type="number" class="form-control" name="request_submachine_id" value="{{$data->id}}" style="display: none">


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send message</button>
                                          </div>
                                      </form>
                                    </div>
                                    {{-- <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Send message</button>
                                    </div> --}}
                                  </div>
                                </div>
                              </div>
                            <!--model end here-->
                            <!--model end here-->
                            

                        </div>


                        {!! $data->sub_machine_description !!}
                        {{-- <a class="custombutton intrestedbtn mt-5 ml-0" href="#">Yes I am Intrested</a> --}}
                        <a type="button" class="custombutton intrestedbtn mt-5 mx-2" data-toggle="modal" data-target="#exampleModalCenter">
                            Yes I am Intrested
                          </a>

                        <a type="button" class="custombutton intrestedbtn mt-5 ml-0" target="_blank" href="{{ URL::to($data->sub_machine_brochure) }}">Download Brocher</a>

                    </div>
                    <div class="col-md-5 mt-5">
                        <div class="photo-view-container">
                            <h3> {{$data->sub_machine_name  }} Images</h3>
                            <div id="photo-display"></div>
                            <div id="commentary"></div>
                            <div id="photo-container-holder">
                                <div id="photo-container" style="margin-left:0;">
                                    <!--exp zone-->
                                    @php
                                        $imgData = explode('|' , $data->sub_machine_image)
                                    @endphp
                                    @foreach ($imgData as $item)
                                        <div class="photo-holder"><img src="{{ URL::to($item) }}"  onclick=viewPhoto(this) class="photo-item" alt="{{$data->sub_machine_name!=null?$data->sub_machine_name:''}}" style=" object-fit:contain; border:5px solid white ; "></div>

                                    @endforeach
                                    <!--exp zone end-->
                                </div>
                            </div>
                        </div>

                        <!--videos-->
                        <div class="photo-view-container mt-5"  style="margin-top: 100px !important;">
                            <h3> {{ $data->sub_machine_name }} Videos</h3>
                            <div id="carousel-example" class="carousel slide">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                    @php
                                        $videodata = explode('|' , $data->sub_machine_video)
                                    @endphp
                                <div class="carousel-inner">
                                    {{-- <div class="carousel-item active">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video width="100%" controls autoplay muted>
                                                <source src="/images/movie.mp4" type="video/mp4">
                                              </video>
                                        </div>
                                    </div> --}}
                                    {{-- EXPERIMENTAL ZONE STARTED --}}
                                    {{-- @foreach ($videodata as $key=>$itemss)
                                    <div class="carousel-item active"  >
                                        <div class="embed-responsive embed-responsive-16by9 bg-dark">
                                            <video width="200px" class="bg-dark" style="margin:auto" controls autoplay muted>
                                                <source src="{{ URL::to($itemss) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>

                                   
                                    @endforeach --}}

                                    @foreach ($videodata as $key=>$itemss)
                                        @php
                                            $videoDatas = explode('|' , $itemss)
                                        @endphp

                                            <!--active-->
                                            <div class="carousel-item active">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <video width="100%" controls autoplay muted>
                                                        <source src="{{ URL::to($videoDatas[0]) }}" type="video/mp4">
                                                      </video>
                                                </div>
                                            </div>

                                            @for ($i = 1; $i < count($videoDatas); $i++)
                                            <div class="carousel-item">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <video width="100%" controls autoplay muted>
                                                        <source src="{{ URL::to($videoDatas[$i]) }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                            @endfor
                                   
                                    @endforeach
                                    {{-- EXPERIMENTAL ZONE ENDED --}}

                                    

                                </div>
                                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!--video end-->
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