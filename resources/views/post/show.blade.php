@extends('layouts.layout')

@section('title')
    {{$post->title}}
@endsection

@section('main_content')

    <main>
        <div class="container col-xxl-12 px-4 py-5 align-items-center rounded-3 border shadow-lg">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{Storage::get('post'.$post->id.'.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                         height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1   mb-3">{{$post->title}}</h1></br>
                    <p class="lead">{{$post->content}}</p></br>
                    <p class="lead">Created: {{$post->created_at}}</p>
                    <p class="lead">Updated: {{$post->updated_at}}</p>
                </div>
            </div>
        </div>

        <section>
            @foreach ($comments as $comment)
                    <div class="container my-2 py-2">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 col-lg-10 col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-start align-items-center">
                                            <div>
                                                <h6 class="fw-bold text-primary mb-1">{{$comment->author}}</h6>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-4 pb-2">
                                            {{$comment->text}}
                                        </p>
                                        <p class="mt-3 mb-4 pb-2">
                                            {{$comment->created_at}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach
            @if(Auth::check())
                <div class="container my-3 py-3">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-start align-items-center">
                                        <div>
                                            <h6 class="fw-bold text-primary mb-1">{{Auth::user()->name}} </h6>
                                        </div>
                                    </div>
                                    <form method="post" action="/store">
                                        @csrf
                                        <div class="d-flex flex-start w-100">

                                            <div class="form-outline w-100">
                                                <input hidden type="text" name="id" value="{{$post->id}}">
                                                <textarea class="form-control" name="text" rows="4"
                                                          style="background: #fff;"></textarea>
                                            </div>
                                        </div>
                                        <div class="float-end mt-2 pt-1">
                                            <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </section>
    </main>

@endsection
