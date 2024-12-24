<div class="container">
    <div class="row">
    <!-- Student Salary Data -->
        <div class="col-lg-4">
            <h3 class="text-center">মাসিক বেতন</h3>
            @if($studentSalaries->isNotEmpty())
            @foreach($studentSalaries as $salary)
                <div class="card my-2 p-2">
                    <table>
                        <tr>
                            <td> 
                                <p class="fs-5"> মাসিক বেতনঃ- <mark>{{ $salary->amount }} টাকা</mark> </p>
                                <p class="fs-5"> মাসের নামঃ- <mark> {{ $salary->month_name }} </mark></p>
                                <p class="fs-5"> প্রদানকারীর নাম্বারঃ- <mark> {{ $salary->transaction_number }} </mark> </p>
                                <p class="fs-5"> শিক্ষার্থীর নামঃ- <mark> {{ $salary->student_name }} </mark> </p>
                                <p class="fs-5"> ক্লাসের নামঃ- <mark> {{ $salary->class_name }} </mark> </p>
                            </td>
                        </tr>
                </table>
                </div>
                @endforeach
            @else
                <p class="text-center">No Salary Data Found</p>
            @endif
        </div>
            <!-- Admission Data -->
        <div class="col-lg-4">
            <h3 class="text-center">ভর্তি ফি</h3>
            @if($admissionFee->isNotEmpty())
            @foreach($admissionFee as $donor)
                <div class="card my-2 p-2">
                    <table>
                        <tr>
                            <td> 
                               <p class="fs-5">ভর্তি ফিঃ- <mark> {{ $donor->amount }} </mark> </p>
                               <p class="fs-5">ট্রানজেকশন আইডিঃ- <mark> {{ $donor->transaction_number }} </mark></p>
                               <p class="fs-5">প্রদানকারীঃ- <mark>  {{ $donor->donor_name }} </mark></p>
                               <p class="fs-5">প্রদানকারীর নাম্বারঃ- <mark>{{ $donor->donor_contact }} </mark></p>
                            </td>
                        </tr>
                </table>
                </div>
                @endforeach    
            @else
                <p class="text-center">No Admission Fee Data Found</p>
            @endif
        </div>
        <!-- Exam Fee Data -->
        <div class="col-lg-4">
            <h3 class="text-center"> পরীক্ষার ফি </h3>
            @if($examFees->isNotEmpty())
            @foreach($examFees as $examFee)
                <div class="card my-2 p-2">
                    <table>
                        <tr>
                            <td> 
                                <p class="fs-5"> টাকার পরিমাণঃ- <mark> {{ $examFee->amount }} </mark></p>
                                <p class="fs-5"> পরীক্ষার নামঃ- <mark> {{ $examFee->exam_name }} </mark></p>
                                <p class="fs-5"> প্রদানকারী নাম্বারঃ- <mark> {{ $examFee->transaction_number }} </mark></p>
                                <p class="fs-5"> শিক্ষার্থীর নামঃ- <mark> {{ $examFee->student_name }} </mark></p>
                                <p class="fs-5"> ক্লাসের নামঃ- <mark> {{ $examFee->class_name }} </mark></p>
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach    
            @else
                <p class="text-center">No Exam Fee Data Found</p>
            @endif
        </div>
        <!-- Donation Information -->
        <div class="col-lg-4">
            <h3 class="text-center"> আপনার সাধারণ দান </h3>
            @if($parentDonation->isNotEmpty())
            @foreach($parentDonation as $donation)
                <div class="card my-2 p-2">
                    <table>
                        <tr>
                            <td> 
                                <p class="fs-5">Donation Info</p>
                                <p class="fs-5"> টাকার পরিমাণঃ- <mark> {{ $donation->amount }} </mark></p>
                                <p class="fs-5"> দাতার নামঃ- <mark> {{ $donation->donor_name }} </mark></p>
                                <p class="fs-5"> ট্রানজেকশন আইডিঃ- <mark> {{ $donation->transaction_number }} </mark></p>
                                <p class="fs-5"> মোবাইল নাম্বারঃ- <mark> {{ $donation->donor_contact }} </mark></p>
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach    
            @else
                <p class="text-center">No Donation Data Found</p>
            @endif
        </div>
        <!-- Donation Information -->
        <div class="col-lg-4">
            <h3 class="text-center"> আপনার যাকাত ফান্ড </h3>
            @if($zakat->isNotEmpty())
            @foreach($zakat as $zakatFund)
                <div class="card my-2 p-2">
                    <table>
                        <tr>
                            <td> 
                                <p class="fs-5">Zakat Info</p>
                                <p class="fs-5"> টাকার পরিমাণঃ- <mark> {{ $zakatFund->amount }} </mark></p>
                                <p class="fs-5"> দাতার নামঃ- <mark> {{ $zakatFund->donor_name }} </mark></p>
                                <p class="fs-5"> ট্রানজেকশন আইডিঃ- <mark> {{ $zakatFund->transaction_number }} </mark></p>
                                <p class="fs-5"> মোবাইল নাম্বারঃ- <mark> {{ $zakatFund->donor_contact }} </mark></p>
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach    
            @else
                <p class="text-center">No Donation Data Found</p>
            @endif
        </div>
    </div>
</div>