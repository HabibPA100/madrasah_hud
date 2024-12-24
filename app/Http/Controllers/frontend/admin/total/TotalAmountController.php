<?php

namespace App\Http\Controllers\frontend\admin\total;

use App\Http\Controllers\Controller;
use App\Models\TotalAmount;
use Illuminate\Http\Request;

class TotalAmountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Total = TotalAmount::orderBy('id', 'desc')->get(); // Variable name corrected to plural form for clarity
        return view('frontend.admin.annual_accounts_add.total_amount.index', compact('Total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.admin.annual_accounts_add.total_amount.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'total_income' => 'required',
            'total_cost' => 'required',
            'total_debt' => 'required',
        ]);

        TotalAmount::create([
            'total_income' => $request->total_income,
            'total_cost' => $request->total_cost,
            'total_debt' => $request->total_debt,
        ]);

        return redirect()->route('total.index')->with('success', 'Annual Account created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = TotalAmount::findOrFail($id); // Using findOrFail for better error handling
        return view('frontend.admin.annual_accounts_add.total_amount.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $edit = Add_New_Annual_Account::findOrFail($id); // Variable renamed for consistency
    //     return view('frontend.admin.annual_accounts_add.edit', compact('edit'));
    // }
    public function edit(string $id){
        $edit = TotalAmount::findOrFail($id);
        return view('frontend.admin.annual_accounts_add.total_amount.edit', compact('edit'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'total_income' => 'required',
            'total_cost' => 'required',
            'total_debt' => 'required',
        ]);

        $post = TotalAmount::findOrFail($id);
        $post->update($validatedData); // Corrected logic: no need for Post::create() in update

        return redirect()->route('total.index')->with('success', 'Annual Account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = TotalAmount::findOrFail($id);
        $post->delete(); // Corrected logic: use delete() on the model instance

        return redirect()->route('total.index')->with('success', 'Annual Account has been deleted.');
    }
}
