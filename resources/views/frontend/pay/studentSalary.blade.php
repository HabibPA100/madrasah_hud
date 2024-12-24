@extends('frontend.layout.main')
<title>Monthly Salary Of Student</title>
@section('main-contant')
<div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    <section>
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
                                   <h1><p class="text-center">মাসিক বেতন পরিশোধ</p></h1>     
                               </div>
                               @include('frontend.layout.bank')
                                <!-- Donation Amount Selection -->
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="5500" hidden > 5500 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="5000" hidden > 5000 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="4000" hidden > 4000 ৳
                                            </label>
                                        </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="4500" hidden > 4500 ৳
                                            </label>
                                        </div>

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
                                                 <input type="radio" name="amount" value="1000" hidden > 1000 ৳
                                             </label>
                                         </div>
                                         <div class="col-6 col-md-4 mb-2">
                                             <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                 <input type="radio" name="amount" value="750" hidden > 750 ৳
                                             </label>
                                         </div>
                                        <div class="col-6 col-md-4 mb-2">
                                            <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                <input type="radio" name="amount" value="0" hidden > Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Custom Amount and Donor Information Form -->
                     <div class="mb-3">
                         <div class="card">
                             <form method="POST" action="{{ route('salary.store') }}">
                                 @csrf
                                 <div class="mb-3">
                                     <label for="form_amount" class="form-label fs-4">বেতনের পরিমাণ </label>
                                     <input type="number" class="form-control" id="form_amount" name="amount" min="750" step="1" value="750" placeholder="750">
                                 </div>
                             
                                 <div class="mb-3">
                                     <label for="month_name" class="form-label fs-5">মাসের নাম নির্বাচন করুন
                                       <i class="fa-solid fa-arrow-down text-danger"></i>
                                     </label>
                                     <br>
                                     <select id="month_name" name="month_name" class="form-select @error('month_name') is-invalid @enderror" required>
                                       <option value="" disabled selected>মাস নির্বাচন করুন</option>
                                       <option value="জানুয়ারি">জানুয়ারি</option>
                                       <option value="ফেব্রুয়ারী">ফেব্রুয়ারী</option>
                                       <option value="মার্চ">মার্চ</option>
                                       <option value="এপ্রিল">এপ্রিল</option>      
                                       <option value="মে">মে</option>      
                                       <option value="জুন">জুন</option>      
                                       <option value="জুলাই">জুলাই</option>      
                                       <option value="আগস্ট">আগস্ট</option>      
                                       <option value="সেপ্টেম্বর">সেপ্টেম্বর</option>      
                                       <option value="অক্টোবর">অক্টোবর</option>       
                                       <option value="নভেম্বর">নভেম্বর</option>      
                                       <option value="ডিসেম্বর">ডিসেম্বর</option>      
                                     </select>
                                     {{-- Error Message Display --}}
                                     @error('month_name')
                                       <div class="invalid-feedback">
                                         {{ $message }}
                                       </div>
                                     @enderror
                                   </div>
                                   
                                 
                                 <div class="mb-3">
                                     <label for="transaction_number" class="form-label fs-5">ফোন নাম্বার</label>
                                     <input type="tel" 
                                                    class="form-control @error('transaction_number') is-invalid @enderror" 
                                                    id="transaction_number" 
                                                    name="transaction_number" 
                                                    placeholder="Enter phone number" 
                                                    title="রেজিষ্টেশনের সময় ব্যবহিত নাম্বার টি লিখুন" 
                                                    required autocomplete="tel" />
                                     {{-- Error Message Display --}}
                                     @error('transaction_number')
                                         <div class="invalid-feedback">
                                             {{ $message }}
                                         </div>
                                     @enderror
                                 </div>
                                    
                             
                                 <div class="mb-3">
                                     <label for="form_donorName" class="form-label fs-5">
                                        শিক্ষার্থীর নাম</label>
                                     <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Enter name" 
                                            minlength="3" maxlength="15" required>
                                 </div>
                                 <div class="form-check">
                                     <h6 class="text-primary">নুরানী বিভাগ</h6>
                                     <input class="form-check-input" type="radio" name="class_name" value="প্লে জামাত" required />
                                     <h5 class="form-check-label">প্লে জামাত</h5>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="radio" name="class_name" value="নার্সারি জামাত" required />
                                     <h5 class="form-check-label">নার্সারি জামাত</h5>
                                 </div>
                                 <div class="form-check">
                                   <input class="form-check-input" type="radio" name="class_name" value="প্রথম জামাত" required />
                                   <h5 class="form-check-label">প্রথম জামাত</h5>
                                 </div>
                                 <div class="form-check">
                                   <input class="form-check-input" type="radio" name="class_name" value="দ্বিতীয় জামাত" required />
                                   <h5 class="form-check-label"> দ্বিতীয় জামাত</h5>
                                 </div>
                                 <div class="form-check">
                                   <input class="form-check-input" type="radio" name="class_name" value="তৃতীয় জামাত" required />
                                   <h5 class="form-check-label"> তৃতীয় জামাত</h5>
                                 </div>
                                 <div class="form-check">
                                   <h6 class="text-primary">হিফয বিভাগ</h6>
                                   <input class="form-check-input" type="radio" name="class_name" value="নাজেরা বিভাগ" required />
                                   <h5 class="form-check-label">নাজেরা বিভাগ</h5>
                                 </div>
                                 <div class="form-check">
                                   <input class="form-check-input" type="radio" name="class_name" value="হিফয বিভাগ" required />
                                   <h5 class="form-check-label"> হিফয বিভাগ</h5>
                                 </div>
                                 {{-- <div class="container mb-3">
                                     <label for="form_phoneOrEmail" class="form-label fs-5 px-10">ক্লাসের নাম</label><br>
                                     <label class="text-primary fs-5" for="nurany">নুরানী বিভাগ</label>
                             
                                     <div class="mb-1 mx-5">
                                         <label for="play_jamat">
                                             <input type="radio" id="play_jamat" name="class_name" value="প্লে জামাত" required> প্লে জামাত 
                                         </label>
                                     </div>
                                     <div class="mb-1 mx-5">
                                         <label for="narsary_jamat">
                                             <input type="radio" id="narsary_jamat" name="class_name" value="নার্সারি জামাত" required> নার্সারি জামাত 
                                         </label>
                                     </div>
                                     <div class="mb-1 mx-5">
                                         <label for="class_one">
                                             <input type="radio" id="class_one" name="class_name" value="প্রথম জামাত" required> প্রথম জামাত 
                                         </label>
                                     </div>
                                     <div class="mb-1 mx-5">
                                         <label for="class_two">
                                             <input type="radio" id="class_two" name="class_name" value="দ্বিতীয় জামাত" required> দ্বিতীয় জামাত 
                                         </label>
                                     </div>
                                     <div class="mb-1 mx-5">
                                         <label for="class_three">
                                             <input type="radio" id="class_three" name="class_name" value="তৃতীয় জামাত" required> তৃতীয় জামাত 
                                         </label>
                                     </div>
                             
                                     <label class="text-primary fs-5" for="hifzo">হিফয বিভাগ</label>
                                     <div class="mb-1 mx-5">
                                         <label for="najera_bivag">
                                             <input type="radio" id="najera_bivag" name="class_name" value="নাজেরা বিভাগ" required> নাজেরা বিভাগ 
                                         </label>
                                     </div>
                                     <div class="mb-1 mx-5">
                                         <label for="hifzo_bivag">
                                             <input type="radio" id="hifzo_bivag" name="class_name" value="হিফয বিভাগ" required> হিফয বিভাগ 
                                         </label>
                                     </div> 
                                 </div>  --}}
                             
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
    </section>
</div>

@endsection
