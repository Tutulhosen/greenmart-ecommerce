@extends('frontend.layout.app')

@section('main-content')
@include('frontend.pages.slider')


<section>
    <div class="product_categories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3">প্রোডাক্ট ক্যাটেগরীজ</h5>
                    <div class="horiz_cat">
                        <ul>
                            @foreach ($category as $item)
                                <li>
                                    <a href="{{route('frontend.category.page', $item->id)}}">{{$item->name}}</a>
                                </li> 
                            @endforeach
                                                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.pages.hot_deal')



<section>
    <div class="main-products-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-3">প্রয়োজনীয় প্রোডাক্ট</h4>
                </div>
            </div>
            <div class="row m-0">
                @foreach($products as $product)
                <div class="col-md-2 col-6 main-product">
                    <div class="main-product-inner-wrapper text-center">
                        <a href="{{ route('frontend.single.product.page', $product['id']) }}">
                            <img src="{{asset('images/galleries/'.$product['thumbnail'])}}" alt="{{ $product['title'] }}">
                        </a>
                        @if($product['discount_price'])
                            <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ {{ $product['price'] }}</p>
                            <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product['discount_price'] }}</p>
                        @else
                            <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product['price'] }}</p>
                        @endif
                            <p class="mb-0 prod_name"><a href="{{ route('frontend.single.product.page', $product['id']) }}  ">{{ $product['title'] }}</a></p>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="qty" value="1">
                            <input type="submit" class="btn btn-sm w-100 mb-2 order_now_btn" name="order_now" value="অর্ডার করুন">
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
    
            <div class="row mt-md-4 mt-2">
                <div class="col-12">
                    
                    {!! $pagination->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection