@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('main_content')
    @if(Auth::check())
        <div class="d-grid gap-2 d-md-flex justify-content-center mb-4 mb-lg-3">
            <a href="{{ route('posts.create') }}"
                    class="btn btn-outline-secondary btn-lg px-4">Create new post
            </a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">{{$post->title}}</h1></br>
                    <p class="lead">{{$post->content}}</p></br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <p class="lead">Created: {{$post->created_at}}</p>
                        <p class="lead">Updated: {{$post->updated_at}}</p>
                        <p class="lead">Author: {{$post->author}}</p>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <button type="button" onclick="window.location.href = 'posts/{{$post->id}}'"
                                class="btn btn-outline-secondary btn-lg px-4">View
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="{{Storage::get('post/'.$post->id.'/1.jpg')}}" alt="" width="720">
                </div>
            </div>
        </div>
    @endforeach
@endsection
