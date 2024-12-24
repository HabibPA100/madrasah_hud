<?php

namespace App\Http\Controllers\frontend\admin;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorListController extends Controller
{
    public function donor_name_list()
    {
        $Post = Donor::orderBy('id', 'desc')->get(); // Variable name corrected to plural form for clarity
        return view('frontend.etc.donor_name', compact('Post'));
    }
}
