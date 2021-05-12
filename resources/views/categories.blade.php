@extends('layouts.main')

@section('title', 'Categories page')

@section('content')
    <div class="container">
        <h1>{{ __('Categories page') }}</h1>

        <div class="row">

            @foreach($categories as $category)
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <a href="{{ route('category', $category->slug) }}" class="btn btn-primary">Go to category</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection