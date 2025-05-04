<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ThreeController extends Controller
{
    public function index(){
        $results = Result::where('class_name','three')->latest()->get();
        return view('frontend.exam_result.three', compact('results'));
    }
}
