@extends('frontend.layout.main')
<title>Examitation Fees</title>
@section('main-contant')
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        <section>
            <div class="container" id="paySelectDiv">
                <div class="row">
                    <div class="col-md-6">
                        @include('frontend.pay.payNumber')
                    </div>
                    <div class="col-md-6">
                        <div>    
                            <div class="row">
                               <div class="col">
                                   <div class="card p-4">
                                       <h1><p class="text-center">পরীক্ষার ফি পরিশোধ</p></h1>
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
                                                        <input type="radio" name="amount" value="200" hidden > 200 ৳
                                                    </label>
                                                </div>
                                                <div class="col-6 col-md-4 mb-2">
                                                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                        <input type="radio" name="amount" value="250" hidden > 250 ৳
                                                    </label>
                                                </div>
                                                <div class="col-6 col-md-4 mb-2">
                                                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                        <input type="radio" name="amount" value="300" hidden > 300 ৳
                                                    </label>
                                                </div>
                                                <div class="col-6 col-md-4 mb-2">
                                                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-center justify-content-center text-decoration-none">
                                                        <input type="radio" name="amount" value="500" hidden > 500 ৳
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
                                        <form method="POST" action="{{ route('exam_fee.store') }}">
                                            @csrf
                                            <!-- Amount -->
                                            <div class="mb-3">
                                                <label for="form_amount" class="form-label fs-4">পরীক্ষার ফি পরিমাণ</label>
                                                <input type="number" class="form-control" id="form_amount" name="amount" min="100" step="1" value="100" placeholder="নূন্যতম ১০০ ৳" required>
                                                @error('amount')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        
                                            <!-- Exam Name -->
                                            <div class="mb-3">
                                                <label for="exam_name" class="form-label fs-5">পরীক্ষার নাম</label>
                                                <select id="exam_name" name="exam_name" class="form-select @error('exam_name') is-invalid @enderror" required>
                                                    <option value="" disabled selected>নাম নির্বাচন করুন</option>
                                                    <option value="টেস্ট পরীক্ষা">টেস্ট পরীক্ষা</option>
                                                    <option value="প্রথম সাময়িক পরীক্ষা">প্রথম সাময়িক পরীক্ষা</option>
                                                    <option value="দ্বিতীয় সাময়িক পরীক্ষা">দ্বিতীয় সাময়িক পরীক্ষা</option>
                                                    <option value="বার্ষিক পরীক্ষা">বার্ষিক পরীক্ষা</option>
                                                </select>
                                                @error('exam_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        
                                            <!-- Phone Number -->
                                            <div class="mb-3">
                                                <label for="transaction_number" class="form-label fs-5">মোবাইল নাম্বার</label>
                                                <input type="tel" class="form-control @error('transaction_number') is-invalid @enderror" id="transaction_number" name="transaction_number" placeholder="১১ সংখ্যার ফোন নাম্বার লিখুন" pattern="[0-9]{11}" required>
                                                @error('transaction_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        
                                            <!-- Student Name -->
                                            <div class="mb-3">
                                                <label for="student_name" class="form-label fs-5">পরীক্ষার্থীর নাম</label>
                                                <input type="text" class="form-control" id="student_name" name="student_name" placeholder="পুরো নাম লিখুন" minlength="3" maxlength="15" required>
                                            </div>
                                        
                                            <!-- Class Name -->
                                            <div class="mb-3">
                                                <label class="form-label fs-5">ক্লাসের নাম</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="প্লে জামাত" required>
                                                    <label class="form-check-label">প্লে জামাত</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="নার্সারি জামাত">
                                                    <label class="form-check-label">নার্সারি জামাত</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="প্রথম জামাত">
                                                    <label class="form-check-label">প্রথম জামাত</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="দ্বিতীয় জামাত">
                                                    <label class="form-check-label">দ্বিতীয় জামাত</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="তৃতীয় জামাত">
                                                    <label class="form-check-label">তৃতীয় জামাত</label>
                                                </div>
                                                <div class="form-check">
                                                    <h6 class="text-primary">হিফয বিভাগ</h6>
                                                    <input class="form-check-input" type="radio" name="class_name" value="নাজেরা বিভাগ">
                                                    <label class="form-check-label">নাজেরা বিভাগ</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="class_name" value="হিফয বিভাগ">
                                                    <label class="form-check-label">হিফয বিভাগ</label>
                                                </div>
                                                <!-- Add more radio options as needed -->
                                            </div>
                                            <!-- Submit Button -->
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
    
        <section id="advirtise">
            <div class="container align-items-center">
                <div class="card" id="alertMassage" style="font-family: Kalpurush;">
                    <div class="card-body">
                        <p class="fs-4 text-primary">
                            আল্লাহ সুবহানাহু ওয়া তা'আলা বলেন, ‘যারা আল্লাহর পথে তাদের সম্পদ ব্যয় করে, তাদের উপমা একটি বীজের মত, যা উৎপন্ন করল সাতটি শীষ, প্রতিটি শীষে রয়েছে একশ’ দানা। আর আল্লাহ যাকে চান তার জন্য বাড়িয়ে দেন। আর আল্লাহ প্রাচুর্যময়, সর্বজ্ঞ’।  <br>
                         (সূরা বাকারা, আয়াত ২৬১)
                        </p>
                        <p class="fs-4 text-primary">
                            আবূ হুরাইরাহ (রাঃ) হতে বর্ণিত। নবী (সাল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম) বলেছেনঃ অর্থাৎ ‘প্রতিদিন সকালে দু’জন ফেরেশতা অবতরণ করেন। তাঁদের একজন বলেন, হে আল্লাহ! দাতাকে তার দানের উত্তম প্রতিদান দিন আর অপরজন বলেন, হে আল্লাহ! কৃপণকে ধ্বংস করে দিন। <br> (সহীহ্ বুখারী, হাদিস নং ১৪৪২)
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection