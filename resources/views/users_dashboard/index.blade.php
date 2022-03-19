@extends('users_dashboard.user_master')
@section('user')
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Product Request</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">{{ $productRequestNewData }} <small class="text-success">&nbsp;&nbsp; Product Request</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Total Invoice Recived</p> --}}
                              <h3 class="text-white mb-0 font-weight-500"> {{ $invoiceRequestNewData }}  <small class="text-success"> &nbsp; Total Invoice Recived </small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">{{ $myproductRequestData }} <small class="text-danger"> &nbsp; Your Total  Product </small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              New Machines Arrival
                              {{-- <small class="subtitle">More than 400+ new members </small> --}}
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">Main Machine</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Sub Machine</span></th>
                                          <th style="min-width: 100px"><span class="text-fade"> Starting Price </span></th>
                                          <th style="min-width: 120px; text-align:right"> Buy Now </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($submachineRequestData as $item)
                                      <tr>										
                                        <td class="pl-0 py-8">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 mr-20">
                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                </div>

                                                <div>
                                                    <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16"> {{ $item->main_machine_name }} </a>
                                                    {{-- <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span> --}}
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->sub_machine_name }}
                                            </span>
                                        </td>

                                        <td>
                                            
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                ₹{{ $item->sub_machine_price }}
                                            </span>
                                        </td>

                                        <td class="text-right">
                                            {{-- <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a> --}}
                                            <a href=" {{Route('userproducts.addrequest') }} " class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                        </td>

                                    </tr>

                                      @endforeach

                                      {{-- <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
                                                      <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45,800k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Paid
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  $45k
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-fade font-weight-600 d-block font-size-16">
                                                  Sophia
                                              </span>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Pharetra
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr> --}}


                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->


@endsection
