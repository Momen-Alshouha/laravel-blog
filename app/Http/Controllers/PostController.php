<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Display a listing of the posts in dashborad
    public function DashboardIndex()
    {
        $posts = Post::all();
        $user = auth()->user(); 
        return view('admin.dashboard', compact('posts','user'));
    }

    // Display a listing of the posts
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('admin.AddNewPost');
    }

    // Store a newly created post in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $validated['user_id'] = Auth::id();

        Post::create($validated);

        return redirect()->back()->with('success', 'Post created successfully.');
    }

    // Display the specified post
    public function show(Post $post)
    {
        return view('post', compact('post'));
    }

    // Show the form for editing the specified post
    public function edit(Post $post)
    {
        return view('admin.EditPost', compact('post'));
    }

    // Update the specified post in the database
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($request->all());

        return redirect()->back()->with('success', 'Post updated successfully.');
    }

    // Remove the specified post from the database
    public function destroy($postId)
    {
        $post = Post::find($postId);

        if (!$post) {
            return redirect()->back()->with('error', 'Post not found.');
        }

        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
