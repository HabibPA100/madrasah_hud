@extends('frontend.layout.main')
@section('title','Add New Result Here')
@section('main-contant')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">নতুন রেজাল্ট যুক্ত করুন</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.store.result') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="class_name" class="form-label">জামাতের নাম</label>
                            <select name="class_name" id="class_name" class="form-select" required>
                                <option value="hifzo">হিফজ বিভাগ</option>
                                <option value="najera">নাজেরা বিভাগ</option>
                                <option value="one">প্রথম জামাত</option>
                                <option value="two">দ্বিতীয় জামাত</option>
                                <option value="three">তৃতীয় জামাত</option>
                                <option value="play">প্লে জামাত</option>
                                <option value="narsary">নার্সারি জামাত</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="result_publish_year_name" class="form-label"> পরীক্ষা ও বছর</label>
                            <input type="text" name="result_publish_year_name" class="form-control" placeholder="যেমন: প্রথম সাময়িক পরীক্ষা ২০২৪">
                            @error('result_publish_year_name')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="google_drive_link" class="form-label">Google Drive Link</label>
                            <input type="text" name="google_drive_link" class="form-control" placeholder="Google Drive Link">
                            @error('google_drive_link')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
