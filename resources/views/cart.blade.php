@extends('layouts.main')

@section('title', 'Shop - Cart')

@section('content')
    <div class="container">
        <h1>{{ __('Cart') }}</h1>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Count</th>
                    <th scope="col">Price</th>
                    {{-- <th scope="col"></th> --}}
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                @foreach($order->products as $product)
                    <tr>
                        <th scope="row">{{$counter}}</th>
                        <th scope="row"><img src="https://blog.nscsports.org/wp-content/uploads/2014/10/default-img.gif" width="100px" alt="..."></th>
                        <td><a href="{{ route('product', [$product->category->slug, $product->slug]) }}">{{ $product->name }}</a></td>
                        <td class="d-flex">
                            <form action="{{ route('cartRemove', $product) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-dash"></i></button>
                            </form>
                            <span class="alert alert-light">{{ $product->pivot->count }}</span>
                            <form action="{{ route('cartAdd', $product) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success"><i class="bi bi-plus"></i></button>
                            </form>
                        </td>
                        <td>{{ $product->getPriceForCount() }}$</td>
                        {{-- <td>
                            <form action="{{ route('cartRemove', $product) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td> --}}
                    </tr>
                    <?php $counter++; ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>Full price</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $order->getFullPrice() }}$</td>
                </tr>
            </tfoot>
        </table>
        <button type="submit" class="btn btn-success">Checkout order</button>
    </div>
@endsection