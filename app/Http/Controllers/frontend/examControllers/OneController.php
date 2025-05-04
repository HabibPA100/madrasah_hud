<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class OneController extends Controller
{
    public function index(){
        $results = Result::where('class_name', 'one')->latest()->get();
        return view('frontend.exam_result.one', compact('results'));
    }
}
