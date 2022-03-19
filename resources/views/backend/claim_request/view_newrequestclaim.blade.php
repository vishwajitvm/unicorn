@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Insurance Claim request</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">insurance claim</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            
 

          <div class="col-12 ">

           <div class="box ">
              <div class="box-header with-border">
                <h3 class="box-title">Insurance Claim</h3>
                {{-- <a href=" {{ route('mainmachine.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Machine </a> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th> username </th>
                              <th> useremail </th>
                              <th> userphonenumber1 </th>
                              <th> userphonenumber2 </th>
                              {{-- <th> useraddress </th> --}}
                              <th> mainmachine </th>
                              <th> submachine </th>
                              <th> request status </th>

                              {{-- <th> serialnumber </th>
                              <th> warranty_from </th>
                              <th> warranty_to </th>
                              <th> message </th> --}}
                              {{-- <th> claimimages </th> --}}
                              {{-- <th> claimvideos </th> --}}
                              <th width="15%">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($dataClaimRequest as $key => $item)
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$item->username}} </td>
                              <td> {{ $item->useremail }} </td>
                              <td> {{$item->userphonenumber1}} </td>
                              <td> {{$item->userphonenumber2}} </td>
                              {{-- <td> {{$item->useraddress}} </td> --}}
                              <td> {{$item->mainmachine}} </td>
                              <td> {{$item->submachine}} </td>
                              {{-- <td> {{$item->serialnumber}} </td> --}}
                              {{-- <td> {{$item->warranty_from}} </td>
                              <td> {{$item->warranty_to}} </td>
                              <td> {{$item->message}} </td> --}}
                              
                              {{-- <td>  <!--mutli imag starded here-->
                                @php
                                    $imgData = explode('|' , $item->claimimages)
                                @endphp
                                @foreach ($imgData as $items)
                                    <img src=" {{ URL::to($items) }} " style="width: 100px ; height:100px ; margin:2px"  alt="">
                                @endforeach
                            </td>   --}}
                            <!--multiple image end here-->

                            {{-- <td> <!--video started here-->
                              @php
                              $videoData = explode('|' , $item->claimvideos)
                          @endphp
                          @foreach ($videoData as $itemss)
                              <video width="200" height="200" controls>
                                  <source src="{{ URL::to($itemss) }}" type="video/mp4">
                                  <source src="{{ URL::to($itemss) }}" type="video/ogg">
                                  Your browser does not support HTML video.
                                </video>
                          @endforeach
                            </td> --}}
                             <!-- video end here-->

                             <td>
                                
                              @if ($item->request_status =="approved")
                              <a  href=" {{ Route('claimrequest.edit',$item->id) }} " class="btn btn-rounded btn-md   m-5 btn-block" style="background: rgb(42, 126, 60)">Approved</a>

                              @elseif($item->request_status == "deny")
                              <a href=" {{ Route('claimrequest.edit',$item->id) }} " class="btn btn-rounded btn-md btn-danger m-5 btn-block">Denied</a>

                              @else 
                              <a href=" {{ Route('claimrequest.edit',$item->id) }} " class="btn btn-rounded btn-md btn-secondary m-5 btn-block">no response </a>

                              @endif
                              
                             </td>


                             <td>
                                <a class="btn btn-info" href=" {{ Route('claimrequest.edit',$item->id) }} ">View in detail</a> 
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
