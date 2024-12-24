<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layout.meta_tag')
    <title>Pay Now!</title>
    <style>
        body {
            /* background-image: linear-gradient(to top right, rgb(180, 42, 42), rgb(190, 112, 125), rgb(66, 66, 150), rgb(192, 192, 119)); */
            font-family: 'Kalpurush', sans-serif;
        }
        .bg-color{-webkit-animation:bg-colorAnim 8s linear infinite alternate both;animation:bg-colorAnim 8s linear infinite alternate both}
        @-webkit-keyframes bg-colorAnim{0%{background:#19dcea}25%{background:#b22cff}50%{background:#ea2222}75%{background:#f5be10}100%{background:#3bd80d}}@keyframes bg-colorAnim{0%{background:#19dcea}25%{background:#b22cff}50%{background:#ea2222}75%{background:#f5be10}100%{background:#3bd80d}}
       .monthlySelarry{
        animation: monthlySalaryAnim 3s ease 0s 1 normal forwards;
       }
       @keyframes monthlySalaryAnim{0%{transform:scale(.5)}100%{transform:scale(1)}}
       .examFee{
        animation: examFeeAnim 2s ease 0s 1 normal forwards;
       }
       @keyframes examFeeAnim{0%{animation-timing-function:ease-in;opacity:0;transform:translateX(250px)}38%{animation-timing-function:ease-out;opacity:1;transform:translateX(0)}55%{animation-timing-function:ease-in;transform:translateX(68px)}100%,72%,90%{animation-timing-function:ease-out;transform:translateX(0)}81%{animation-timing-function:ease-in;transform:translateX(32px)}95%{animation-timing-function:ease-in;transform:translateX(8px)}}
       .admissionFee{
        animation: admissionFeeAnim 2s ease 0s 1 normal forwards;
       }
       @keyframes admissionFeeAnim{0%{animation-timing-function:ease-in;opacity:0;transform:translateY(-250px)}38%{animation-timing-function:ease-out;opacity:1;transform:translateY(0)}55%{animation-timing-function:ease-in;transform:translateY(-65px)}100%,72%,90%{animation-timing-function:ease-out;transform:translateY(0)}81%{animation-timing-function:ease-in;transform:translateY(-28px)}95%{animation-timing-function:ease-in;transform:translateY(-8px)}}
       .sadharonDan{-webkit-animation:sadharonDanAnim 2s ease-in 5s infinite alternate-reverse both;animation:sadharonDanAnim 2s ease-in 5s infinite alternate-reverse both}
        @-webkit-keyframes sadharonDanAnim{0%{-webkit-transform:scale(.5);transform:scale(.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes sadharonDanAnim{0%{-webkit-transform:scale(.5);transform:scale(.5)}100%{-webkit-transform:scale(1);transform:scale(1)}}
    </style>
</head>
<body class="bg-color">
    @include('frontend.layout.nav')
    <section>
        <div class="container mt-4">
            <h1 class="text-center text-light mt-5">Select Your Payment Method!</h1>
            <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="card text-center h-100 p-4 shadow mb-4">
                        <div class="card-header">
                            <h5 class=" text-center "><label for="selectPayMethod" class="fs-5 text-center">পেমেন্টের ধরন নির্বাচন করুন:</label></h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 monthlySelarry">
                                 <a href="{{ route('salary_of_students') }}" class="btn btn-info w-100">
                                    <p class="fs-4 mt-2 text-center">মাসিক বেতন পরিশোধ করুন</p>
                                 </a>
                            </div>
                            <div class="mb-3 examFee">
                                <a href="{{ route('exam.fee') }}" class="btn btn-success w-100">
                                   <p class="fs-4 mt-2 text-center">পরীক্ষার ফি পরিশোধ করুন</p>
                                </a>
                           </div>
                           <div class="mb-3 admissionFee">
                            <a href="{{ route('admission.fee') }}" class="btn btn-danger w-100">
                               <p class="fs-4 mt-2 text-center">ভর্তি ফি পরিশোধ করুন</p>
                            </a>
                            </div>
                            <div class="mb-3 sadharonDan">
                                <a href="{{ route('donation.index') }}" class="btn btn-dark w-100">
                                   <p class="fs-4 mt-2 text-center">অসহায় ছাত্রদের জন্য সাধারণ দান</p>
                                </a>
                            </div>
                            <div class="mb-3 monthlySelarry">
                                <a href="{{ route('zakat') }}" class="btn btn-warning w-100">
                                   <p class="fs-4 mt-2 text-center">জাকাতের একটি অংশ দান</p>
                                </a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   @include('frontend.layout.sm_nav')
   @include('frontend.layout.java_script_link')
</body>
</html>
    

