@extends('frontend.layout.app')

@section('main-content')
<br>
<section>
    <div class="container">
        @if(count($products) > 0)
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-2 col-6">
                    <div class="product">
                        <a href="{{ route('frontend.single.product.page', $product->id) }}">
                            <img src="{{ asset('images/galleries/'.$product->thumbnail) }}" alt="{{ $product->title }}">
                        </a>
                        <p>{{ $product->title }}</p>
                        <p>৳ {{ $product->discount_price ?? $product->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="col-12 text-center">
                    <h2>No products found.</h2>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
