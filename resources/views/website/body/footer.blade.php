 <!-- Footer -->

 <footer class="text-center text-lg-start footerback text-muted">
    @php
    $foeterbardata = DB::table('main_categories')->take(5)->get()
@endphp

    <!-- footer -->
    <section class="footer">
        <footer class="text-center text-lg-start footerback text-muted">


            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="container text-center text-md-start mt-5">

                    <div class="row mt-3">

                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                            <div class="footerlogo fw-bold mb-4  text-left">
                                <img src="{{asset('frontend/assets/img/logo (1).png')}}" alt="">
                            </div>
                            <p class=" text-left">
                                Unicorn Equipment is brand of well reputed vendor of Indian Forces since 1986. Unicorn Equipment is a fully Indian company with long experience of machine assembling point in India.
                            </p>
                        </div>



                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <h6 class=" fw-bold text-left mb-4">
                                Quick Links
                            </h6>
                            <p class="text-left footer_links">
                                <a href="#!" class=" ">Home</a><br>
                                <a href="#!" class=" ">About Us</a><br>
                                <a href="#!" class="">Product</a><br>
                                <a href="#!" class="">Pricinng</a><br>
                                <a href="#!" class="">News</a>
                            </p>
                        </div>



                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <h6 class="fw-bold text-left mb-4">
                                Products
                            </h6>
                            <p class=" text-left footer_links">
                                <a href="#!" class=" mb-1">Concreet Cutter</a><br>
                                <a href="#!" class="">Ride a Roller</a><br>
                                <a href="#!" class="">Rider on Trowel</a><br>
                                <a href="#!" class="">Walk behing Roller</a>
                            </p>
                        </div>



                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                            <h6 class="fw-bold text-left mb-4">
                                Contact
                            </h6>
                            <p class=" text-left"><b>Address:</b> WZ-131, First Floor Near Coffee House, Budela Market Vikas Puri, New Delhi-110018</p>
                            <p class=" text-left"> <b>Phone no:</b> +91 98111 11632</p>
                            <p class=" text-left"> <b>Phone no:</b> +91 98117 77774</p>

                            <p class="text-left"><b>Email:</b> equipmentunicorn@gmail.com</p>
                            {{-- <p class="text-left"><b>Email:</b> Salesunicornequipment@gmail.com</p>
                            <p class="text-left"><b>Email:</b> Info.equipmentunicorn@gmail.com</p> --}}


                            <div>

                                <div class="socialsicons text-left">
                                    <div class="socialiconalign">
                                        <a href="https://www.facebook.com/unicornequipment/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                    </div>
                                    <div class="socialiconalign">
                                        <a href="https://www.instagram.com/equipmentunicorn/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="socialiconalign">
                                        <a href="https://www.linkedin.com/company/unicorn-equipment/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                    <div class="socialiconalign">
                                        <i class="fab fa-twitter-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


        </footer>


    </section>

    <!-- Copyright -->
    <div class="text-center copyrightt p-4 text-white">
        <p> © <span id="thisyear"></span> Copyright Unicorn Equipments. Developed By
            <a class="text-reset fw-bold" href="https://blubrandzglobal.in/">BluBrandz</a></p>
    </div>
    <!-- Copyright -->
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("thisyear").innerHTML = year;
            </script>
</footer>
<!-- Footer -->