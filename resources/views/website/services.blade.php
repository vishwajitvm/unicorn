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
                    <h1 class="text-uppercase">Services</h1>
                </div>
            </div>

        </section>
        <!--banner section end here-->

            <!--main ,achines section start here-->
    <section class="queryformparts">
        <div class="container">

            <div class="fromdiv">
                <div class="headingdetail text-center mb-5">
                    <h2>Get Your Service</h2>
                </div>
                <form action="{{ route('services-requests') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="service_username" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="service_useremail" class="form-control" id="email" placeholder="johndeo@gmail.com" required>
                    </div>
                    <div class="mb-4">
                        <label for="phoneno" class="form-label">Phone No</label>
                        <input type="tel" name="service_phonenumber" class="form-control" id="phoneno" placeholder="Phone No" value="+91" required>
                    </div>

                    <div class="mb-4">
                        <label  class="form-label">Adress</label>
                        <textarea name="service_address" class="form-control" style="border-radius: 2%" cols="30" rows="5"></textarea>
                    </div>

                    <div class="mb-4">
                        <label  class="form-label">Upload Photos</label>
                        <input type="file" class="form-control"  name="service_photos[]" accept="image/png, image/jpeg" multiple/>
                    </div>

                    <div class="mb-4">
                        <label  class="form-label">Upload Videos</label>
                        <input type="file"   class="form-control"   name="service_videos[]"  accept="video/*" multiple/>
                    </div>

                    <div class="mb-4">
                        <label  class="form-label">Upload Invoice Coppy</label>
                        <input type="file" name="service_invoice[]" multiple class="form-control"    accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>

                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" name="service_checkbox_policy"  id="acceptpolicy" required>
                        <label class="form-check-label" for="acceptpolicy">I agree <a href="#" style="color:#fff;"> Terms & Condition</a>.</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
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