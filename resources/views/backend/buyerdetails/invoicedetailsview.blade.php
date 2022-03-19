@extends('admin.admin_master')
@section('admin')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Invoice Tables</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">Tables</li>
                              <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                <h3 class="box-title">Invoices</h3>
                <a href=" {{ route('buyerdetails.add') }} " class="btn btn-rounded btn-success md-5" style="float: right"> Add New Invoice </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <td> Username </td>
                              <th>Main Machine Name</th>
                              <th>Sub Machine Name</th>
                              <th>Sub Machines Total Price</th>
                              <th> Payment Link </th>
                              {{-- <th> Sub Machine Description </th> --}}
                              {{-- <th> serial_number </th>
                              <th> warranty_days_from </th>
                              <th> warranty_days_to </th> --}}
                              <th> upload_invoice </th>
                              {{-- <th> invoice_status </th> --}}
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($datainvoice as $key => $invoiceload) <!--invoiceload   submachine -->
                          <tr>
                              <td> {{$key+1}} </td>
                              <td> {{$invoiceload->username}} </td>
                              <td>
                                @php
                                $documentData = explode(",",$invoiceload->main_machine_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td>

                              <td>
                                @php
                                $documentData = explode(",",$invoiceload->sub_machine_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach
                              </td>


                              <td>  {{$invoiceload->total_price}} </td>
                              <td> <a href=" {{ $invoiceload->payment_link }} " target="_blank"> {{ $invoiceload->payment_link }} </a> </td>
                              {{-- <td>  {{$invoiceload->serial_number}} </td>
                              <td>  {{$invoiceload->warranty_days_from}} </td>
                              <td>  {{$invoiceload->warranty_days_to}} </td> --}}

                              



                              <td> <!--document here-->
                                @php
                                $DocumentData = explode('|' , $invoiceload->upload_invoice)
                            @endphp
                            @foreach ($DocumentData as $item)
                            <div class="pt-1 pb-1">
                              <a href="{{ URL::to($item) }}" target="_blank" >
                                <div class="mailbox-attachment-info"  >
                                    <span class="mailbox-attachment-icon" style="background: rgba(221, 25, 25, 0.808)"><i class="fa fa-file-pdf-o"></i></span>
                                  <a href="{{ URL::to($item) }}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>  {{ $invoiceload->username.'.pdf' }} </a>
                                      <span class="mailbox-attachment-size" >
                                       Click to view
                                        <a href="{{ URL::to($item) }}" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                      </span>
                                </div>
                                </a>

                            </div>
                            @endforeach
                              </td> 
                              <!--document end here-->

                              {{-- <td  class=" font-weight-bolder text-capitalize" style=" {{($invoiceload->invoice_status =='active')?'color:green':'color:red' }}" > {{ $invoiceload->invoice_status }} </td> --}}

                              <td>
                                <!--button here-->
                                <a class="btn btn-info mt-2 mb-2" href=" {{Route('buyerdetails.edit',$invoiceload->id)}} ">Edit</a> 
                                &nbsp;&nbsp;
                                <a class="btn btn-danger" href=" {{Route('buyerdetails.delete',$invoiceload->id)}}" id="delete">Delete</a>

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
