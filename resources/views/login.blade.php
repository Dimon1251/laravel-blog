@extends('layout')

@section('title') Login @endsection

@section('main_content')

<main class="  form-signin w-100 m-auto" style="max-width: 300px">
    <form action="auth" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="register">Create an account</a>
    </form>
</main>

@endsection
