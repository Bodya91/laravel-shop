@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($products as $product)
                        @include('layouts.card', compact('product'))
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection