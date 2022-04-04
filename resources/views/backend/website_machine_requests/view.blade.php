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
                <h3 class="box-title">View All Machine Request From Website </h3>
                {{-- <a href=" {{ route('maincategory.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Main Categories </a> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Username</th>
                              <th>Useremail</th>
                              <th> Phone Number </th>
                              <th> Main Machine </th>
                              <th> Model </th>
                              <th> Quantity </th>
                              <th> Message </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $row)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$row->request_username}} </td>
                              <td> {{$row->request_useremail}} </td>
                              <td> <a href="tel:{{$row->request_userphone_number}}">{{$row->request_userphone_number}}</a> </td>
                              <td> {{$row->request_machine}} </td>
                              <td> {{$row->request_submachine}} </td>
                              <td> {{$row->request_quantity}} </td>
                              <td> {{$row->request_message}} </td>                             
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
