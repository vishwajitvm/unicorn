@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Machine Parts</h3>
                <a href=" {{ route('manage-parts.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine Parts </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Main Machine Name</th>
                              <th>Sub Machine Name</th>
                              <th>Parts Name</th>
                              <th> Sub Machine Description </th>
                              <th> Sub Machine Images </th>
                              <th> Sub Machine Video </th>
                              <th> Sub Machine Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $itemdata)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$itemdata->parts_mainmachine}} </td>
                              <td> {{$itemdata->parts_submachine}} </td>
                              <td>  {{$itemdata->parts_name}} </td>
                              <td>  {{$itemdata->parts_description}} </td>

                              
                              <td>  <!--mutli imag starded here-->
                                  @php
                                      $imgData = explode('|' , $itemdata->parts_images)
                                  @endphp
                                  @foreach ($imgData as $item)
                                      <img src=" {{ URL::to($item) }} " style="width: 80px ; height:80px ; margin:2px"  alt="">
                                  @endforeach
                              </td>  
                              <!--multiple image end here-->

                              <td> <!--video started here-->
                                @php
                                $videoData = explode('|' , $itemdata->parts_videos)
                            @endphp
                            @foreach ($videoData as $item)
                                <video width="200" height="200" controls>
                                    <source src="{{ URL::to($item) }}" type="video/mp4">
                                    <source src="{{ URL::to($item) }}" type="video/ogg">
                                    Your browser does not support HTML video.
                                  </video>
                            @endforeach
                              </td>
                               <!-- video end here-->> 
                              <td  class=" font-weight-bolder text-capitalize" style=" {{($itemdata->parts_status =='active')?'color:green':'color:red' }}" > {{ $itemdata->parts_status }}
                              </td>

                              <td>
                                <a class="btn btn-info" href=" {{Route('submachine.edit',$itemdata->id)}} ">Edit</a> 
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('submachine.delete',$itemdata->id)}}" id="delete">Delete</a>

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
