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
                <h3 class="box-title">Credential Certificates</h3>
                <a href=" {{ route('managecredentials.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Credential Certicate </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Credential Name </th>
                              <th>Credential Image</th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $items)
                          <tr>
                              <td> {{$key+1}} </td>
                              
                              <td> {{$items->credential_name}} </td>
                              <td> 
                                  {{-- <img src=" {{'upload/user_images/'.$user->machine_image}} " alt="">  --}}
                                  <img  src="{{ (!empty($items->credential_image))?url('upload/gallery_images/'.$items->credential_image):url('upload/no_image.jpg') }}" alt="User Avatar" style="width: auto ; height: 210px;">

                              </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-danger" href=" {{Route('managecredentials.delete',$items->id)}}" id="delete">Delete</a>
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
