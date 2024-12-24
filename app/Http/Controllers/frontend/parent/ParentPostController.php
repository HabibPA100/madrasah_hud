<?php

namespace App\Http\Controllers\frontend\parent;

use App\Models\ParentPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ParentPostController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $posts = ParentPost::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('frontend.parent.posts.index', compact('posts'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('frontend.parent.posts.create');
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

        $post = new ParentPost();
        $post->title = $request->title;
        $post->description = $request->description;

        $post->user_id = Auth::id(); // Attach the logged-in user's ID

        // Handle image upload
        if ($request->hasFile('image')) {
            $post->image = $this->handleImageUpload($request->file('image'));
        }

        $post->save();

        return redirect()->route('parent-post.index')->with('success', 'Post created successfully.');
    }

    // Display the specified resource
    public function show($id)
    {
        $show = ParentPost::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('frontend.parent.posts.show', compact('show'));
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $edit = ParentPost::findOrFail($id);
        return view('frontend.parent.posts.edit', compact('edit'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = ParentPost::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $post->image = $this->handleImageUpload($request->file('image'));
        }
        $post->save();

        return redirect()->route('parent-post.index')->with('success', 'Post updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $post = ParentPost::findOrFail($id);

        // Delete image if exists
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('parent-post.index')->with('success', 'Post deleted successfully.');
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
