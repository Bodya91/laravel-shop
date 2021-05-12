<div class="col mb-4">
    <div class="card">
        <img src="https://blog.nscsports.org/wp-content/uploads/2014/10/default-img.gif" class="card-img-top" alt="...">
        <div class="card-body">
            <span class="font-italic">{{ $product->category->name }}</span>
            <h5 class="card-title">{{ $product->name }} - <span class="badge badge-warning">{{ $product->price }}$</span></h5>
            {{-- @isset($category->name)
                <strong>{{ $category->name }}</strong>
            @endisset --}}
            <p class="card-text">{{ $product->description }}</p>
            <form action="{{ route('cartAdd', $product) }}" method="POST">
                @csrf
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('checkout') }}" type="button" class="btn btn-primary">Info <i class="bi bi-info-circle"></i></a>
                    <button type="submit" type="button" class="btn btn-success">Add to cart <i class="bi bi-cart4"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>