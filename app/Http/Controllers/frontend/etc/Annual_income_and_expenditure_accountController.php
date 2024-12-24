<?php

namespace App\Http\Controllers\frontend\etc;

use App\Http\Controllers\Controller;
use App\Models\Add_New_Annual_Account;
use App\Models\TotalAmount;
use Illuminate\Http\Request;

class Annual_income_and_expenditure_accountController extends Controller
{
    public function index()
    {
        $Total = TotalAmount::all();
        $Post = Add_New_Annual_Account::orderBy('id', 'desc')->get(); // Variable name corrected to plural form for clarity
        return view('frontend.etc.annualIncomeOfYear', compact('Post', 'Total'));
    }
}
