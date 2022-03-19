@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">View Assigned Products</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">View All Assigned List</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Assigned Product List</h3>
                <a href=" {{ route('assignproduct.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Assign New Products </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Username </th>
                              <th>Main Machine</th>
                              <th> Sub Machine </th>
                              <th> Machine Quantity </th>
                              <th>Serial Number</th>
                              <th> warranty Start </th>
                              <th> warranty End </th>
                              <th> Logistics Partner </th>
                              <th> Tracking Number </th>
                              <th> Images </th>
                              <th> Videos </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($dataAssignProduct as $key => $ProductData)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$ProductData->username}} </td>
                              <td>
                                @php
                                $documentData = explode(",",$ProductData->assign_mainmachin_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td>

                              <td>
                                @php
                                $documentData = explode(",",$ProductData->assign_sub_machin_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td>

                              <td> {{$ProductData->assign_machin_quantitys}} </td>

                              <td>
                                @php
                                $documentData = explode(",",$ProductData->serial_number)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td>

                              <td> {{$ProductData->warranty_from}} </td>
                              <td> {{$ProductData->warranty_to}} </td>
                              {{-- <td> <a href="{{$ProductData->logisticpartner_link !=null?"$ProductData->logisticpartner_link":"#" }}" target="_blank" > {{$ProductData->logisticpartner}} </a> </td> --}}
                              <td>
                                  @if ($ProductData->logisticpartner_link != null)
                                      <a href="{{$ProductData->logisticpartner_link }}" class="btn btn-sm" style="background: #4285f4" target="_blank">Click Me</a>
                                  @else
                                  {{$ProductData->logisticpartner}}
                                  @endif
                              </td>
                              
                              <td> {{$ProductData->trackingnumber}} </td>

                              <td id="images" >  <!--mutli imag starded here-->
                                @php
                                    $imgData = explode('|' , $ProductData->assign_images)
                                @endphp
                                @foreach ($imgData as $item)
                                    <img src=" {{ $ProductData->assign_images!= null?URL::to($item):url('upload/no_image.jpg') }} " style="width: 80px ; height:80px ; margin:2px"  alt="">
                                @endforeach
                            </td>  
                            <!--multiple image end here-->

                            <style>
                                   #images{
                                     width: 100px ;
                                   }
                              #images img:hover{
                                  transform: scale(4);
                                  z-index: 1000;
                              }
                          </style>

                            <td> <!--video started here-->
                              @php
                              $videoData = explode('|' , $ProductData->assign_videos)
                              @endphp
                              @foreach ($videoData as $item)
                                  <video width="200" height="200" controls>
                                      <source src="{{ URL::to($item) }}" type="video/mp4">
                                      <source src="{{ URL::to($item) }}" type="video/ogg">
                                      Your browser does not support HTML video.
                                    </video>
                              @endforeach
                            </td>
                             <!-- video end here-->

                              
                             <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('assignproduct.edit',$ProductData->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('assignproduct.delete',$ProductData->id)}}" id="delete">Delete</a>

                              </td>
                          </tr>
                        @endforeach

                      </tbody>

                      {{-- <tfoot>
                          <tr>
                              <th>SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </tfoot> --}}

                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection
