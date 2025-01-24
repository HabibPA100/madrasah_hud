<?php
namespace App\Http\Controllers\frontend;

use App\Models\Admission_Forms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admissionController extends Controller
{
    public function index()
    {
        return view('frontend.admission');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'studentName' => 'required|string|min:5|max:30',
            'studentDoB' => 'required|date',
            'birthCertificate' => 'required|digits:17',
            'father' => 'required|string|min:5|max:30',
            'fNidNumber' => 'required|digits_between:10,17',
            'fatherDoB' => 'required|date',
            'fatherOccupation' => 'required|string|min:4|max:15',
            'mother' => 'required|string|min:5|max:30',
            'mNidNumber' => 'required|digits_between:10,17',
            'motherDoB' => 'required|date',
            'motherOccupation' => 'required|string|min:4|max:15',
            'nationality' => 'required|string',
            'phone' => 'required|max:14',
            'permanentAddress' => 'required|string|min:15|max:255',
            'currentAddress' => 'required|string|max:255',
            'class_name' => 'required|string',
            'referName' => 'nullable|string',
            'connectionWithRefer' => 'nullable|string',
            'referAddress' => 'nullable|string',
        ]);
    
        Admission_Forms::create($request->all());
    
        return redirect()->route('admission.fee')->with('success', 'আপনার ভর্তি ফরমটি সঠিক ভাবে গ্রহণ করা হয়েছে। ভর্তি ফি পরিশোধ করুন!');
    }
    

}
