<?php

namespace App\Http\Controllers\frontend\user;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Zakat;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $userDonation =  Donation::where('donor_contact', Auth::user()->phone)->get();
        $zakat =  Zakat::where('donor_contact', Auth::user()->phone)->get();
        return view('dashboard', compact('userDonation', 'zakat'));
    }
}
