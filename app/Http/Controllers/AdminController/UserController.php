<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

}
