@extends('layouts.main')

@section('title', 'Product')

@section('content')
    <div class="container">
        <h1>{{ __('Product page') }}</h1> 

        <div class="row">

            @include('layouts.aside')

            <div class="col-lg-9">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://blog.nscsports.org/wp-content/uploads/2014/10/default-img.gif" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection