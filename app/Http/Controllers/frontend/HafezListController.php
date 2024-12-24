<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HafezListController extends Controller
{
   public function index(){
    return view('frontend.etc.hafez_list');
   }
}
