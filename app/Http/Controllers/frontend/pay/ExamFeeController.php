<?php

namespace App\Http\Controllers\frontend\pay;

use App\Models\ExamFee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ExamFeeController extends Controller
{
    public function index(){
        return view('frontend.pay.examFee');
    }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'amount' => 'required|integer|min:100',
        'exam_name' => 'required|string',
        'transaction_number' => 'required',
        'student_name' => 'required|string|min:3|max:15',
        'class_name' => 'required|string',
    ]);

        ExamFee::create([
            'amount' => $request->input('amount'),
            'exam_name' => $request->input('exam_name'),
            'transaction_number' => $request->input('transaction_number'),
            'student_name' => $request->input('student_name'),
            'class_name' => $request->input('class_name'),
        ]);

        return redirect()->back()->with('success', 'ধন্যবাদ আপনার অনুরোধটি গ্রহণ করা হয়েছে!');

}


}
