<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function blog() {
        $posts = DB::table('post')->get();
        return view('blog', ['posts' => $posts]);
    }

    public function login() {
        return view('login');
    }

    public function reviewonepost($id) {

        $post = DB::select('select * from post where id = :id', ['id' => $id]);
        $comments = DB::table('comment')->get();
        $post=$post[0];
        return view('reviewonepost', ['post' => $post, 'comments' => $comments]);
    }

    public function addcomment(Request $request){

        DB::table('comment')->insert([
            'post_id' => $request->id,
            'author' => $_COOKIE['user'],
            'text' => $request->comment,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        return redirect()->route('reviewonepost', $request->id);

    }

    public function admin() {
        $posts = DB::table('post')->get();
        return view('admin', ['posts' => $posts]);
    }


    public function deletepost($id) {
        DB::delete('delete from comment where post_id =:id', ['id' => $id]);
        DB::delete('delete from post where id =:id', ['id' => $id]);
        return redirect()->route('admin');
    }


    public function updatepost(Request $request) {
        DB::table('post')
            ->where('id', '=', $request->id)
            ->update(['title' => $request->title, 'content' => $request->content, 'image' => $request->image, 'updated_at' => date("Y-m-d H:i:s")]);
        return redirect()->route('admin');

    }

    public function auth(Request $request) {
        $valid = $request->validate([
            'login' => 'required|min:4|max:20',
            'password' => 'required|min:4|max:50'
        ]);

        $user = DB::table('user')->where([
            ['login', '=', $request->login],
            ['password', '=', $request->password],
        ])->get();
        if (count($user) == 0) {
            echo "User not found";
            return redirect()->route('login');
        }
        $user = $user[0];
        setcookie('user', $user->name);
        return redirect()->route('blog');

    }

    public function registeracc(Request $request) {
        $valid = $request->validate([
            'login' => 'required|min:4|max:20',
            'name' => 'required|min:4|max:20',
            'password' => 'required|min:4|max:50'
        ]);
        DB::table('user')->insert([
            'name' => $request->name,
            'login' => $request->login,
            'password' => $request->password
        ]);
        return redirect()->route('login');

    }

    public function register() {
        return view('register');
    }
    public function exit() {
        setcookie('user', $_COOKIE['user'], time() - 13600);
        return redirect()->route('blog');
    }

    public function createpost() {
        return view('createpost');
    }

    public function addpost(Request $request) {
        $valid = $request->validate([
            'title' => 'required|min:4|max:20',
            'content' => 'required|min:4|max:500',
            'image' => 'required|min:4|max:500'
        ]);
        DB::table('post')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return redirect()->route('blog');
    }

}
