<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts', ['posts' => $posts]);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts-edit', ['post' => $post]);
    }
    public function update(StorePostRequest $request, $id)
    {
        Post::where('id', $id)
            ->update(['title' => $request->title, 'content' => $request->content, 'image' => $request->image]);
        Storage::delete('post/'.$id.'/'.$id.'.jpg');
        Storage::put('post/'.$id.'/'.$id.'.jpg', $request->image);

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        Storage::deleteDirectory('post/'.$id);

        return redirect()->route('admin.posts.index');
    }
}
