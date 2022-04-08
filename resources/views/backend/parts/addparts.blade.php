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
                 <h4 class="box-title">Add Parts</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('manage-parts.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Parts Main Machine <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="parts_mainmachine" id="parts_mainmachine" required  class="form-control">
                                                <option value="" selected="" disabled>Select Main Machine</option>
                                               @foreach ($mainmachinedata as $item1)
                                                    <option value="{{ $item1->machine_name }}"> {{$item1->machine_name  }} </option>
                                               @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-6"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Parts Sub Machine <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="parts_submachine" id="parts_submachine" required  class="form-control">
                                                <option value="" selected="" disabled>Select Category Status</option>
                                                @foreach ($submachinedata as $item2)
                                                    <option value="{{ $item2->sub_machine_name }}"> {{$item2->sub_machine_name  }} </option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Parts Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="parts_name"  class="form-control"  required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Parts Description<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea rows="5" name="parts_description" class="form-control" placeholder="Describe Machine Parts" aria-invalid="false"></textarea>
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
                                            <h5>Parts Images </h5>
                                            <div class="custom-file">
                                                {{-- <input type="file" multiple name="machine_image"   id="machine_image"> --}}
                                                <input type="file" name="parts_images[]" multiple accept="image/png, image/jpeg" onchange="preview()" class="form-control category_images" id="file-input" >
                                                <p id="num-of-files">No Files Chosen</p>
                                                <!--image display here-->
                                                <div id="images" style="width: 140px; ">
                                                
                                                </div> <!--image diplay here--> 
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Parts Video </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="parts_videos[]" multiple class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Parts Status <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="parts_status" id="parts_status" required  class="form-control">
                                                <option value="" selected="" disabled>Select Category Status</option>
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
        $("#parts_mainmachine").change(function() {
            let productMainMachine = $(this).val() ;
            jQuery.ajax({
                url: '/get-sub-machine-ajax',
                type: 'post',
                data: 'productMainMachine='+productMainMachine+'&_token={{ csrf_token() }}',
                success: function(result){
                    jQuery('#parts_submachine').html(result) ;
                }
            })
        })
    })
</script>



@endsection
