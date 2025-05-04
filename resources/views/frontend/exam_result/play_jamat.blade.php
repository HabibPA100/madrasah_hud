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
                <h1 class="text-center resultYearsTextAnimation">প্লে জামাত এর রেজাল্ট ২০২৪</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1S25CQdoDWh6XvDtk7puUJs9sUnRa3d1r/preview" width="640" height="480" allow="autoplay"></iframe>
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
                <h1 class="text-center resultYearsTextAnimation">প্লে জামাত এর রেজাল্ট ২০২৩</h1>
            </div>
            <div class="container mt-5">
                <div class="card text-center">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://drive.google.com/file/d/1avAzPx9B7tqF94prnm55HBpwXup1iLMY/preview" width="640" height="480" allow="autoplay"></iframe>
                  </div>
                </div>
              </div>  
        </div>
    </div>
</section> 
@endsection