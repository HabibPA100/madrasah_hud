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
                <h1 class="text-center resultYearsTextAnimation">প্রথম শ্রেণী এর রেজাল্ট ২০২৪</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1ote-yLo0Vvi87qFPsPmPW0WBG_JhaJgN/preview" width="640" height="480" allow="autoplay"></iframe>
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
                <h1 class="text-center resultYearsTextAnimation">প্রথম শ্রেণী এর রেজাল্ট ২০২৩</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1dCL8LTxWLvewoB2E4OPxVzDUtgQ9LF3j/preview" width="640" height="480" allow="autoplay"></iframe>
                  </div>
                </div>
              </div>  
        </div>
    </div>
</section> 
@endsection