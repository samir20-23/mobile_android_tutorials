<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Paginate the posts (5 per page)
        $posts = Post::paginate(1); // Reduce to 5 to test with fewer posts


        // Count total posts
        $totalPosts = Post::count();

        // Return the view with posts and total post count
        return view('posts.index', compact('posts', 'totalPosts'));
    }
}
