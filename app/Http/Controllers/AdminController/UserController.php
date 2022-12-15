<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::all();
        return view('admin.users', ['users' => $users]);
    }
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin.users.index');
    }
    public function login($id)
    {
        $user = User::find($id);
        Auth::guard('web')->login($user);

        return redirect()->route('admin.users.index');
    }

    public function ban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => true]);

        return redirect()->route('admin.users.index');
    }

    public function unban($id)
    {
        User::where('id', $id)
            ->update(['is_banned' => false]);

        return redirect()->route('admin.users.index');
    }

}
