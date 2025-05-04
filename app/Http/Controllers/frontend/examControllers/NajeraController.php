<?php

namespace App\Http\Controllers\frontend\examControllers;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class NajeraController extends Controller
{
    public function index(){
        $results = Result::where('class_name', 'najera')->latest()->get();
        return view('frontend.exam_result.najera_bivag', compact('results'));
    }
}
