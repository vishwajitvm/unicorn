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
                <h3 class="box-title">Unapproved User List</h3>
                <a href=" {{ route('users.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add User </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Role</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th> User Status </th>
                              <th> User Request </th>
                              <th> Status </th>

                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($allData as $key => $user)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$user->usertype}} </td>
                              <td> {{$user->name}} </td>
                              <td> {{$user->email}} </td>
                              <td  style="{{($user->status =='active')?'color:green':'color:red' }} ; font-size:18px"> {{$user->status}} </td>
                              <td style="{{($user->usertype ==null)?'color:white;background:red':'color:white;background:green' }} ; font-size:18px" > {{ $user->usertype== null?" Not Approved ": "Approved" }} </td>
                              <td >
                                <select name="select" id="userdatarequest" required class="form-control userdatarequest">
                                  <option >Select Option For User Approval process</option>
                                  <option value={{ $user->id }}> Approve </option>
                                  <option value={{ null }}>Deny</option>
                                </select>
                              </td>

                              <td>
                                <!--button here-->
                                <a class="btn btn-info" href=" {{Route('users.edit',$user->id)}} ">Edit</a>
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('users.delete',$user->id)}}" id="delete">Delete</a>

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
                    {{-- <div id="product_sub_machine"></div> --}}
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script>
  $(document).ready(function() {
      $(".userdatarequest").change(function() {
          let userdata = $(this).val() ;
          // alert(userdata) ;
          jQuery.ajax({
              url: '/user-approval-request-ajex',
              type: 'post',
              data: 'userdata='+userdata+'&_token={{ csrf_token() }}',
              success: function(result){
                location.reload();
              }
          })
      })
  })
</script>

@endsection
