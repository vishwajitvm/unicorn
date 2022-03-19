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
                 <h4 class="box-title">Machine Request Edit Page</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('buyerdetails.requestupdate',$data->id) }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                {{-- <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"  name="Product_username" value= {{ $data->Product_username }}  class="form-control"   aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text"   name="Product_email" value= {{ $data->product_email }}  class="form-control"   aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>User Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="tel"   name="user_phone_number" value= {{ $data->user_phone_number }} class="form-control"   aria-invalid="false"/>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here--> --}}

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select main Machine Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="product_main_machine" id="product_main_machine" required  class="form-control">
                                                <option value="" selected="" disabled>Select Main Machine</option>
                                                @foreach ($mainmachineData as $row)
                                                    {{-- <option value=" {{$row->machine_name}} " > {{$row->machine_name}} </option> --}}
                                                    <option value=" {{$row->machine_name}} " {{ $data->product_main_machine == "$row->machine_name" ? "Selected": "" }}> {{$row->machine_name}} </option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Sub Machine Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="product_sub_machine" id="product_sub_machine" required  class="form-control">
                                                <option value="" selected="" disabled>Select Sub Machine</option>
                                                @foreach ($submachineData as $row)
                                                    {{-- <option value=" {{$row->sub_machine_name}} "> {{$row->sub_machine_name}} </option> --}}
                                                    <option value="{{$row->sub_machine_name}}" {{ $data->product_sub_machine == "$row->sub_machine_name"? "selected":"" }} >
                                                        {{$row->sub_machine_name}}
                                                    </option>

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
                                        <h5>Machine Quantity<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="product_quantity" id="product_quantity" required  class="form-control">
                                                <option value="" selected="" disabled>Select Quantity</option>
                                                @foreach ($quantityData as $row)
                                                <option value=" {{$row}}" {{ $data->product_quantity == "$row"?"selected":"" }}> {{$row}} </option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Your Mobile Number<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="tel"  name="phone_number" value=" {{ $data->phone_number }} "  class="form-control"   > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->



                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Message ( optional )<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="product_message" id="product_message" class="form-control"  rows="5">{{ $data->product_message }}</textarea>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>
                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Update Request">
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
