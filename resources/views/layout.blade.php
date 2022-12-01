
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h1 class="display-5 fw-bold">Blog</h1>
    </a>

    @if(!array_key_exists('user', $_COOKIE))

    <div class="col-md-3 text-end">
        <button type="button"  onclick="window.location.href = '/login';" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" onclick="window.location.href = '/register';" class="btn btn-primary">Sign-up</button>
    </div>
    @endif
    @if(array_key_exists('user', $_COOKIE))
    <div class="col-md-3 text-end">
        <button type="button" onclick="window.location.href = '/exit';" class="btn btn-outline-primary me-2">Sign out</button>
        <a class="btn btn-pr imary btn-lg px-4 me-md-2">{{$_COOKIE['user']}}</a>
    </div>
    @endif
</header>

<main class="container py-3 my-4">
    @yield('main_content')
</main>

<footer>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{route('admin')}}" class="nav-link px-2 text-muted">Admin panel</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Company, Inc</p>
        </footer>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



