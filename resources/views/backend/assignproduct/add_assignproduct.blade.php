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
                 <h4 class="box-title"> Assign Products To Users </h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('assignproduct.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                              <div class="col-md-12"><!--col-6 stared here-->
                                  <div class="form-group">
                                      <h5>Selecct User </h5>
                                      <div class="controls">
                                          <select name="username" id="username"   class="form-control">
                                              <option value="" selected="" disabled>Select User Name</option>
                                              @foreach ($userData as $row)
                                                  <option value=" {{$row->name}} "> {{$row->name}} </option>
                                              @endforeach

                                          </select>
                                      </div>
                                  </div>
                              </div><!--col-6 Ended here-->

                              <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select main Machine </h5>
                                    <div class="controls">
                                        <select name="assign_mainmachin_name" id="assign_mainmachin_name"   class="form-control">
                                            <option value="" selected="" disabled>Select Main Machine</option>
                                            @foreach ($mainmachinename as $row2)
                                                <option value=" {{$row2->machine_name}} "> {{$row2->machine_name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select Sub Machine </h5>
                                    <div class="controls">
                                        <select name="assign_sub_machin_name" id="assign_sub_machin_name"   class="form-control">
                                            <option value="" selected="" disabled>Select Sub Machine</option>
                                            @foreach ($subMachineData as $row2)
                                                <option  value=" {{$row2->sub_machine_name}} "> {{$row2->sub_machine_name}} </option>

                                                

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <div class="controls">
                                        <input type="number" hidden name="assign_machin_quantitys" id="assign_machin_quantitys"  value="1"  class="form-control"  aria-invalid="false">
                                     </div>
                                </div>
                            </div><!--col-6 Ended here-->
                            
                          </div>
                          <!--user name selection end here-->


                            <!--row Stared here-->
                            <div class="row">

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Add Serial Number of Machine </h5>
                                        <div class="controls">
                                            <input type="text" name="serial_number"  class="form-control"    aria-invalid="false">
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                              <div class="col-md-6"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Warranty Days Start From </h5>
                                    <div class="controls">
                                        <input type="date" name="warranty_from"  class="form-control"    aria-invalid="false">
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->

                            <div class="col-md-6"><!--col-6 stared here-->
                              <div class="form-group">
                                  <h5>Warranty Days Start To </h5>
                                  <div class="controls">
                                      <input type="date" name="warranty_to"  class="form-control"   aria-invalid="false"> 
                                  </div>
                              </div>
                          </div><!--col-6 Ended here-->

                          <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>Logistick Partner </h5>
                                <div class="controls">
                                    <input type="text" name="logisticpartner"  class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->

                        <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>insert Logistick Partner Link </h5>
                                <div class="controls">
                                    <input type="text" name="logisticpartner_link"  class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->


                        <div class="col-md-12"><!--col-6 stared here-->
                            <div class="form-group">
                                <h5>Tracking Number </h5>
                                <div class="controls">
                                    <input type="text" name="trackingnumber"  class="form-control"   aria-invalid="false"> 
                                </div>
                            </div>
                        </div><!--col-6 Ended here-->

                                 <!--col-6 stared here-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Images of Machine </h5>
                                            <div class="custom-file">
                                                {{-- <input type="file" multiple name="machine_image"   id="machine_image"> --}}
                                                <input type="file" name="assign_images[]" multiple accept="image/png, image/jpeg" onchange="preview()" class="form-control subMachineImage" id="file-input" >
                                                <p id="num-of-files">No Files Chosen</p>
                                                <!--image display here-->
                                                <div id="images" style="width: 400px ; height:200px !important ;" >
                                                
                                                </div> <!--image diplay here--> 
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose  Machine Video </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="assign_videos[]" multiple class="form-control">
                                            </div>
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

<script>
    let fileInput = document.getElementById("file-input");
    let imageContainer = document.getElementById("images");
    let numOfFiles = document.getElementById("num-of-files");

    function preview(){
        imageContainer.innerHTML = "";
        numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

        for(i of fileInput.files){
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");
            figCap.innerText = i.name;
            figure.appendChild(figCap);
            reader.onload=()=>{
                let img = document.createElement("img");
                img.classList.add('multi-img')
                img.setAttribute("src",reader.result);
                figure.insertBefore(img,figCap);

            }
            imageContainer.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }
</script>





@endsection
