<?php

namespace App\Http\Controllers\frontend\admin;

use App\Models\Donor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Post = Donor::orderBy('id', 'desc')->get(); // Variable name corrected to plural form for clarity
        return view('frontend.admin.donor.index', compact('Post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.admin.donor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'donor_name' => 'required',
            'donor_type' => 'required',
        ]);

        Donor::create([
            'donor_name' => $request->donor_name,
            'donor_type' => $request->donor_type,
        ]);

        return redirect()->route('donor.index')->with('success', 'Donor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $show = Donor::findOrFail($id); // Using findOrFail for better error handling
        return view('frontend.admin.donor.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Donor::findOrFail($id); // Variable renamed for consistency
        return view('frontend.admin.donor.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'donor_name' => 'required',
            'donor_type' => 'required',
        ]);

        $post = Donor::findOrFail($id);
        $post->update($validatedData); // Corrected logic: no need for Post::create() in update

        return redirect()->route('donor.index')->with('success', 'Donor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Donor::findOrFail($id);
        $post->delete(); // Corrected logic: use delete() on the model instance

        return redirect()->route('donor.index')->with('success', 'Donor has been deleted.');
    }
}
