 <!-- Footer -->

 <footer class="text-center text-lg-start footerback text-muted">
    @php
    $foeterbardata = DB::table('main_categories')->take(5)->get()
@endphp

    <!-- Section: Links  -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <div class="footerlogo fw-bold mb-4  text-left">
                        <img src="{{asset('frontend/images/yellow_logo.png')}}" style="width: 70%" alt="">
                    </div>
                    {{-- <p class="text-white text-left">
                        Unicorn Equipment is brand of well reputed vendor of Indian Forces since 1986. Unicorn Equipment is a fully Indian company with long experience of machine assembling point in India. Product development and assembly takes place at our facility in Delhi. 
                    </p> --}}
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class=" fw-bold text-left mb-4">
                        Quick Links
                    </h6>
                    <p class="text-left">
                        <a href="/" class=" text-white">Home</a><br>
                        <a href="{{route('aboutus')}}" class=" text-white">About Us</a><br>
                        <a href="{{route('services')}}" class=" text-white"> Services</a><br>
                        <a href="{{route('contact-us')}}" class=" text-white">Contact Us</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold text-left mb-4">
                        Products
                    </h6>
                    <p class=" text-left">
                        {{-- <a href="#!" class="text-white mb-1">Concreet Cutter</a><br> --}}
                        @foreach ($foeterbardata as $footerdata)
                        <a href="{{ route('main-machine',$footerdata->id) }}" class="text-white mb-1">{{ ucfirst($footerdata->category_name) }}</a><br>
                        @endforeach
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold text-left mb-4">
                        Contact
                    </h6>
                    <p class="text-white text-left"><b><i class="fas fa-home text-warning"></i>&nbsp;&nbsp;</b> WZ-131, First Floor Near Coffee House, Budela Market Vikas Puri, New Delhi-110018</p>
                    <p class="text-white text-left"> <b><i class="fas fa-phone-alt text-warning"></i></b>&nbsp;&nbsp;<a href="tel:919811111632" class="text-light">+91-9811111632</a> </p>
                    <p class="text-white text-left"> <b><i class="fas fa-phone-alt text-warning"></i></b> &nbsp;&nbsp;<a href="tel:919811777774" class="text-light">+91-9811777774</a> </p>

                    <p class="text-white text-left"><b><i class="fas fa-envelope text-warning"></i></b>&nbsp;&nbsp; <a href="mailto:equipmentunicorn@gmail.com" class="text-light">equipmentunicorn@gmail.com</a></p>
                    {{-- <p class="text-white text-left"><b><i class="fas fa-envelope text-warning"></i></b> Info.equipmentunicorn@gmail.com</p>
                    <p class="text-white text-left"><b><i class="fas fa-envelope text-warning"></i></b> Salesunicornequipment@gmail.com </p> --}}


                    <div>
                        <!-- <h6 class="fw-bold mb-4">
                            Social Media
                        </h6> -->
                        <div class="socialsicons text-left">
                            <div class="socialiconalign">
                                <a href="https://www.facebook.com/unicornequipment/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </div>
                            <div class="socialiconalign">
                                <a href="https://www.instagram.com/equipmentunicorn/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="socialiconalign">
                                <a href="https://www.linkedin.com/company/unicorn-equipment/about/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="socialiconalign">
                                <i class="fab fa-twitter-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center copyrightt p-4 text-white">
        <p> © <span id="thisyear"></span> Copyright Unicorn Equipments. Developed By
            <a class="text-reset fw-bold" href="https://blubrandzglobal.in/">BluBrandz</a></p>
    </div>
    <!-- Copyright -->
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("thisyear").innerHTML = year;    </script>
</footer>
<!-- Footer -->