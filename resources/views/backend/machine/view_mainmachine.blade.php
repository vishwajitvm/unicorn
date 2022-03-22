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
                <h3 class="box-title">Main Machine</h3>
                <a href=" {{ route('mainmachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> Main category </th>
                              <th>Machine Name</th>
                              <th>Machine Average Price</th>
                              <th>Machine Description</th>
                              <th>Machine Image</th>
                              <th> Machine Status </th>
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($mainMachineData as $key => $mainmachine)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td>
                                @php
                                    $nd = $mainmachine->main_cat_id ;
                                    $main_cat_data = DB::table('main_categories')->where('id', $nd)->first() ;
                                    echo $main_cat_data->category_name ;
                                @endphp
                              </td>
                              <td> {{$mainmachine->machine_name}} </td>
                              <td> {{ $mainmachine->machine_price }} </td>
                              <td> {{$mainmachine->machine_description}} </td>
                              <td> 
                                  {{-- <img src=" {{'upload/user_images/'.$user->machine_image}} " alt="">  --}}
                                  <img  src="{{ (!empty($mainmachine->machine_image))?url('upload/user_images/'.$mainmachine->machine_image):url('upload/no_image.jpg') }}" alt="User Avatar" style="width: auto ; height: 210px;">

                              </td>
                              <td  class="  font-weight-bolder text-capitalize" style="{{($mainmachine->machine_status =='active')?'color:green':'color:red' }} ; font-size:18px" > {{ $mainmachine->machine_status }} </td>
                              <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('mainmachine.edit',$mainmachine->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('mainmachine.delete',$mainmachine->id)}}" id="delete">Delete</a>

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
