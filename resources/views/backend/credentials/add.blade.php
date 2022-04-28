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
                 <h4 class="box-title">Add Credentials Images</h4>
                 <a href=" {{ route('managecredentials.view') }} " class="btn btn-rounded btn-success md-5" style="float: right"> View Credentials Image </a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('managecredentials.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-12 stared here-->
                                    <div class="form-group">
                                        <h5>Credential Image Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="credential_name"  class="form-control"   aria-invalid="false" maxlength="25">
                                         </div>
                                    </div>
                                </div><!--col-12 Ended here-->

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
                                            <h5>Choose Machine Image </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="image/png, image/gif, image/jpeg" name="credential_image"  class="custom-file-input" id="machine_image" required>
                                                <label class="custom-file-label text-light font-weight-bolder" for="customFile"   >Choose Machine Image</label>
                                            </div>
                                        </div>
                                    </div>
                                     <!--image display after selecting UISNG AJEX-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <img id="showImage" accept="image/PNG, image/gif, image/JPEG"  src="{{ (!empty($editData->image))?url('upload/user_images/'.$editData->image):url('upload/no_image.jpg') }}" alt="" style="width: 200px;height:100px;border:2px solid black">
                                            <img src="" alt="" >
                                        </div>
                                    </div>
                                
                                    <!--image display ended here-->

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



<script type="text/javascript">
	$(document).ready(function(){
		$('#machine_image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection
