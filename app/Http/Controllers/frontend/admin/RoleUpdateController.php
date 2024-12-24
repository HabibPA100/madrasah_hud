<?php

namespace App\Http\Controllers\frontend\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class RoleUpdateController extends Controller
{
    // Show the edit form for a specific user 
    public function edit(string $id)
    {
        $edit = User::findOrFail($id); // Variable renamed for consistency
        return view('frontend.admin.role.edit', compact('edit'));
       
    }

    // Update the role of a specific user
    public function updateRole(Request $request, string $id)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'role' => 'required|string|in:user,admin,parent,teacher', // Ensure 'user' or 'admin' is selected
        ]);

        // Find the specific user by ID and update their role
        $user = User::findOrFail($id); // Find the user by ID
        $user->role = $validated['role']; // Update the user's role
        $user->save(); // Save the changes

        // Redirect back with a success message
        return redirect()->route('admin.user')->with('status', 'Role updated successfully!');
    }
}
