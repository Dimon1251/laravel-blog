@extends('layout')

@section('title') Create account @endsection

@section('main_content')



<main class="form-signin w-100 m-auto" style="max-width: 300px">
    <form action="registeracc" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please create account</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-floating">
            <input type="text" class="form-control" name="login" placeholder="Login">
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="name" placeholder="Name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
    </form>
</main>

@endsection
