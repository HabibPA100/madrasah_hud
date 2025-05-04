<?php

namespace App\Http\Controllers\frontend\admin;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class addResultController extends Controller
{
    public function create(){
        return view('frontend.admin.add_result.create_result');
    }

    public function store(Request $request)
   {
        $request->validate([
            'class_name' => 'required',
            'result_publish_year_name' => 'required',
            'google_drive_link' => 'required',
        ]);

        Result::create([
            'class_name' => $request->class_name,
            'result_publish_year_name' => $request->result_publish_year_name,
            'google_drive_link' => $request->google_drive_link,
        ]);

        return back()->with('success', 'রেজাল্ট সফলভাবে যুক্ত হয়েছে!');
  }
}
