@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">View All Service Request</h3>
                {{-- <a href=" {{ route('submachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Sub Machine </a> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Username</th>
                              <th>User Email</th>
                              <th> User Phone Number </th>
                              <th> Adress </th>
                              <th> Photos </th>
                              <th> Videos </th>
                              <th> Invoice </th>
                              {{-- <th width="15%">Action</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $row)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$row->service_username}} </td>
                              <td> {{$row->service_useremail}} </td>
                              <td>  {{$row->service_phonenumber}} </td>
                              <td> {{ $row->service_address }} </td>
                              
                              <td class="imageclick">  <!--mutli imag starded here-->
                                  @php
                                      $imgData = explode('|' , $row->service_photos)
                                  @endphp
                                  @foreach ($imgData as $item)
                                      <img src=" {{ URL::to($item) }}" style="width: 200px ; height:200px ; margin:2px"   alt="">
                                  @endforeach
                              </td>  

                              {{-- <style>
                                .imageclick img:hover {
                                  /* resize: both !important;
                                  overflow: auto !important; */
                                  width: 400px !important ;
                                  height: 400px !important ;
                                  object-fit: cover !important ;
                                }
                              </style> --}}
                              <!--multiple image end here-->

                              <td> <!--video started here-->
                                @php
                                $videoData = explode('|' , $row->service_videos)
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
                                $DocumentData = explode('|' , $row->service_invoice)
                            @endphp
                            @foreach ($DocumentData as $item)
                            
                                <a href="{{ URL::to($item) }}" target="_blank" >
                                    
                                <div class="mailbox-attachment-info"  >
                                    <span class="mailbox-attachment-icon" style="background: rgba(221, 25, 25, 0.808)"><i class="fa fa-file-pdf-o"></i></span>
                                  <a href="{{ URL::to($item) }}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>  {{ $row->service_username.'.pdf' }} </a>
                                      <span class="mailbox-attachment-size" >
                                       Click to view
                                        <a href="{{ URL::to($item) }}" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                      </span>
                                </div>
                                </a>             
                            @endforeach
                              </td> 
                              <!--document end here-->
                              {{-- <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('submachine.edit',$row->id)}} ">Edit</a> 
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('submachine.delete',$row->id)}}" id="delete">Delete</a>

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
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


@endsection
