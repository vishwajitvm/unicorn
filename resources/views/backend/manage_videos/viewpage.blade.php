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
                <h3 class="box-title">Gaallery Videos</h3>
                <a href=" {{ route('managevideos.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Gallery Videos </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Video Name </th>
                              <th>  Video</th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $items)
                          <tr>
                              <td> {{$key+1}} </td>
                              
                              <td> {{$items->video_name}} </td>
                              <td> 
                                  {{-- <img src=" {{'upload/user_images/'.$user->machine_image}} " alt="">  --}}
                                  <video width="200" height="200" controls>
                                    <source src="{{ URL('upload/manages_website_videos/'.$items->gallery_video) }}" type="video/mp4">
                                    <source src="{{ URL('upload/manages_website_videos/'.$items->gallery_video) }}" type="video/ogg">
                                    Your browser does not support HTML video.
                                  </video>

                              </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-danger" href=" {{Route('managevideos.delete',$items->id)}}" id="delete">Delete</a>
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
