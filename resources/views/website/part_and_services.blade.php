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
                    <h1>Part & Services</h1>
                </div>
            </div>

        </section>
        <!--banner section end here-->

            <!--main ,achines section start here-->
    <section class="queryformparts">
        <div class="container">

            <div class="fromdiv">
                <div class="headingdetail text-center mb-5">
                    <h2>Enquiry Now</h2>
                </div>
                <form action="">
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="johndeo@gmail.com">
                    </div>
                    <div class="mb-4">
                        <label for="phoneno" class="form-label">Phone No</label>
                        <input type="tel" class="form-control" id="phoneno" placeholder="Phone No" value="+91" required>
                    </div>
                    <div class="mb-4">
                        <label for="selectbox" class="form-label">Select</label>
                        <select class="form-select" id="selectbox" aria-label="Default select example">
                            <option selected>--</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="mb-5 form-check">
                        <input type="checkbox" class="form-check-input" id="acceptpolicy" required>
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


@endsection