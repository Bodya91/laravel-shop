@extends('layouts.main')

@section('title', $category->name)

@section('content')
    <div class="container">
        <h1>{{ __('Category') }} - {{ $category->name }} ({{ $category->products->count() }})</h1>
        <p>{{ $category->description }}</p>

        <div class="row">
            <div class="col-lg-3">
                <div class="list-group mb-3">
                    @foreach($categories as $item)
                        <a href="{{ route('category', $item->slug) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{ $item->name }} <span class="badge badge-primary badge-pill">{{ $item->products->count() }}</span></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($category->products as $product)
                        @include('layouts.card', compact('product'))
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection