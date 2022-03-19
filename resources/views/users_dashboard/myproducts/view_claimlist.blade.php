@extends('users_dashboard.user_master')
@section('user')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Invoice Tables</h3>
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
                <h3 class="box-title">Invoices</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> mainmachine </th>
                              <th> submachine </th>
                              <th> serialnumber </th>
                              <th> warranty_from </th>
                              <th> warranty_to </th>
                              <th> message </th>
                              <th> userphonenumber2 </th> 
                              <th > claimimages </th>
                              <th> claimvideos </th>
                              <th> request_status </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($claimData as $key => $product) <!--View all your products data -->
                          <tr>
                              <td> {{$key+1}} </td><!--end-->

                              <td>  {{ $product->mainmachine}} </td>
                              <td>  {{$product->submachine}}  </td>
                              <td> {{ $product->serialnumber }} </td>
                              <td> {{ $product->warranty_from }} </td>
                              <td> {{ $product->warranty_to }} </td>
                              <td> {{ $product->message }} </td>
                              <td> {{ $product->userphonenumber2 }} </td>

                              <td>  <!--mutli imag starded here-->
                                @php
                                    $imgData = explode('|' , $product->claimimages)
                                @endphp
                                @foreach ($imgData as $item)
                                    <img class="imgzoom" src=" {{ URL::to($item) }} "   alt="">
                                @endforeach
                            </td>
                            
                            <style>
                                .imgzoom{ width: 150px ; height:150px ; margin:2px ; transition: transform ease-out 0.8s; border: 1px solid white }
                                .imgzoom:hover{ transform: scale(2.5); border: 5px solid white }
                            </style>

                            <td> <!--video started here-->
                                @php
                                $videoData = explode('|' , $product->claimvideos)
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
                                
                                @if ($product->request_status =="approved")
                                <button type="button" class="btn btn-rounded btn-md btn-primary  m-5 btn-block">Approved</button>

                                @elseif($product->request_status == "deny")
                                <button type="button" class="btn btn-rounded btn-md btn-danger m-5 btn-block">Denyed</button>

                                @else 
                                <button type="button" class="btn btn-rounded btn-md btn-secondary m-5 btn-block">no response </button>

                                @endif
                                
                               </td>



                            {{-- <td>
                                <a class="btn btn-info mt-2 mb-2" href=" {{Route('myproduct.claiminsurance',$product->id)}} ">Claim Inchurance</a> 
                                &nbsp;&nbsp;
                            </td> --}}

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
