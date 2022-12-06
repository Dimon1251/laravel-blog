@extends('layouts.layout')

@section('title')
    Admin panel
@endsection

@section('main_content')

    <h1>Admin panel</h1>
    <main>
        <section class="posts">
            <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom rounded-3 border shadow-lg">
                @foreach ($posts as $post)
                    <form action="updatepost" method="post">
                        @csrf
                        <input hidden type="text" name="id" value="{{$post->id}}">
                        <img src="{{$post->image}}" alt="photo" width="200px" height="100%">
                        <div class="area">
                            <label>Image link</label>
                            <input type="text" name="image" value="{{$post->image}}">
                        </div>
                        <div class="area">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$post->title}}">
                        </div>
                        <div class="area">
                            <label>Description</label>
                            <textarea style="width: 400px; height: 150px;" name="content">{{$post->content}}</textarea>
                        </div>
                        <button class="btns">Update</button>
                        <button class="btns" type="button" onclick="window.location.href = 'deletepost/{{$post->id}}'">
                            Delete
                        </button>
                    </form>
                @endforeach
            </div>
        </section>
    </main>

@endsection

<style>

    .area {
        display: flex;
        flex-direction: column;
        margin: 10px;
    }

    .btns {
        margin: auto;
        width: 100px;
        height: 30px;
    }

</style>
