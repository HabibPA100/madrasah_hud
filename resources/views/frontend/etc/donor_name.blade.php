@extends('frontend.layout.main')
<title>All Donor Name List Here</title>

    @section('main-contant')
    <div class="container my-3">
        <h4 class="text-center text-success">All Donor Name Is Here</h4>
        <div class="card">
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark text-dark fs-4">
                                <tr>
                                    <th>Id</th>
                                    <th>দাতার নাম</th>
                                    <th>দাতার ধরণ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Post as $post)
                                <tr class="text-success fs-5">
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->donor_name }}</td>
                                    <td>{{ $post->donor_type }}</td>
                                </tr>
                                @endforeach
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব লোকমান সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ছাইফুল ইসলাম</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ইয়াকুব নদভী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>তাউহিদুল ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ফারুক সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>আঃ কাদির জিলানী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>সামীম স্যার</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ডা. নূরে আলম মুন্সী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>আঃ গফুর সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আবু ছাইদ</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব শামছুল হক</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব হুমায়ন কবির</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মিরাজ পার্টোয়ারী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব নজরুল পাটোয়ারী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব পারুল পাটোয়ারী </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মতিউর রহমান বাবুল</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আনোয়ার হোসেন</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব বেলাল হোসাইন</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব ওসমান গণী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব লাবলু</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মমিনুল হক</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব গিয়াস উদ্দিন সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব গাজী মোস্তফা কামাল</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাবা ছামিয়া আক্তার</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাবা নাসিমা বেগম</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব সাজেদ মোল্লা</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব রেজাউল করিম</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ হালিম সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আমির হোসেন মাষ্টার </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব লোকমান হোসেন</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব জামাল উদ্দিন সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব সিরাজুল ইসলাম মোল্লা</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব নূর মোহাম্মদ</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>প্রফেস্যার বেলাল সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আবুল হাসেম সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>হাজী নুরুল আলম</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>মামা</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>কাউছার ভাই জামাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ডা. মহিন সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব রবিন সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মাসুদ মিয়াজী সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব জাহাঙ্গীর সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>আলি ভাই বন্ধু</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ইয়াসিন ভাই ব্যাবসায়ী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব জাকির ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব খলিলুর রহমান</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব নূরুল ইসলাম সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আহম্মদ শরীফ চৌদুরী </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ইউছুফ ভাই কুমিল্লা</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>দর্পণ ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>মনির ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>ইসমাঈল ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>আলি হোসেন মজুমদার</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>রাসেল মুন্সী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>সামীম মুন্সী</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>আবু তাহের ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মামুন খান </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব নূরুল ইসলাম (ক্যাশিয়ার)</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব দেলোয়ার ভাই (পুলিশ)</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব বাইজিদ সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব শফিকুল ইসলাম</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আরিফুর রহমান </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব নাজমুল সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ আউয়্যাল সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব সোলাইমান সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ আউয়াল সাহেব</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>মাওঃ ছাইদ ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব জাবেদ ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব হারুন ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব বাবুল ভাই</td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব অলিউল্লাহ সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ হাকিম ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আতিক সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব শফিকুল ইসলাম </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব ইব্রাহীম খলিল সরকার </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ আহাদ ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ হক ভাই বরিশাল </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব সাব্বির আহম্মেদ </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব আঃ জলিল সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td>জনাব মাছুম বিল্লাহ প্রধান </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> বাবু ভাই ও কম্পিউটার </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> বেলায়েত স্যার </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> শাহ আলম ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জেরিনের বাবা </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আঃ বাতেন ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> শরিফ সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> রানা ভাই (মাহিন সিদিকি বাবা) </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> মিলন ভাই (নেতা মিয়ার বাজার) </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব নাসির মুন্সী </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আলমঙ্গীর ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> শাহ আলম ভাই (খেলাঘর)  </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আলমঙ্গীর ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> মুস্তফা সুন্সী </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> নুরুল ইসলাম খাদেম সাহেব </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আঃ রাহিম ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> খালেদ ভাই মুতাওয়াল্লি </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আমিন ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> বেলায়েত সারের শশুর </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব আমিরুল ইসলাম (হামিম) </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব আবু রায়হান </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব আলি ভাই </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব শফি উদ্দিন আহম্মেদ </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব রাশেদুল ইসলাম </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> আঃ ছালাম (ওসমান) </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                                <tr class="text-success fs-5">
                                    <td>Id</td>
                                    <td> জনাব আঃ ছাত্তার সাহেব  </td>
                                    <td>অনির্দিষ্ট কাল</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    @endsection