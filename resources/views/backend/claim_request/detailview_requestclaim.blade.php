 @extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Insurance Claim request</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">insurance claim</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

            <div class="col-12 col-lg-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title"> Basic Data </h4>
                    <a href=" {{ route('claimrequest.approve' ,$dataEdit->id ) }} " class="btn btn-rounded btn-success md-5" style="float: right"> Click to approve or dissaprove </a>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            
                            <tbody>
                              <tr>
                                <th scope="row"> Username</th>
                                <td> {{ $dataEdit->username }} </td>
                              </tr>

                              <tr>
                                <th scope="row" width="30%"> useremail</th>
                                <td> {{ $dataEdit->useremail }} </td>
                              </tr>

                              <tr>
                                <th scope="row" width="30%"> userphonenumber1</th>
                                <td> {{ $dataEdit->userphonenumber1 }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> userphonenumber2</th>
                                <td> {{ $dataEdit->userphonenumber2 }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> useraddress</th>
                                <td> {{ $dataEdit->useraddress }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> mainmachine</th>
                                <td> {{ $dataEdit->mainmachine }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> submachine</th>
                                <td> {{ $dataEdit->submachine }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> serialnumber</th>
                                <td> {{ $dataEdit->serialnumber }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> warranty_from</th>
                                <td> {{ $dataEdit->warranty_from }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> warranty_to</th>
                                <td> {{ $dataEdit->warranty_to }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> message</th>
                                <td> {{ $dataEdit->message }} </td>
                              </tr>


                              <tr>
                                <th scope="row" width="30%"> request_status </th>
                                <td> {{ $dataEdit->request_status }} </td>
                              </tr>

                              
                            </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--col 1 end here -->


            <div class="row">
                <style>
                    .imgzoom{ width: 150px ; height:150px ; margin:2px ; transition: transform ease-out 0.8s; border: 1px solid white }
                    .imgzoom:hover{ transform: scale(2.5); border: 5px solid white }
                </style>
            <!--col 2 start here-->
            <div class="col-12 col-lg-6" >
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title"> images for the claim </h4>
                  </div>
                  			  <!-- Default box -->
			  <div class="box bg-transparent no-shadow b-0">
				<div class="box-body">
					<div id="gallery-content">
                     @php
                     $imgData = explode('|' , $dataEdit->claimimages)
                     @endphp
               @foreach ($imgData as $item)
                 <div id="gallery-content-center">
                     <a  href="{{ URL::to($item) }}"  data-toggle="lightbox" data-gallery="multiimages" data-title="$dataEdit->username }} claim with these images "><img src=" {{ URL::to($item) }} "   alt="" class="all studio imgzoom">  </a>
					      </div>
               @endforeach
					</div>
					</div>
				</div>

            

			
                </div>
                <!-- /.box -->
            </div>

                                    <!--col 2 start here-->
            <div class="col-12 col-lg-6">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title"> Video For Claim </h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    @php
                    $videoData = explode('|' , $dataEdit->claimvideos)
                @endphp
                @foreach ($videoData as $item)
                    <video width="300" height="300"  controls>
                        <source src="{{ URL::to($item) }}" type="video/mp4">
                        <source src="{{ URL::to($item) }}" type="video/ogg">
                        Your browser does not support HTML video.
                      </video>
                @endforeach
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>


            </div>

            
            
        </div>
    


        </div>

    
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
