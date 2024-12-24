@extends('frontend.layout.main')
<title>Sadharon Dan</title>

@section('main-contant')
<div class="container mt-5">  
    @if(session('success')) 
       <div class="alert alert-success">{{ session('success') }}</div>
    @endif
            
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
                                   <h1><p class="text-center">সাধারণ তহবিল</p></h1>
                               </div>
                                   @include('frontend.layout.bank')
                                    
                                    <!-- Donation Amount Selection -->
                                    <div class="mb-4">
                                        <div class="row">
                                            <div class="col-6 col-md-4 mb-2">
                                                <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                    <input type="radio" name="amount" value="100" hidden > 100 ৳
                                                </label>
                                            </div>
                                            <div class="col-6 col-md-4 mb-2">
                                                <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                    <input type="radio" name="amount" value="500" hidden > 500 ৳
                                                </label>
                                            </div>
                                            <div class="col-6 col-md-4 mb-2">
                                                <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                    <input type="radio" name="amount" value="1000" hidden > 1000 ৳
                                                </label>
                                            </div>
                                            <div class="col-6 col-md-4 mb-2">
                                                <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                    <input type="radio" name="amount" value="10000" hidden > 10,000 ৳
                                                </label>
                                            </div>
                                            <div class="col-6 col-md-4 mb-2">
                                                <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                    <input type="radio" name="amount" value="50000" hidden > 50,000 ৳
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
                                            <form action="{{ route('donation.store') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="form_amount" class="form-label fs-4">অনুদানের পরিমাণ</label>
                                                    <input type="number" class="form-control" id="form_amount" name="amount" min="10" step="1" value="10" placeholder="10">
                                                </div>
                                                
                                                <div class="mb-3">
                                                 <label for="transaction_number" class="form-label fs-5">ট্রানজেকশন আইডি</label>
                                                 <input type="text" 
                                                        class="form-control @error('transaction_number') is-invalid @enderror" 
                                                        id="transaction_number" 
                                                        name="transaction_number" 
                                                        placeholder="Enter transaction ID" 
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
                                                    <label for="form_donorName" class="form-label fs-5"> দাতার নাম</label>
                                                    <input type="text" class="form-control" id="form_donorName" name="donor_name" placeholder="Enter name" 
                                                    minlength="3"
                                                    maxlength="15"
                                                    required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="form_phoneOrEmail" class="form-label fs-5">মোবাইল নাম্বার</label>
                                                    <input type="tel" class="form-control" id="form_phoneOrEmail" name="donor_contact" 
                                                           placeholder="Enter mobile or email" 
                                                           minlength="10"
                                                           maxlength="30"
                                                           required>
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
                        আল্লাহ সুবহানাহু ওয়া তা'আলা বলেন, ‘যারা আল্লাহর পথে তাদের সম্পদ ব্যয় করে, তাদের উপমা একটি বীজের মত, যা উৎপন্ন করল সাতটি শীষ, প্রতিটি শীষে রয়েছে একশ’ দানা। আর আল্লাহ যাকে চান তার জন্য বাড়িয়ে দেন। আর আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ’।  <br>
                     (সূরা বাকারা, আয়াত ২৬১)
                    </p>
                    <p class="fs-4 text-primary">
                        নবী (সাল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম) বলেছেনঃ "তোমাদের মধ্যে উত্তম সেই ব্যক্তি, যে নিজে সৎ কাজ করে এবং অন্যদের সৎ কাজের প্রতি উৎসাহিত করে।" <br> (সহীহ বুখারী, হাদীস নম্বর: ৩৬৫৪)
                    </p>
                </div>
            </div>
        </div>
</div>

@endsection
    