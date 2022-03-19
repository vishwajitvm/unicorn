@extends('users_dashboard.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Fill the form to claim your Insurance</h4>
                 <h6 class="box-subtitle">You Must fill all the fields to claim insurance.</h6>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action="  {{ route('myproduct.addclaiminsurance') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row"> <!--row stared here-->
                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="username" value="{{ $userData->name }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="useremail" value="{{ $userData->email }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="userphonenumber1" value="{{ $userData->mobile }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="useraddress" value="{{ $userData->address }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="text" name="company_name" value="{{ $userData->company_name }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>  <!--row ended here-->

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select main Machine<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="mainmachine" id="mainmachine"    class="form-control">
                                                {{-- <option value="" selected="" disabled>Select Main Machine you want to claim</option> --}}
                                                @foreach ($mainmachineData as $row)
                                                    <option value=" {{$row}} "> {{$row}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select sub Machine<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="submachine" id="submachine"    class="form-control">
                                                {{-- <option value="" selected="" disabled>Select sub Machine you want to claim</option> --}}
                                                @foreach ($submachineData as $row)
                                                    <option value=" {{$row}} "> {{$row}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Serial Number of Sub Machine You want to Claim<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="serialnumber" id="serialnumber"   class="form-control">
                                                {{-- <option value="" selected="" disabled>Select Serial number you want to claim on</option> --}}
                                                @foreach ($serialnumberData as $row)
                                                    <option value=" {{$row}} "> {{$row}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->
                            </div>

                            <!--row Stared here-->
                            <div class="row">
                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>warranty From <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="warranty_from" value="{{ $claimData->warranty_from }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12" style="display: none"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>warranty to <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="date" name="warranty_to" value="{{ $claimData->warranty_to }}"  class="form-control"   aria-invalid="false"> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5> Describe in details machine Problem to claim your Insurance <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="message" placeholder="Describe in Detail" class="form-control" id="" cols="30" rows="10"></textarea> 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <div class="controls">
                                            <h5>Your Phone Number<span class="text-danger">*</span></h5>
                                            <input type="number" name="userphonenumber2" required  class="form-control"   aria-invalid="false"> 
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
                                            <h5>Upload images<span class="text-danger">*</span> </h5>
                                            <div class="custom-file">
                                                {{-- <input type="file" multiple name="machine_image"   id="machine_image"> --}}
                                                <input type="file" name="claimimages[]" multiple accept="image/png, image/jpeg" onchange="preview()" class="form-control subMachineImage" id="file-input" required >
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
                                            <h5>Upload Videos<span class="text-danger">*</span> </h5>
                                            <div class="custom-file">
                                                <input type="file" accept="video/*" name="claimvideos[]" multiple class="form-control"  >
                                            </div>
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



<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('#machine_image').change(function(e){
	// 		var reader = new FileReader();
	// 		reader.onload = function(e){
	// 			$('#showImage').attr('src',e.target.result);
	// 		}
	// 		reader.readAsDataURL(e.target.files['0']);
	// 	});
	// });
</script>

@endsection
