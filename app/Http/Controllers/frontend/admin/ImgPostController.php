<?php

namespace App\Http\Controllers\frontend\admin;

use Illuminate\Http\Request;
use App\Models\AdminImagePost;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImgPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = AdminImagePost::orderBy('id', 'desc')->get();
        return view('frontend.admin.img_post.index', compact('posts'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('frontend.admin.img_post.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'image.max' => 'ইমেইজের সাইজ ২ এমবি এর বেশি হতে পারবে না !!!'
        ]
    );

        $post = new AdminImagePost();
        $post->title = $request->title;
        $post->description = $request->description;

        $post->user_id = Auth::id(); // Attach the logged-in user's ID

        // Handle image upload
        if ($request->hasFile('image')) {
            $post->image = $this->handleImageUpload($request->file('image'));
        }

        $post->save();

        return redirect()->route('admin-image-post.index')->with('success', 'Post created successfully.');
    }

    // Display the specified resource
    public function show($id)
    {
        $show = AdminImagePost::findOrFail($id);
        return view('frontend.admin.img_post.show', compact('show')); 
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $edit = AdminImagePost::findOrFail($id);
        return view('frontend.admin.img_post.edit', compact('edit'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = AdminImagePost::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $this->handleImageUpload($request->file('image'));
        }

        $post->save();

        return redirect()->route('admin-image-post.index')->with('success', 'Post updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $post = AdminImagePost::findOrFail($id);

        // Delete image if exists
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('admin-image-post.index')->with('success', 'Post deleted successfully.');
    }

    /**
     * Handle the image upload process.
     */
    private function handleImageUpload($image)
    {
        $extension = $image->getClientOriginalExtension();
        $filename = now()->format('Y-m-d_H-i-s') . '.' . $extension;
        return $image->storeAs('user_posts', $filename, 'public');
    }
}
