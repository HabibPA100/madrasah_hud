@extends('frontend.layout.main')
<title>Admission Fees</title>
@section('main-contant')
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    <section>
        <div class="container p-2">
            <marquee behavior="" direction="">
                <h4 style="font-family: SolaimanLipi, Kalpurush; color:rgb(255, 0, 43)">
                    সম্মানিত অভিভাবকবৃন্দ; আসছে আগামী নতুন বছর ২০২৫
                    সাল উপলক্ষে পুরাতন ছাত্র-ছাত্রীদের অগ্রধিকার হিসেবে গত
                    বছরের ন্যায় নতুন বছরের জন্য ডিসেম্বর মাসের ১ তারিখ থেকে
                    ২০ তারিখ পর্যন্তর্য যারা ভর্তি করাতে পারবেন তাদের জন্য বিশেষ
                    ছাড় সুযোগ সুবিধা দিয়ে ভর্তি নেওয়া হবে ২০ তারিখের পর এই
                    সুযোগ বহাল থাকিবে না । প্রতিষ্ঠানের নিয়ম অনুসারেই ভর্তি
                    হতে হবে 
                    <strong style="color: rgb(17, 0, 255)"> প্লে জামাত ৫০০ টাকা নার্সারি জামাত ১০০০ টাকা
                    প্রথম জামাত,১২০০/- টাকা
                    দ্বিতীয় জামাত,১২০০/ টাকা
                    তৃতীয় জামাত, ১২০০/- টাকা
                    নাজেরা বিভাগ এবং
                    হেফজ বিভাগ ২০০০/- টাকা 
                </strong>
                 ডিসেম্বর মাসের ১ তারিখ থেকে
                    ২০ তারিখ পর্যন্তর্য এই নিয়ম বহাল থাকবে । ইনশাআল্লাহ
                </h4>
            </marquee>
        </div>
    </section>    
    <section id="advertise" class="my-4">
        <div class="card align-items-center shadow-lg" id="alertMassage" style="font-family: Kalpurush;
         border-radius:1.2rem;">
            <h5 class="p-5">
                এ পর্যন্ত সাথে থাকার জন্য আপনাকে অসংখ্য ধন্যবাদ; মনে রাখবেন পেমেন্ট কমপ্লিট করার মাধ্যমেই আপনার ভর্তি চূড়ান্ত হবে।
                আপনি যদি ভর্তি ফরম জমা দেওয়ার ২৪ ঘণ্টার মধ্যে ভর্তি ফি প্রদান না করেন, সিস্টেম থেকে অটোম্যাটিক আপনার জমা দেওয়া ফরম
                টি বাতিল হয়ে যাবে। <br><span class="text-danger"> ভর্তি ফি বাবদ নতুন ছাত্র/ছাত্রীদের জন্য ৩০০০৳ টাকা পুরাতন ছাত্র/ছাত্রীদের জন্য ২৫০০৳ টাকা মাত্র </span>
                নির্ধারিত ফি পে করে অবশ্যই আপনার পেমেন্টের স্ক্রিনস্ট 0192117-9455 Imo / WhatsApp নাম্বারে জমা দিতে হবে এবং মাদ্‌রাসা খোলার
                তারিখে অবশ্যই আপনার জমা দেওয়া ফরমের প্রকৃত ডকুমেন্ট যেমন,ছাত্র/ছাত্রীর জন্ম নিবন্ধন, মাতা পিতার এনআইডি সাথে আনতে হবে। (আপনার জমা দেওয়া ফরমের সত্যতা যাচাই এর জন্য এগুলো প্রয়োজন !)
            </h5>
        </div>
    </section>

    <div id="paySelectDiv">
        <div class="row">
            <div class="col-md-6">
                @include('frontend.pay.payNumber')
            </div>
            <div class="col-md-6">
                <div>    
                    <div class="row">
                       <div class="col">
                           <div class="card p-4">
                               <h1><p class="text-center">ভর্তি ফি প্রদান</p></h1>
                           </div>
                               @include('frontend.layout.bank')
                                <!-- Donation Amount Selection -->
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="3500" hidden > 3500 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="3000" hidden > 3000 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="2500" hidden > 2500 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="2000" hidden > 2000 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="1500" hidden > 1500 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="1250" hidden > 1250 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="750" hidden > 750 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="0" hidden style="text-decoration: none"> Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Custom Amount and Donor Information Form -->
                                <div class="mb-3">
                                    <div class="card">
                                        <form action="{{ route('admission_fee.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="form_amount" class="form-label fs-4">ভর্তি ফি পরিমাণ</label>
                                                <input type="number" class="form-control" id="form_amount" name="amount" min="750" step="1" value="750" placeholder="750">
                                            </div>
                                            
                                            <div class="mb-3">
                                             <label for="transaction_number" class="form-label fs-5">ট্রানজেকশন নাম্বার</label>
                                             <input type="text" 
                                                    class="form-control @error('transaction_number') is-invalid @enderror" 
                                                    id="transaction_number" 
                                                    name="transaction_number" 
                                                    placeholder="Enter transaction number" 
                                                    pattern="^[A-Za-z0-9]+$" 
                                                    title="Only letters (A-Z, a-z) and numbers (0-9) are allowed" 
                                                    required>
                                             {{-- Error Message Display --}}
                                             @error('transaction_number')
                                                 <div class="invalid-feedback">
                                                     {{ $message }}
                                                 </div>
                                             @enderror
                                         </div>
                                            
                <!-- Repeat for other fields as necessary --> 
                                            <div class="mb-3">
                                                <label for="form_donorName" class="form-label fs-5"> শিক্ষার্থীর নাম</label>
                                                <input type="text" class="form-control" id="form_donorName" name="donor_name" placeholder="Enter name" 
                                                minlength="3"
                                                maxlength="15"
                                                required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="form_phoneOrEmail" class="form-label fs-5">মোবাইল নাম্বার </label>
                                                <input type="tel" class="form-control" id="form_phoneOrEmail" name="donor_contact" 
                                                       placeholder="Enter mobile number" 
                                                       minlength="10"
                                                       maxlength="15"
                                                       required autocomplete="tel" />
                                                <p class="text-danger mt-2 px-3 fs-5" id="emailError"></p>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                                        </form>
                                    </div>
                               </div>
                               </div>           
                           </div>
                       </div>
               </div>   
            </div>
        </div>
    </div>

    <div class="container align-items-center">
        <div class="card" id="alertMassage" style="font-family: Kalpurush;">
            <div class="card-body">
                <p class="fs-4 text-primary">
                  <strong>রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম বলেছেন:</strong>  
                    "যে ব্যক্তি তার ভাইয়ের প্রতি কোনো ধরনের জুলুম করেছে, সে যেন আজই তার কাছে থেকে তা থেকে মুক্ত হয়ে যায়। কারণ কেয়ামতের দিন তার কোনো দিরহাম বা দিনার (অর্থ) থাকবে না। তখন তার নেক আমল থেকে জালিম ব্যক্তিকে পরিমাণ মতো দিয়ে দেওয়া হবে। যদি তার নেক আমল না থাকে, তবে মজলুম ব্যক্তির পাপগুলো তার উপর দিয়ে দেওয়া হবে।" <br>
                    — (সহিহ বুখারি, হাদিস: ২৪৪৯)
                </p>
                <p class="fs-4 text-primary">
                    এই হাদিসে স্পষ্ট করা হয়েছে যে মানুষের প্রতি জুলুম বা অন্যায় করা অত্যন্ত গুরুতর অপরাধ এবং এ বিষয়ে পরকালে কঠিন শাস্তি হবে। অন্যের হক বা অধিকার রক্ষা করা ইসলামের একটি গুরুত্বপূর্ণ নির্দেশ, যা প্রতিটি মুমিনের পালন করা উচিত।
                </p>
            </div>
        </div>
    </div>
    
@endsection
