<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class NarsaryController extends Controller
{
    public function index(){
        $results = Result::where('class_name','narsary')->latest()->get();
        return view('frontend.exam_result.narsary_jamat', compact('results'));
    }
}
