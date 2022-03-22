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
                 <h4 class="box-title">Edit Main Machine</h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('mainmachine.update', $editData->id) }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select Main Category</h5>
                                    <div class="controls">
                                        <select name="main_cat_id" id="main_cat_id"   class="form-control">
                                            <option value="" selected="" disabled>Select Main Categorys</option>
                                            @foreach ($data as $item)
                                            <option value=" {{ $item->id }} " {{ $item->id == $editData->main_cat_id?'selected':'' }}> {{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->


                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Machine Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="machine_name"  class="form-control" value=" {{$editData->machine_name}} "  required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Machine  Average Price<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="machine_price"  class="form-control" value=" {{$editData->machine_price}} "  required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Machine Description<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea  rows="5" name="machine_description"  class="form-control" placeholder="Machine Description">{{$editData->machine_description}}</textarea>
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
                                        <div class="col-md-12">
                                            <h5>Choose Machine Image </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="image/PNG, image/gif, image/JPEG"  name="machine_image"  class="custom-file-input" id="machine_image">
                                                <label class="custom-file-label text-light font-weight-bolder" for="customFile">Choose Machine Image</label>
                                            </div>
                                        </div>
                                    </div>
                                     <!--image display after selecting UISNG AJEX-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <img id="showImage" accept="image/PNG, image/gif, image/JPEG"   src="{{ (!empty($editData->machine_image))?url('upload/user_images/'.$editData->machine_image):url('upload/no_image.jpg') }}" alt=""  style="width: 200px;height:100px;border:2px solid black"  >                                        

                                        </div>
                                    </div>
                                
                                    <!--image display ended here-->

                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Gender <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="machine_status" id="machine_status" required  class="form-control">
                                                <option value="" selected="" disabled>Select Machine Status</option>
                                                <option value="active" {{ $editData->machine_status == "active" ? "Selected": "" }} >Active</option>
                                                <option value="inactive" {{ $editData->machine_status == "inactive" ? "Selected": "" }}>Inactive</option>

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
