@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">View All Equipment Request From Users</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page"> Equipment Request </li>
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
                <h3 class="box-title"> Equipment Request </h3>
                <a href=" {{ route('mainmachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>  username </th>
                              <th> useremail </th>
                              <th> phone number </th>

                              <th width="25%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($userData as $key => $row)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$row->name}} </td>
                              <td> {{ $row->email }} </td>
                              <td> {{ $row->mobile }} </td>
                              
                              <td>
                                <!--button here-->
                                <a class="btn btn-info btn-block" href=" {{Route('buyerdetails.requestview',$row->id)}} ">View all Request</a>
                                {{-- &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('buyerdetails.requestdelete',$row->id)}}" id="delete">Delete</a> --}}

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
