<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class HifjoController extends Controller
{
    public function index(){
        $results = Result::where('class_name', 'hifzo')->latest()->get();
        return view('frontend.exam_result.hifjo_bivag', compact('results'));
    }
}
