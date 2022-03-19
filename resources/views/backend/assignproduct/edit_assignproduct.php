@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper invoicedetailoptions">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">  Edit Assign Products  </h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('assignproduct.update',$editData->id) }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                              <div class="col-md-12"><!--col-6 stared here-->
                                  <div class="form-group">
                                      <h5>Selecct User<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <select name="username" id="username"   class="form-control">
                                              <option value="" selected="" disabled>Select User Name</option>
                                              @foreach ($userData as $row)
                                                  <option value=" {{$row->name}}" {{ $editData->username == "$row->name"?"selected":"" }}> {{$row->name}} </option>
                                              @endforeach

                                          </select>
                                      </div>
                                  </div>
                              </div><!--col-6 Ended here-->
                          </div>
                          <!--user name selection end here-->

                          <!--MAIN MACHINE SELECTION START HERE-->
                          <div class="row">
                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select main Machine<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="assign_mainmachin_name[]" id="assign_mainmachin_name"   class="form-control select2 newstyleselect" multiple="multiple" data-placeholder="Select Sub machines">
                                            {{-- <option value="" selected="" disabled>Select Main Machine</option> --}}
                                            @foreach ($mainmachinename as $row2)
                                                <option value=" {{$row2->machine_name}} "> {{$row2->machine_name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->
                        </div>
                         <!--main machine selection end here-->


                          <!--Sub MACHINE SELECTION START HERE-->
                          <div class="row">
                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select Sub Machine<span class="text-danger">*</span></h5>
                                    <div class="controls newcsscolorupdate">
                                        <select name="assign_sub_machin_name[]" id="assign_sub_machin_name"   class="form-control select2 newstyleselect" multiple="multiple" data-placeholder="Select Sub machines" >
                                            @foreach ($subMachineData as $row2)
                                                <option  value=" {{$row2->sub_machine_name}} "> {{$row2->sub_machine_name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Add Quantity of Machine<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="number" value="{{ $editData->assign_machin_quantitys }}" name="assign_machin_quantitys"  id="assign_machin_quantitys"  class="form-control"  aria-invalid="false">
                                     </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            {{-- @php
                                $documentData = explode(",",$editData->assign_sub_machin_name)
                            @endphp
                            @foreach ($documentData as $item)
                                {{ $item }} <br> <br>
                            @endforeach --}}


                            <div class="col-md-12" id="wrap"><!--col-6 stared here-->
                                <div class="form-group my_box">
                                    <h5>Add Serial Number of Machine<span class="text-danger">*</span></h5>
                                    <div class="row">
                                        <div class="controls field_box col-md-8">
                                            <input type="text" name="serial_number[]"  id="serial_number" class="form-control pt-3 pb-3"   aria-invalid="false">
                                    </div>
                                    <div class="button_box col-md-4 " ><input type="button" class="btn btn-rounded btn-danger " name="add_btn" value="Add More" onclick="add_more()"></div>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->
                            <input type="hidden" id="box_count" value="1">
                            
                        </div>
                         <!--Sub machine selection end here-->

                         


                            <!--row Stared here-->
                            <div class="row">

                              <div class="col-md-6"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Warranty Days Start From<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="warranty_from" value={{$editData->warranty_from}}  class="form-control"    aria-invalid="false">
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            <div class="col-md-6"><!--col-6 stared here-->
                              <div class="form-group">
                                  <h5>Warranty Days Start To<span class="text-danger">*</span></h5>
                                  <div class="controls">
                                      <input type="date" name="warranty_to" value={{$editData->warranty_to}}  class="form-control"   aria-invalid="false"> 
                                  </div>
                              </div>
                          </div><!--col-6 Ended here-->

                          <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>Logistick Partner<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="logisticpartner" value=" {{ $editData->logisticpartner }} "  class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->

                        <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>insert Logistick Partner Link<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="logisticpartner_link" value=" {{ $editData->logisticpartner_link }} "   class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->


                        <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>Tracking Number<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="trackingnumber" value=" {{ $editData->trackingnumber }} " class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->

                          <!--google calender icon color -->
                          <style> 
                            ::-webkit-calendar-picker-indicator {
                                  filter: invert(1);
                              }
                          </style>

                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>

                              <!--row Stared here-->
                            <div class="row">
                                <!--col-6 stared here-->
                                <div class="col-md-12">

                                    {{-- <div class="form-group row">
                                        <div class="col-md-12">
                                            <h5>Upload Invoice </h5>
                                            <div class="custom-file">
                                                <input type="file" name="upload_invoice[]" class="form-control" accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  id="upload_invoice" multiple>
                                            </div>
                                        </div>
                                    </div> --}}

                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->
                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->

                         
     <!--edit zone -->
    <script>
        function add_more(){
            var box_count=jQuery("#box_count").val();
            box_count++;
            jQuery("#box_count").val(box_count);
            jQuery("#wrap").append('<div class="my_box" id="box_loop_'+box_count+'"><div class="row mt-2 mb-2"><div class="field_box  col-md-8"><input type="text" name="serial_number[]" class="form-control pt-3 pb-3" id="serial_number"></div><div class="button_box col-md-4"><input type="button" name="submit" class="btn btn-rounded btn-warning" id="submit" value="Remove" onclick=remove_more("'+box_count+'")></div></div></div>');
            }
            function remove_more(box_count){
                jQuery("#box_loop_"+box_count).remove();
                var box_count=jQuery("#box_count").val();
                box_count--;
                jQuery("#box_count").val(box_count);
            }
    </script>
    <!--edit zone -->




@endsection
