<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function admin() {
        $posts = Post::all();
        return view('admin', ['posts' => $posts]);
    }

    public function vpn() {
        return view('vpn');
    }

}
