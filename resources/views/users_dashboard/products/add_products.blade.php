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
                 <h4 class="box-title">Send Product Request</h4>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('userproducts.store') }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        {{-- <h5>User Name<span class="text-danger">*</span></h5> --}}
                                        <div class="controls">
                                            <input type="text" value= {{ $userData->name }} hidden name="Product_username"   class="form-control"   aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        {{-- <h5>User Email<span class="text-danger">*</span></h5> --}}
                                        <div class="controls">
                                            <input type="text" value= {{ $userData->email }} hidden  name="Product_email"   class="form-control"   aria-invalid="false"  > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        {{-- <h5>User Email<span class="text-danger">*</span></h5> --}}
                                        <div class="controls">
                                            {{-- <input type="text"   name="user_phone_number" value={{ $userData->user_phone_number}} class="form-control"   aria-invalid="false"  >  --}}
                                            <input type="tel" hidden value= {{ $userData->mobile=true?$userData->mobile:"" }}   name="user_phone_number"  class="form-control"   aria-invalid="false"/>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select main Machine Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="product_main_machine" id="sub_category_name"   class="form-control">
                                                <option value="" selected="" disabled>Select Main Machine</option>
                                                @foreach ($mainmachineData as $row)
                                                    <option value=" {{$row->machine_name}} "> {{$row->machine_name}} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Select Sub Machine Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="product_sub_machine" id="sub_category"   class="form-control">
                                                <option value="" selected="" disabled>Select Sub Machine</option>
                                                @foreach ($submachineData as $row)
                                                    <option value=" {{$row->sub_machine_name}} "> {{$row->sub_machine_name}} </option>
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
                                            <select name="product_quantity" id="product_quantity"   class="form-control">
                                                <option value="" selected="" disabled>Select Quantity</option>
                                                @foreach ($quantityData as $row)
                                                <option value=" {{$row}} "> {{$row}} </option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Your Mobile Number<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="tel"  name="phone_number"   class="form-control"   > 
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->


                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Message ( optional )<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="product_message" id="product_message" class="form-control"  rows="5"></textarea>
                                        </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>
                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit Request">
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
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>

{{-- <script>
    $(document).ready(function () {
    $('#sub_category_name').on('change', function () {
    let id = $(this).val();
    $('#sub_category').empty();
    $('#sub_category').append(`<option  disabled selected>Processing...</option>`);
    $.ajax({
    type: 'GET',
    url: 'GetSubCatAgainstMainCatEdit/'+id,
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);   
    $('#sub_category').empty();
    $('#sub_category').append('<option value="0" disabled selected>Select Sub Machine</option>');
    response.forEach(element => {
        // $('#sub_category').append(`<option value="${element['sub_machine_name']}">${element['sub_machine_name']}</option>`);
        // });
        $('#sub_category').append(`<option value="${element['sub_machine_name']}">${element['sub_machine_name']}</option>`);
        });
    }
});
});
});
</script> --}}

@endsection
