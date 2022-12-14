<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments', ['comments' => $comments]);
    }
    public function destroy($comment_id)
    {
        Comment::where('comment_id', $comment_id)->delete();
        return redirect()->route('admin.comments.index');
    }
}
