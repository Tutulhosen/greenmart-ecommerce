@extends('frontend.layout.app')

@section('main-content')
<section>
    <div class="category_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        <a href="http://burnamala.com">Home</a>
                        /
                        <a href="javascript:void(0);">Home &amp; Gadgets</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
  <section>
    <div class="main-products-section">
        <div class="container">
            @if(count($products) > 0)
                <div class="row m-0">
                    @foreach($products as $product)
                    <div class="col-md-2 col-6 main-product">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="{{ route('frontend.single.product.page', $product['id']) }}">
                                <img src="{{asset('images/galleries/'.$product['thumbnail'])}}" alt="{{ $product['title'] }}">
                            </a>
                            @if($product['discount_price'] < $product['price'])
                            <p class="mb-0" style="text-decoration: line-through;color: #b8b8b8">৳ {{ $product['price'] }}</p>
                            <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product['discount_price'] }}</p>
                            @else
                            <p class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product['price'] }}</p>
                            @endif
                            <p class="mb-0 prod_name"><a href="{{ route('frontend.single.product.page', $product['id']) }}">{{ $product['title'] }}</a></p>
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
            @else
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-center">কোনো পণ্য পাওয়া যায়নি।</h2> 
                    </div>
                </div>
            @endif
        </div>
    </div>
    
</section>
@endsection