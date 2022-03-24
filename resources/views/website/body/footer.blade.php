 <!-- Footer -->
 <footer class="text-center text-lg-start footerback text-muted">

    <!-- Section: Links  -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <div class="footerlogo fw-bold mb-4  text-left">
                        <img src="{{asset('frontend/images/yellow_logo.png')}}" alt="">
                    </div>
                    <p class="text-white text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptatem in officia, iste eveniet soluta at perferendis, iusto deleniti aperiam, Molestias saepe.
                    </p>
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
                        <a href="#!" class=" text-white">Parts and Services</a><br>
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
                        <a href="#!" class="text-white mb-1">Concreet Cutter</a><br>
                        <a href="#!" class="text-white">Ride a Roller</a><br>
                        <a href="#!" class="text-white">Rider on Trowel</a><br>
                        <a href="#!" class="text-white">Walk behing Roller</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold text-left mb-4">
                        Contact
                    </h6>
                    <p class="text-white text-left"><b>Address:</b> WZ-131, First Floor Near Coffee House, Budela Market Vikas Puri, New Delhi-110018</p>
                    <p class="text-white text-left"> <b>Phone no:</b><a href="tel:918048982966" class="text-light">+91-8048982966</a> </p>
                    <p class="text-white text-left"><b>Email:</b> equipmentunicorn@gmail.com</p>

                    <div>
                        <!-- <h6 class="fw-bold mb-4">
                            Social Media
                        </h6> -->
                        <div class="socialsicons text-left">
                            <div class="socialiconalign">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="socialiconalign">
                                <i class="fab fa-instagram-square"></i>
                            </div>
                            <div class="socialiconalign">
                                <i class="fab fa-linkedin"></i>
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