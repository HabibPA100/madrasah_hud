@extends('frontend.layout.main')
<title>Zakat Found</title>

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
                                   <h1><p class="text-center">জাকাত তহবিল</p></h1> 
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
                                            <form action="{{ route('zakat.store') }}" method="POST">
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
                                                        required>
                                                 {{-- Error Message Display --}}  
                                                 @error('transaction_number')
                                                     <div class="invalid-feedback">
                                                         {{ $message }}
                                                     </div>
                                                 @enderror
                                                 
                                             </div>
                                                <div class="mb-3">
                                                    <label for="form_donorName" class="form-label fs-5">দাতার নাম</label>
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
                        "তাদের সম্পদ থেকে যাকাত গ্রহণ কর, যা তাদেরকে পবিত্র করবে এবং তাদেরকে পরিশুদ্ধ করবে। আর তাদের জন্য দোয়া কর। নিশ্চয় তোমার দোয়া তাদের জন্য প্রশান্তি। আল্লাহ সর্বশ্রোতা, সর্বজ্ঞানী।" <br>
                        (সূরা আত-তাওবাহ, আয়াত ১০৩)
                    </p>
                    <p class="text-dark"> <strong>"ইবনে উমার (রা.) থেকে বর্ণিত, নবী করিম (সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম) বলেছেন:</strong> 
                        ‘আমি আদিষ্ট হয়েছি, যেন আমি লোকদের সাথে লড়াই করি যতক্ষণ না তারা লা ইলাহা ইল্লাল্লাহ সাক্ষ্য দেয়, নামাজ কায়েম করে এবং যাকাত আদায় করে। তারা যদি তা করে, তাহলে তাদের প্রাণ ও সম্পদ নিরাপদ থাকবে, তবে ইসলামের হক অনুযায়ী; এবং তাদের হিসাব হবে আল্লাহর কাছে।’" <br>
                        (সহিহ বুখারি, হাদিস: ২৫)</p>
                </div>
            </div>
        </div>

</div>
@endsection
