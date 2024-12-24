<?php

namespace App\Http\Controllers\frontend\admin;

use App\Http\Controllers\Controller;
use App\Models\Admission_Forms;
use App\Models\AdmissionFeePayment;
use App\Models\Contact;
use App\Models\Donation;
use App\Models\ExamFee;
use App\Models\StudentSalary;
use App\Models\User;
use App\Models\Zakat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    // Retrieve all student information, ordered by 'id' in descending order
    $student_info = Admission_Forms::orderBy('id', 'desc')->get();

    // Pass the variable name 'student_info' to the compact function
    return view('frontend.admin.dashboard', compact('student_info'));
}
public function user(){
    $user_data = User::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.user_list', compact('user_data'));
}
public function exam(){
    $examFee = ExamFee::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.exam_fees', compact('examFee'));
}
public function admission_fee(){
    $admissionFee = AdmissionFeePayment::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.admission_fee', compact('admissionFee'));
}
public function salary(){
    $Salary = StudentSalary::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.student_salary', compact('Salary'));
}
public function contact(){
    $contact = Contact::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.contact', compact('contact'));
}
public function donation(){
    $Donation = Donation::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.donation', compact('Donation'));
}
public function zakat(){
    $zakat = Zakat::orderBy('id', 'desc')->get();
    return view('frontend.admin.partial.zakat', compact('zakat'));
}
}
