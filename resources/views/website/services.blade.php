@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Part & Services" ;
        $metakeywordname = "UnicornEqupment Main Machine" ;
        $metakeywordContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;

        //meta descriptions
       $metaDescriptionName = "Unicorn Equpment Mainmahine Description" ;
       $metaDescriptionContent = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" ;
@endphp
<!--META DATA END-->

     <!--banner section start-->
     <section class="innerpagebanner d-flex align-items-center">

        <div class="container">
            <div class="mainheadertitle text-center">
                <h1>Services</h1>
            </div>

        </div>

    </section>

    <!--banner section end here-->

    <!-- services  section start -->
    <section class="services">
        <div class="container services_main">
            <div class="row">
                <div class=" Your_Service col-lg-12 col-sm-12 col-md-12 border border-info bg-white">
                    <h1>
                        Get Your Service
                    </h1>

                    <!-- service form -->
                    <div class="row my-5">

                        <!-- 1 -->
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="service_username" class="form-control" id="exampleInputName">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="service_useremail" class="form-control" id="exampleInputEmail1">

                                </div>

                            </form>
                        </div>


                        <!-- 2 -->
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone no</label>
                                    <input type="text" class="form-control" id="exampleInputPhone" name="service_phonenumber">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <textarea id="address" class="form-control" name="service_address" cols="30" rows="5"></textarea>
                                </div>



                            </form>
                        </div>

                        <!-- last row  -->

                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputphoto" class="form-label">Upload Photos</label>
                                    <input type="file" name="service_photos[]" accept="image/png, image/jpeg" multiple class="form-control">

                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputphoto" class="form-label">Upload Videos</label>
                                    <input type="file" class="form-control" name="service_videos[]" accept="video/*"
                                        multiple>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputphoto" class="form-label">Upload Invoice Coppy </label>
                                    <input type="file" name="service_invoice[]" multiple class="form-control"
                                        accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">

                                </div>
                            </form>
                        </div>

                        <!-- last row closed  -->
                        <div class="col-sm-4">
                            <div class="mb-3  mt-3 my-2 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree<a href="#" style="color:blue ;"> Terms & Condition.</a></label>
                            </div>
                        </div>
                        
                        <!-- button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section closed -->


    <!--main ,achines section end here-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script type="text/javascript">
    $(function() {
      $(document).on('click' , '#delete' ,function(e) {
        e.preventDefault() ;
        var link = $(this).attr("href") ;
        //sweetalert 
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
            }
          })
        //sweetalert
      }) ;
    })
    </script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
           case 'info':
           toastr.info(" {{ Session::get('message') }} ");
           break;
       
           case 'success':
           toastr.success(" {{ Session::get('message') }} ");
           break;
       
       
           case 'warning':
           toastr.warning(" {{ Session::get('message') }} ");
           break;
       
           case 'error':
           toastr.error(" {{ Session::get('message') }} ");
           break; 
        }
        @endif 
       </script>


@endsection