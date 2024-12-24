<section>
    <div class="container d-flex d-lg-none w-100%">
        <div style="background-color: #047939;    margin-bottom: -10px;" class="d-flex justify-content-around small footer-section fixed-bottom ">
            <div class="col-2 mt-1">
              <a href="{{ url('/') }}" class="text-decoration-none">
                <div class="home-box text-center">
                  <!-- <span class="wal" ><i class="fas fa-home"></i></span> -->
                  <i class="fa-solid fa-house smFooter"></i>
                  <p class="text-light text-center"> হোম </p>
                </div>
              </a>
            </div>
            <div class="col-2 mt-1 ">
                <a href="{{ url('contact') }} " class=" text-decoration-none link ">
                   <div class="home-box text-center">
                    <i class="fa-solid fa-phone-volume smFooter"></i>
                    <p class="text-light text-center"> যোগাযোগ </p>
                   </div>
                </a>
            </div>
              <div class="col-2">
                    <a href="{{ route('pay') }}" class=" text-decoration-none link ">
                        <div class="home-box text-center ">
                           <img src="{{ url('frontend/img/round_payment.png') }}" alt="Pay Now " style=" width: 40px; margin-top: -10px;">
                           <p class="text-light text-center"> পে </p>
                        </div>
                    </a>
              </div>
             <div class="col-2 mt-1 ">
                          <a href="{{ route('admission') }} " class=" text-decoration-none link ">
                             <div class="home-box text-center">
                                <i class="fa-solid fa-receipt smFooter"></i>
                                <p class="text-light text-center">ভর্তি</p>
                             </div>
                          </a>
             </div>
                   <div class="col-2 mt-1">
                      <a href="{{ route('login') }}" class=" text-decoration-none link ">
                        <div class="home-box text-center ">
                      <!-- <span class="wal"><i class="fas fa-user"></i></span> -->
                         <i class="fa-solid fa-right-to-bracket smFooter"></i>
                         <p class="text-light text-center">লগইন</p>
                        </div>
                    </a>
                   </div>
           </div>
       </div>
    </section>
{{-- smale device footer nav bar end here --}}