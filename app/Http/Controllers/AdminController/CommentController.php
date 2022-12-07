<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('admin.dashboard-comments', ['comments' => $comments]);
    }
}
