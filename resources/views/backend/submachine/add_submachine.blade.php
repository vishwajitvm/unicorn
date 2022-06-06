@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">SUB MACHINES</h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('submachine.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Main Category <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="main_category_id" id="main_category_id" required  class="form-control">
                                                <option value="" selected="" disabled>Select Main Category</option>
                                                @foreach ($main_cat_data as $row)
                                                    <option value=" {{$row->id}} "> {{$row->category_name}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select main Machine <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="main_machine_name" id="main_machine_name" required  class="form-control">
                                                <option value="" selected="" disabled>Select Main Machine</option>
                                                @foreach ($selectData as $row)
                                                    <option value=" {{$row->machine_name}} "> {{$row->machine_name}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Sub-Machine Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="sub_machine_name"  class="form-control"  required="" aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Sub-Machine Price<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="sub_machine_price"  class="form-control"  aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>sub Machine Description<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="sub_machine_description" id="editor1"  rows="10" cols="80">
                                                This is my textarea to be replaced with CKEditor.
                                            </textarea> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>


                              <!--row Stared here-->
                            <div class="row">
                                <!--col-6 stared here-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Sub Machine Image </h5>
                                            <div class="custom-file">
                                                {{-- <input type="file" multiple name="machine_image"   id="machine_image"> --}}
                                                <input type="file" name="sub_machine_image[]" multiple accept="image/png, image/jpeg" onchange="preview()" class="form-control subMachineImage" id="file-input" >
                                                <p id="num-of-files">No Files Chosen</p>
                                                <!--image display here-->
                                                <div id="images" >
                                                
                                                </div> <!--image diplay here--> 
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Sub Machine Video </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="sub_machine_video[]" multiple class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Sub Machine Brochure </h5>
                                            <div class="custom-file">
                                                <input type="file" accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="sub_machine_brochure[]" multiple class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Sub Machine Status <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="sub_machine_status" id="sub_machine_status"   class="form-control">
                                                <option value="" selected="" disabled>Select Sub Machine Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>

                                            </select>
                                        </div>
                                    </div>
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

<script>
    $(document).ready(function() {
        $("#main_category_id").change(function() {
            let catData = $(this).val() ;
            jQuery.ajax({
                url: '/ajax-get-main-machine',
                type: 'post',
                data: 'catData='+catData+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#main_machine_name').html(result) ;
                }
            })
        })
    })
</script>

@endsection
