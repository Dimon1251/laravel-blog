@extends('layouts.layout')

@section('title')
    Plans
@endsection

@section('main_content')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center justify-content-center ">
<!--            <div class="card mb-4 box-shadow col-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>View posts</li>
                        <li>Ability to leave comments</li>
                        <li>ㅤ</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>-->
            @foreach($plans as $plan)
            <div class="card mb-4 box-shadow col-4">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$plan->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">${{$plan->price}} <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>View posts</li>
                        <li>Ability to leave comments</li>
                        <li>{{$plan->description}}</li>
                    </ul>
                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-lg btn-block btn-primary">Buy now</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>


@endsection
