<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function admin() {
        return view('admin.admin-panel');
    }

    public function vpn() {
        return view('vpn');
    }

}
