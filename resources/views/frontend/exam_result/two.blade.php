@extends('frontend.layout.main')
@section('main-contant')
@foreach ($results as $result)
<section>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="text-center resultYearsTextAnimation"> {{ $result->result_publish_year_name }}</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="{{ $result->google_drive_link }}" width="640" height="480" allow="autoplay"></iframe>
                  </div>
                </div>
              </div>  
        </div>
    </div>
</section>
@endforeach
<section>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="text-center resultYearsTextAnimation">দ্বিতীয় শ্রেণী এর রেজাল্ট ২০২৪</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1JZSoyH3nMc988xotwdGxAr4NF1T5aTlf/preview" width="640" height="480" allow="autoplay"></iframe>
                  </div>
                </div>
              </div>  
        </div>
    </div>
</section> 
<section>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h1 class="text-center resultYearsTextAnimation">দ্বিতীয় শ্রেণী এর রেজাল্ট ২০২৩</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1dxfM0xJGyeFkh4m56F8YCv-G_Sls1mv_/preview" width="640" height="480" allow="autoplay"></iframe>
                  </div>
                </div>
              </div>  
        </div>
    </div>
</section> 
@endsection