@extends('frontend.layout.main')
<title>Annual Accounts</title>

@section('main-contant')
<section>
    @foreach ($Total as $TotalAmount)
    <div class="container">
      <h3 class="text-center text-danger mt-2">এই পর্যন্ত মাদ্রাসার মোট আয় <strong class="text-success">= {{ $TotalAmount->total_income }}</strong></h3>
      <h3 class="text-center text-success">এই পর্যন্ত মাদ্রাসার মোট ব্যয় <strong class="text-info">= {{ $TotalAmount->total_cost }} </strong></h3>
      <h3 class="text-center" style="color: rgb(247, 0, 255)">এই পর্যন্ত মাদ্রাসার মোট ঋণ <strong style="color: red">
        = {{ $TotalAmount->total_debt }}</strong></h3>
      </div>
    @endforeach
</section>
<hr>
<section>
  <div class="container mt-4">
    @foreach ($Post as $post)
    <div class="table-responsive">
      <h2 class="text-center my-4">বাৎসরিক আয়-ব্যয়ের হিসাব - {{ $post->year_name }}</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Update Time</th>
                    <th>এক বছরে মোট আয় (৳)</th>
                    <th>এক বছরে মোট ব্যয় (৳)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $post->created_at}}</td>
                    <td>{{ $post->income }}</td>
                    <td>{{ $post->cost }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
</div>
</section>
<hr>
<div class="container my-2">
<!-- Total all in one -->
<section id="passing_year2022">
    <h2 class="text-center mb-4" style="color: red">১৩ থেকে ২৪ পর্যন্ত বাৎসরিক আয়-ব্যয়ের মোট হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center text-danger">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-success"> ২০১৩ - ২০২৪ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th> আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ভর্তি বাবদ</td>
            <td>৮১৩,৯৬৫</td>
            <td>প্রাতিষ্ঠানিক ভাড়া বাবদ</td> 
            <td> ২৮,৭৭,৬১৭ </td>
          </tr>
          <tr>
            <td>আবাসিক বোর্ডিং </td>
            <td>২৬,০৭,৯৬৪</td>
            <td>শিক্ষক বেতন</td>
            <td> ৫১,১৫,৬৪৩ </td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td> ৪০,৩৫,১৫৫ </td>
            <td>বোর্ডিং  বাবদ</td>
            <td> ৩১,৩১,৬২৬ </td>
          </tr>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>১৬,১৬,১০৪</td>
            <td>অন্যান্য</td>
            <td>৫,৩১,৩৫২</td>
          </tr>
        </tbody>
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>৯০,৭৩,১৮৮</strong></td>
            <td><strong>মোট ব্যয়</strong></td> 
            <td><strong> ১১,৬৫৬,২৩৮ </strong></td>
          </tr>
          <tr>
            <td colspan="12">
              <h3 class="text-center" style="color: rgb(247, 0, 255)">এই পর্যন্ত মাদ্রাসার মোট ঋণ <strong style="color: red">
                = ২৫,৮৩,০৫০ </strong></h3>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
</section>
<!-- 2024 -->
<section id="passing_year2022">
    <h2 class="text-center mb-4">বাৎসরিক আয়-ব্যয়ের হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-warning"> ২০২৪ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th> আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ভর্তি বাবদ</td>
            <td>৬৮,৩৫০</td>
            <td>প্রাতিষ্ঠানিক ভাড়া বাবদ</td> 
            <td> ৩,৯৮,২২২ </td>
          </tr>
          <tr>
            <td>আবাসিক বোর্ডিং </td>
            <td>১,৪৬,৩০০</td>
            <td>শিক্ষক বেতন</td>
            <td> ৭,১৬,৯৬৮ </td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td>৭,৭০,৪৫০</td>
            <td>বোর্ডিং  বাবদ</td>
            <td> ৫,৬৮,৩০৫ </td>
          </tr>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>২,৬৭,৯০০</td>
            <td>০০০</td>
            <td>০০০</td>
          </tr>
        </tbody>
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>১২,৫৩,০০০</strong></td>
            <td><strong>মোট ব্যয়</strong></td> 
            <td><strong> ১৬,৮৩,৪৯৫ </strong></td>
          </tr>
        </tfoot>
      </table>
    </div>
</section>
<!-- 2023 -->
<section id="passing_year2022">
    <h2 class="text-center mb-4">বাৎসরিক আয়-ব্যয়ের হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-warning">২০২৩ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th> আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ভর্তি বাবদ</td>
            <td>৮,৫,৮০০</td>
            <td>প্রাতিষ্ঠানিক ভাড়া বাবদ</td>
            <td>৩,৭১,৬০৩</td>
          </tr>
          <tr>
            <td>আবাসিক বোর্ডিং </td>
            <td>১,২৬,৪০০</td>
            <td>শিক্ষক বেতন</td>
            <td>৬,৮১,৭৪৪</td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td>৬,৩৯,০৫০</td>
            <td>বোর্ডিং  বাবদ</td>
            <td>৪,৪৮,১৯৬</td>
          </tr>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>৩,১১,৩৭০</td>
            <td>০০০</td>
            <td>০০০</td>
          </tr>
        </tbody>
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>১১,৬২,৬২০</strong></td>
            <td><strong>মোট ব্যয়</strong></td>
            <td><strong>১৫,০১,৫৪৩</strong></td>
          </tr>
        </tfoot>
      </table>
    </div>
</section>
<!-- 2022 -->
<section id="passing_year2023">
    <h2 class="text-center mb-4">বাৎসরিক আয়-ব্যয়ের হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-warning">২০২২ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th> আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ভর্তি বাবদ</td>
            <td>৯৮,৯০০</td>
            <td>প্রাতিষ্ঠানিক ভাড়া বাবদ</td>
            <td>৩,৫৭,৯১৬</td>
          </tr>
          <tr> 
            <td>আবাসিক বোর্ডিং </td>
            <td>১,৫৫,৪৫০</td>
            <td>শিক্ষক বেতন</td>
            <td>৭,১৪,২৬১</td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td>৬,১১,৪৩০</td>
            <td>বোর্ডিং  বাবদ</td>
            <td>৩,৫৪,৯৬৬</td>
          </tr>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>২,০৪,৭২০</td>
            <td>এড লিখা বাবদ</td>
            <td>৮৬,৮৮৫</td>
          </tr>
        </tbody>
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>১০,৭১,৫০০</strong></td>
            <td><strong>মোট ব্যয়</strong></td>
            <td><strong>১৫,১৪,০২৮</strong></td>
          </tr>
        </tfoot>
      </table>
    </div>
</section>
<section id="passing_year2023">
    <h2 class="text-center mb-4">বাৎসরিক আয়-ব্যয়ের হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-warning">২০২১ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th> আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ভর্তি বাবদ</td>
            <td>৯৮,৬৬৫</td>
            <td>প্রাতিষ্ঠানিক ভাড়া বাবদ</td>
            <td>৩,৪৭,৮৭৬</td>
          </tr>
          <tr> 
            <td>আবাসিক বোর্ডিং </td>
            <td>১,৫৮০০০</td>
            <td>শিক্ষক বেতন</td>
            <td>৫,৩৯,৬৪৬</td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td>৪,৭৩,৬৯০</td>
            <td>বোর্ডিং  বাবদ</td>
            <td>২,৬৩,৮৯৫</td>
          </tr>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>১,৩৮,৬৫০</td> 
            <td>০০০</td>
            <td>০০০</td>
          </tr>
        </tbody>
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>৮,৬৯,০০৫</strong></td>
            <td><strong>মোট ব্যয়</strong></td>
            <td><strong>১১,৫১,৪১৭</strong></td>
          </tr>
        </tfoot>
      </table>
    </div>
</section>
<section id="passing_year2023">
    <h2 class="text-center mb-4">বাৎসরিক আয়-ব্যয়ের হিসাব</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center">
        <thead class="table-info">
            <tr>
                <th colspan="12" class="table-warning">২০১৩ থেকে ২০২০ সাল এর হিসাব</th>
            </tr>
          <tr>
            <th>আয়ের উৎস </th>
            <th>আয় (৳)</th>
            <th> ব্যয়ের উৎস </th>
            <th>ব্যয় (৳)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>অনুদান বাবদ</td>
            <td>৬৯,৩,৪৬৪</td>
            <td>শিক্ষক বেতন</td>
            <td>২৪,৬৩,০২৪</td>
          </tr>
          <tr> 
            <td>ভর্তি ফি</td>
            <td>৪,৬২,২৫০</td>
            <td>বোর্ডিং</td>
            <td>১৪,৯৬,২৬৪</td>
          </tr>
          <tr>
            <td>আবাসিক বেতন</td>
            <td>২০,২১,৮১৮</td>
            <td>মোবাইল খরচ</td>
            <td>৪৫,৬৭২</td>
          </tr>
          <tr>
            <td>অনাবাসিক বেতন</td>
            <td>১৫,৪০,৫৩৫</td> 
            <td>পানি,গ্যাস ও বিদ্যুৎ বিল</td>
            <td>১৮,৭,৩৮০</td>
          </tr>
          <tr>
            <td>বিদ্যুৎ ও জেনারেটর</td>
            <td>১১,৬০০</td> 
            <td>অফিস আপ্যায়ন</td>
            <td>৭৬,১৮৫</td>
          </tr>
          <tr>
            <td>০০০</td> 
            <td>০০০</td> 
            <td>ছাপা ও ষ্টেশনারী</td>
            <td>১১,২৮০</td>
          </tr>
          <tr>
            <td>০০০</td> 
            <td>০০০</td> 
            <td>ঘর ভাড়া</td>
            <td>১৪,০২০০০</td>
          </tr>
          <tr>
            <td>০০০</td> 
            <td>০০০</td> 
            <td>আই পি এস খরচ</td>
            <td>৬,৬০০</td>
          </tr>
          <tr>
            <td>০০০</td> 
            <td>০০০</td> 
            <td>পরিষ্কার পরিচ্ছন্ন</td>
            <td>৭,৩৫০</td>
          </tr>
          <tr>
            <td>০০০</td> 
            <td>০০০</td> 
            <td>আসবাবপত্র ক্রয়</td>
            <td>১,১০,০০০</td>
          </tr>
        </tbody> 
        <tfoot class="table-secondary">
          <tr>
            <td><strong>মোট আয়</strong></td>
            <td><strong>৪৭,২৯,৬৬৭</strong></td>
            <td><strong>মোট ব্যয়</strong></td>
            <td><strong>৫৮,০৫,৭৫৫</strong></td> 
          </tr>
        </tfoot>
      </table>
    </div>
</section>
</div>

@endsection