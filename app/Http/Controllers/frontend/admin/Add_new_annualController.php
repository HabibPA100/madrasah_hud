<?php

namespace App\Http\Controllers\frontend\admin;

use App\Http\Controllers\Controller;
use App\Models\Add_New_Annual_Account;
use Illuminate\Http\Request;

class Add_new_annualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Post = Add_New_Annual_Account::orderBy('id', 'desc')->get(); // Variable name corrected to plural form for clarity
        return view('frontend.admin.annual_accounts_add.index', compact('Post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.admin.annual_accounts_add.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year_name' => 'required',
            'income' => 'required',
            'cost' => 'required',
        ]);

        Add_New_Annual_Account::create([
            'year_name' => $request->year_name,
            'income' => $request->income,
            'cost' => $request->cost,
        ]);

        return redirect()->route('account.index')->with('success', 'Annual Account created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Add_New_Annual_Account::findOrFail($id); // Using findOrFail for better error handling
        return view('frontend.admin.annual_accounts_add.show', compact('show'));
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
        $edit = Add_New_Annual_Account::findOrFail($id);
        return view('frontend.admin.annual_accounts_add.edit', compact('edit'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'year_name' => 'required',
            'income' => 'required',
            'cost' => 'required',
        ]);

        $post = Add_New_Annual_Account::findOrFail($id);
        $post->update($validatedData); // Corrected logic: no need for Post::create() in update

        return redirect()->route('account.index')->with('success', 'Annual Account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Add_New_Annual_Account::findOrFail($id);
        $post->delete(); // Corrected logic: use delete() on the model instance

        return redirect()->route('account.index')->with('success', 'Annual Account has been deleted.');
    }
}
