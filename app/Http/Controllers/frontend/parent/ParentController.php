<?php

namespace App\Http\Controllers\frontend\parent;

use App\Models\ExamFee;
use Illuminate\Http\Request;
use App\Models\StudentSalary;
use App\Models\AdmissionFeePayment;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Zakat;
use Illuminate\Support\Facades\Auth;

class ParentController extends Controller
{
    public function index()
    {
        $parentDonation = Donation::where('donor_contact', Auth::user()->phone)->get();
        $zakat = Zakat::where('donor_contact', Auth::user()->phone)->get();
        // Donor Data Fetch
        $admissionFee = AdmissionFeePayment::where('donor_contact', Auth::user()->phone)->get();

        // Exam Fee Data Fetch
        $examFees = ExamFee::where('transaction_number', Auth::user()->phone)->get();

        // Student Salary Data Fetch
        $studentSalaries = StudentSalary::where('transaction_number', Auth::user()->phone)->get();

        // Return to View
        return view('frontend.parent.dashboard', compact(
            ['admissionFee', 'examFees', 'studentSalaries','parentDonation', 'zakat']
        ));
    }
}
