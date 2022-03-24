@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Data Tables</h3>
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
                <h3 class="box-title">Main Machine</h3>
                <a href=" {{ route('submachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Sub Machine </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Main Category </th>
                              <th>Main Machine Name</th>
                              <th>Sub Machine Name</th>
                              <th>Sub Machine Price</th>
                              {{-- <th> Sub Machine Description </th> --}}
                              <th> Sub Machine Images </th>
                              <th> Sub Machine Video </th>
                              <th> Sub Machine Brochure </th>
                              <th> Sub Machine Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($SubMachineData as $key => $submachine)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td>
                                @php
                                    $nd = $submachine->main_category_id ;
                                    $main_cat_data = DB::table('main_categories')->where('id', $nd)->first() ;
                                    echo ucfirst($main_cat_data->category_name) ;
                                @endphp
                              </td>
                              <td> {{$submachine->main_machine_name}} </td>
                              <td> {{$submachine->sub_machine_name}} </td>
                              <td>  {{$submachine->sub_machine_price}} </td>
                              
                              <td>  <!--mutli imag starded here-->
                                  @php
                                      $imgData = explode('|' , $submachine->sub_machine_image)
                                  @endphp
                                  @foreach ($imgData as $item)
                                      <img src=" {{ URL::to($item) }} " style="width: 80px ; height:80px ; margin:2px"  alt="">
                                  @endforeach
                              </td>  
                              <!--multiple image end here-->

                              <td> <!--video started here-->
                                @php
                                $videoData = explode('|' , $submachine->sub_machine_video)
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

                              <td> <!--document here-->
                                @php
                                $DocumentData = explode('|' , $submachine->sub_machine_brochure)
                            @endphp
                            @foreach ($DocumentData as $item)
                            
                                <a href="{{ URL::to($item) }}" target="_blank" >
                                    
                                <div class="mailbox-attachment-info"  >
                                    <span class="mailbox-attachment-icon" style="background: rgba(221, 25, 25, 0.808)"><i class="fa fa-file-pdf-o"></i></span>
                                  <a href="{{ URL::to($item) }}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>  {{ $submachine->sub_machine_name.'.pdf' }} </a>
                                      <span class="mailbox-attachment-size" >
                                       Click to view
                                        <a href="{{ URL::to($item) }}" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                      </span>
                                </div>
                                </a>
                              
              
                            @endforeach
                              </td> 
                              <!--document end here-->

                              <td  class=" font-weight-bolder text-capitalize" style=" {{($submachine->sub_machine_status =='active')?'color:green':'color:red' }}" > {{ $submachine->sub_machine_status }} </td>

                              <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('submachine.edit',$submachine->id)}} ">Edit</a> 
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('submachine.delete',$submachine->id)}}" id="delete">Delete</a>

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
