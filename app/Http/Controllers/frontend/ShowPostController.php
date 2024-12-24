<?php

namespace App\Http\Controllers\frontend;

use App\Models\UserPost;
use App\Models\ParentPost;
use App\Models\TeacherPost;
use App\Models\AdminImagePost;
use App\Http\Controllers\Controller;


class ShowPostController extends Controller
{
    public function index()
{ 
    $adminImagePost = AdminImagePost::with('user')->get();
    $userPosts = UserPost::with('user')->get();
    $parentPost = ParentPost::with('user')->get();
    $teacherPosts = TeacherPost::with('user')->get();

    $allPosts = collect()
        ->merge($adminImagePost)
        ->merge($userPosts)
        ->merge($parentPost)
        ->merge($teacherPosts);

    $sortedPosts = $allPosts->sortByDesc('created_at');

    return view('frontend.ShowPost', compact('sortedPosts'));
}


}
