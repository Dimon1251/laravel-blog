<?php $title = 'Posts'?>
@include('admin.parts.head')


<body>
<!--<div class="splash active">
    <div class="splash-icon"></div>
</div>-->

<div class="wrapper">
    @include('admin.parts.sidebar')

    <div class="main">
        @include('admin.parts.header')
        <main class="content">
            <div class="container-fluid">
                <div class="header">
                    <h1 class="header-title">
                        Posts
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Posts</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top" src="{{Storage::get('post/'.$post->id.'/'.$post->id.'.jpg')}}" alt="Unsplash">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{$post->title}}</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{$post->content}}</p>
                                    <p class="card-date">{{$post->created_at}}</p>
                                    <p class="card-date">{{$post->updated_at}}</p>
                                    <p class="card-date">{{$post->author}}</p>

                                    <form action="{{ route('admin.posts.edit', $post->id) }}" method="get">
                                        @csrf
                                        <button type="submit" class="card-link">Edit</button>
                                    </form>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    <button type="submit" class="card-link">Delete</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

<!--<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>-->
<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

</body>

</html>
