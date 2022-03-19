@extends('users_dashboard.user_master')
@section('user')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">View All Your Requested Equipments</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">View Main Machine</li>
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
                <h3 class="box-title">Requested Machine View</h3>
                <a href=" {{ route('userproducts.addrequest') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Username</th>
                              <th>Main machine Name</th>
                              <th>Sub Machine Name</th>
                              <th> Quantity </th>
                              <th> Mobile Number </th>
                              <th> Messgae </th>
                              <th> Request Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($productData as $key => $row)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$row->Product_username}} </td>
                              <td> {{ $row->product_main_machine }} </td>
                              <td> {{$row->product_sub_machine}} </td>
                              <td> {{ $row->product_quantity }} </td>
                              <td> {{ $row->phone_number }} </td>
                              <td> {{ $row->product_message }} </td>
                              <td>
                                @if ($row->request_status == null)
                                <a class="btn  btn-sm btn-block" style="background: rgb(211, 174, 174)" > <b>No Response</b> </a>
                                @elseif($row->request_status == "closed" )
                                <a class="btn  btn-sm btn-block" style="background: rgb(14, 155, 56)"> <b>Deal Closed</b> </a>
                                @else
                                <a class="btn  btn-sm btn-block btn-danger" > <b>Denied</b> </a>

                                @endif
                              </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('userproducts.edit',$row->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('userproducts.delete',$row->id)}}" id="delete">Delete</a>

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
