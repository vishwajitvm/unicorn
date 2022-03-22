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
                <h3 class="box-title">View All Main Categories For Machines</h3>
                <a href=" {{ route('maincategory.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Main Categories </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>category Name</th>
                              <th>category Description</th>
                              <th>category Image</th>
                              <th> category Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $row)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$row->category_name}} </td>
                              <td> {{$row->category_description}} </td>
                              <td>  <!--mutli imag starded here-->
                                @php
                                    $cat_images = explode('|' , $row->category_images)
                                @endphp
                                @foreach ($cat_images as $items)
                                    <img src=" {{ URL::to($items) }} " style="width: 80px ; height:80px ; margin:2px"  alt="">
                                @endforeach
                            </td>  
                            <!--multiple image end here-->
                              <td  class="  font-weight-bolder text-capitalize" style="{{($row->category_status =='active')?'color:green':'color:red' }} ; font-size:18px" > {{ $row->category_status }} </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('maincategory.edit',$row->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('maincategory.delete',$row->id)}}" id="delete">Delete</a>
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
