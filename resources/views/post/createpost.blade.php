@extends('layout')

@section('title') Create post @endsection

@section('main_content')

<div class="container">
    <main>
        <div class="py-5 text-center">
            <h1>Create form</h1>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container col-xxl-12 px-4 py-5 align-items-center rounded-3 border shadow-lg">
            <form action="addpost" method="post">
                @csrf
                <input type="text" class="form-control" name="image" placeholder="Enter the URL links"><br>
                <input type="text" class="form-control" name="title" placeholder="Enter the name"><br>
                <textarea class="form-control" name="content" placeholder="Enter the description"></textarea><br>
                <button class="btn btn-success" type="submit">Create</button>
            </form>
        </div>
    </main>
</div>

@endsection
