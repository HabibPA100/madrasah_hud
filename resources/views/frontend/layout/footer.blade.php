 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="{{ url('/about') }}">About Us</a>
                <a class="btn btn-link" href="{{ url('/contact') }}">Contact Us</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
               <a href="{{ url('https://maps.app.goo.gl/PJ1qpoy9MVPFm9tF8') }}" target="_blank" class="link text-light"> <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Demra Staff Quarter, Hazi Nagar, Sharuliya, Demra, Dhaka - 1361</p></a>
               <a href="{{ url('tel:+8801875-905552') }}" class="text-light"> <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801875-905552</p></a>
               <a href="{{ url('mailto:mhudb1361@gmail.com') }}" class="text-light"> <p class="mb-2"><i class="fa fa-envelope me-3"></i>mhudb1361@gmail.com</p></a>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{ url('https://wa.me/+8801921179455') }}"><i class="fa-brands fa-square-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ url('https://www.facebook.com/profile.php?id=61567878376940&is_tour_dismissed') }}"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ url('frontend/img/course-1.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ url('frontend/img/course-2.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ url('frontend/img/course-3.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ asset('frontend/img/course-2.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ url('frontend/img/course-3.jpg') }}" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="{{ url('frontend/img/course-1.jpg') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Do you Like to meet us</h4>
                <p>Welcome to our institution.</p>
                <p class="text-center"><a class="link text-light" href="{{ url('/privacy') }}">Privacy Policy</a></p>
                <p class="text-center"><a class="link text-light" href="{{ url('/terms') }}">Tarms of Condition</a></p>
                <div class="position-relative mx-auto" style="max-width: 400px;"><a class="link" href="{{ route('register') }}">
                    <button type="button" class="btn btn-outline-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0"> Copyrights 
                    &copy; Madrasah Hedayatul Ummah Dhaka.<br/>

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="{{ url('https://wa.me/+8801885451771') }}">Habib P--A</a><br><br>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu" style="margin-right: 50px;">
                        <a href="{{ url('/') }}">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>