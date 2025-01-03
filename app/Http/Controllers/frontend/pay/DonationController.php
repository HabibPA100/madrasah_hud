<?php

namespace App\Http\Controllers\frontend\pay;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index(){
        return view('frontend.pay.Donation');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'transaction_number' => 'required',
            'donor_name' => 'required|string|min:3|max:15',
            'donor_contact' => 'required|string|min:10|max:30',
        ]);

        // Store data in the database
        Donation::create([
            'amount' => $request->input('amount'),
            'transaction_number' => $request->input('transaction_number'),
            'donor_name' => $request->input('donor_name'),
            'donor_contact' => $request->input('donor_contact'),
        ]);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Donation successfully submitted.');
    }
    
}
