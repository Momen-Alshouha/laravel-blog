<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeComment(Request $request, Post $post)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = $post->comments()->create([
            'comment' => $request->input('comment'),
            'user_id' => auth()->id(),
            'post_id' => $post->id,
        ]);

        return redirect()->route('posts.show', [$post->id, 'comment' => $comment->id])
            ->with('success', 'Comment added successfully.');
    }

    public function update(Request $request, $postId, $commentId)
    {
        $comment = Comment::where('post_id', $postId)->findOrFail($commentId);

        // Check if the authenticated user is the owner of the comment
        if (auth()->user()->id !== $comment->user_id) {
            return redirect()->back()->with('error', 'You are not authorized to edit this comment.');
        }

        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }

    public function destroy(Post $post, Comment $comment)
    {
        // Ensure that the comment belongs to the post
        if ($comment->post_id !== $post->id) {
            abort(404);
        }

        // Check if the current user is the owner of the comment
        if (auth()->user()->id !== $comment->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $comment->delete();

        return redirect()->back()->with('successDelete', 'Comment deleted successfully');
    }
}
