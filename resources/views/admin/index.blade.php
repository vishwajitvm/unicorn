@extends('admin.admin_master')
@section('admin')
    

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-2 col-2">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Total Users</p> --}}
                              <h3 class="text-white mb-0 font-weight-500"> {{ $userData }}  <small class="text-success"> &nbsp; users</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-2">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">Total Main Machine</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">{{ $mainmachineData }} <small class="text-success"> &nbsp; Mainmachine</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              
 
              <div class="col-xl-2 col-2">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-success-light rounded w-60 h-60">
                              <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16">total submachine</p> --}}
                              <h3 class="text-white mb-0 font-weight-500">{{ $submachineData }} <small class="text-success"> &nbsp; total sub machine</small></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-2">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-light rounded w-60 h-60">
                              <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                          </div>
                          <div>
                              {{-- <p class="text-mute mt-20 mb-0 font-size-16"> total request raised </p> --}}
                              <h3 class="text-white mb-0 font-weight-500">{{ $requestData }} <small class="text-success"> &nbsp; total request</small></h3>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-xl-2 col-2">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-light rounded w-60 h-60">
                            <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                        </div>
                        <div>
                            {{-- <p class="text-mute mt-20 mb-0 font-size-16">Total invoice generated</p> --}}
                            <h3 class="text-white mb-0 font-weight-500">{{ $invoiceData }}  <small class="text-success"> &nbsp;  invoice generated</small></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-2">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-light rounded w-60 h-60">
                            <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                        </div>
                        <div>
                            {{-- <p class="text-mute mt-20 mb-0 font-size-16">Total machine sell</p> --}}
                            <h3 class="text-white mb-0 font-weight-500">{{ $sellingData }}  <small class="text-success"> &nbsp; total machine sell </small></h3>
                        </div>
                    </div>
                </div>
            </div>

           
            <!--chart started here-->
            {{-- <div class="col-6">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Product Sale
                        </h4>
                    </div>
                    <div class="box-body">

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                          google.charts.load('current', {'packages':['corechart']});
                          google.charts.setOnLoadCallback(drawChart);
                    
                          function drawChart() {
                    
                            var data = google.visualization.arrayToDataTable([
                              ['Task', 'Hours per Day'],
                            <?php echo $data ; ?>
                            ]);
                    
                            var options = {
                              title: 'Sub Machine Sale'
                            };
                    
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    
                            chart.draw(data, options);
                          }
                        </script>

                          <div id="piechart" style="width: 100%; height: 500px"> </div>
                        
                        </div>
                    </div>
            </div>   --}}
            

            <!--chart end here-->


              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              New Users
                              {{-- <small class="subtitle">More than 400+ new members</small> --}}
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">users</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">user type</span></th>
                                          <th style="min-width: 100px"><span class="text-fade"> mobile number </span></th>
                                          <th style="min-width: 150px"><span class="text-fade">Address</span></th>
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach ($userlimitrdData as $item)
                                      <tr>										
                                        <td class="pl-0 py-8">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 mr-20">
                                                    <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                </div>

                                                <div>
                                                    <h6  class="text-white font-weight-600 hover-primary mb-1 font-size-16"> {{ $item->name }} </h6>
                                                    <span class="text-fade d-block"> {{ $item->email }} </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $item->usertype }}
                                            </span>
                                            
                                        </td>
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $item->mobile }}
                                            </span>
                                            
                                        </td>
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                {{ $item->address }}
                                            </span>
                                            
                                        </td>
                                        <td>
                                            <span class="badge badge-success-light badge-lg">Approved</span>
                                        </td>
                                        <td class="text-right">
                                            <a href=" {{ Route('user.view') }} " class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                        </td>
                                    </tr>

                                      @endforeach

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



@endsection

