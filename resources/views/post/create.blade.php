@extends('layouts.layout')

@section('title')
    Create post
@endsection

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
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Ссылки на дополнительную информацию</label>
                        <table class="table table-bordered" id="linksTable">
                            <tr>
                                <td><input type="text" name="links[link0]" placeholder="Введите ссылку" class="form-control name_list" /></td>
                            </tr>
                        </table>
                        <button type="button" name="add" id="add" class="btn btn-success">Еще ссылка</button>
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="Enter the name"><br>
                    <textarea rows="10" class="form-control" name="content" placeholder="Enter the description"></textarea><br>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </main>
    </div>

@endsection
