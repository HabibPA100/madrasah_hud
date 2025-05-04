<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index(){
        $results = Result::where('class_name','play')->latest()->get();
        return view('frontend.exam_result.play_jamat', compact('results'));
    }
}
