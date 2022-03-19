@extends('users_dashboard.user_master')
@section('user')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">My Products Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                <h3 class="box-title">My Products</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Main machine </th>
                              <th> Sub machine  </th>
                              <th> Quantity </th>
                              <th> Serial no </th>
                              <th> Warranty from </th>
                              <th> Warranty to </th>
                              <th> Trackingnumber </th>
                              <th> Logisticpartner </th>
                              <th> Images  </th>
                              <th> Videos </th>

                              {{-- <th> invoice_status </th> --}}
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($datamyproducts as $key => $product) <!--View all your products data -->
                          <tr>
                              <td> {{$key+1}} </td><!--end-->

                              <td>
                                @php
                                $documentData = explode(",",$product->assign_mainmachin_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td> <!--end-->

                              <td>
                                @php
                                $documentData = explode(",",$product->assign_sub_machin_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td><!--end-->


                              <td>  {{ $product->assign_machin_quantitys}} </td>

                              <td>
                                @php
                                $documentData = explode(",",$product->serial_number)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td><!--end-->

                              <td>  {{$product->warranty_from}}  </td>
                              <td>  {{$product->warranty_to}} </td>

                              <td> {{ $product->trackingnumber }} </td>


                              <td>
                                @if ($product->logisticpartner_link != null)
                                    <a href="{{$product->logisticpartner_link }}" class="btn btn-mm" style="background: #4285f4" target="_blank"> Track  </a>
                                @else
                                {{$product->logisticpartner}}
                                @endif
                            </td>

                            <!--mutli imag starded here-->
                            <td id="images" >  
                              @php
                                  $imgData = explode('|' , $product->assign_images)
                              @endphp
                              @foreach ($imgData as $item)
                                  <img src=" {{ $product->assign_images!= null?URL::to($item):url('upload/no_image.jpg') }} " style="width: 100px ; height:100px ; margin:2px"  alt="">
                              @endforeach
                          </td> 
                          <style>
                            #images{
                              width: 100px ;
                            }
                              #images img:hover{
                                  transform: scale(4);
                                  z-index: 1000;
                              }
                          </style> 
                          <!--multiple image end here-->



                          <td> <!--video started here-->
                            @php
                            $videoData = explode('|' , $product->assign_videos)
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
                                <a class="btn btn-info mt-2 mb-2" href=" {{Route('myproduct.claiminsurance',$product->id)}} ">Claim Inchurance</a> 
                                &nbsp;&nbsp;
                                {{-- <a class="btn btn-danger" href=" {{Route('buyerdetails.delete',$invoiceload->id)}}" id="delete">Delete</a> --}}
                            </td>

                          </tr>
                        @endforeach

                      </tbody>


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
