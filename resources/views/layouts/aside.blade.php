<div class="col-lg-3">
    <div class="list-group mb-3">
        @foreach($categories as $item)
            <a href="{{ route('category', $item->slug) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{ $item->name }} <span class="badge badge-primary badge-pill">{{ $item->products->count() }}</span></a>
        @endforeach
    </div>
</div>