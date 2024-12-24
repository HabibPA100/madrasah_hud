<div class="card align-items-center">
    <div class="card-header">
        <h5> Select Payment Method </h5>
    </div>
    <div class="card-body">
        <!-- bKash Payment Option -->
        <div class="payment-option mb-2" onclick="payWithBkash()">
            <button class="rounded-pill px-3 w-full">
                <span>
                    <img class="d-inline-block float-start my-2 " src="{{ asset('frontend/img/paymenticon/bkash.png') }}" alt="bKash Logo" width="30px" height="30px">
                    <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Bkash</p>
                </span>
            </button>
        </div>
        {{-- Hidden div  --}}
        <div class="my-3 d-none showBkashNumber">
             <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
             <h4 class="text-center">01875905552</h4>
        </div>
        <!-- Nagad Payment Option -->
        <div class="payment-option mb-2" onclick="payWithNagad()">
            <button class="rounded-pill px-3 w-full">
                <span>
                    <img class="rounded-circle d-inline-block float-start my-2" src="{{ asset('frontend/img/paymenticon/nagad.png') }}" alt="Nagad Logo" width="30px" height="30px">
                    <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Nagad</p>
                </span>
            </button>
        </div>
        {{-- Hidden div  nagad--}}
        <div class="my-3 d-none showNagadNumber">
            <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
            <h4 class="text-center">01875905552</h4>
       </div>
        <!-- rocket payment Option  -->
        <div class="payment-option mb-2" onclick="payWithRocket()">
            <button class="rounded-pill px-3 w-full">
                <span>
                    <img class="rounded-circle d-inline-block float-start my-2" src="{{ asset('frontend/img/paymenticon/rocket.png') }}" alt="Rocket Logo" width="30px" height="30px">
                    <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Rocket</p>
                </span>
            </button>
        </div>
        {{-- Hidden div rocket --}}
        <div class="my-3 d-none showRocketNumber">
            <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
            <h4 class="text-center">01875905552</h4>
       </div>
        <!-- Rocket payment Option  -->
        <div class="payment-option mb-2" onclick="payWithUpay()">
            <button class="rounded-pill px-3 w-full">
                <span>
                    <img class="rounded-circle d-inline-block float-start my-2" src="{{ asset('frontend/img/paymenticon/upay.png') }}" alt="Upay Logo" width="30px" height="30px">
                    <p class="d-inline-block float-end ps-5 fs-4 my-2">Pay with Upay</p>
                </span>
            </button>
        </div>
        {{-- Hidden div  --}}
        <div class="my-3 d-none showUpayNumber">
            <p class="text-center text-primary fs-5">নাম্বারটির উপর চেপেধরে কপি করুন</p>
            <h4 class="text-center">01875905552</h4>
       </div>
    </div>
    <div class="card-footer">Manual Payment System</div>
</div>