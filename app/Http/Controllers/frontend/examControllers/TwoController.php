<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function index(){
        $results = Result::where('class_name','two')->latest()->get();
        return view('frontend.exam_result.two', compact('results'));
    }
}
