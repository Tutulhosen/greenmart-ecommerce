<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    
    public function home(){
        $data['category'] = DB::table('category')->get();
        $data['sliders'] = DB::table('sliders')->latest()->get();
        
        // Hot deal products
        $hot_deal_product = DB::table('products')->whereNotNull('discount')->latest()->get();
        $hot_deal_arr = [];
        foreach ($hot_deal_product as $value) {
            $hot_deals = [];
            $hot_deals['id'] = $value->id;
            $hot_deals['price'] = $value->price;
            $hot_deals['discount'] = $value->discount;
            $hot_deals['percent'] = (int)(($hot_deals['discount'] / $hot_deals['price']) * 100);
            $hot_deals['thumbnail'] = $value->thumbnail;
            
            array_push($hot_deal_arr, $hot_deals);
        }
        
        // Convert hot deal array to collection
        $data['hot_deal'] = collect($hot_deal_arr);
        
        $all_products = DB::table('products')->latest()->paginate(28); 

        $product_arr = [];
        foreach ($all_products as $value) {
            $product = [];
            $product['id'] = $value->id;
            $product['title'] = $value->title;
            $product['price'] = $value->price;
            $product['discount'] = $value->discount;
            $product['discount_price'] = $value->discount ? $value->price - $value->discount : null;
            $product['thumbnail'] = $value->thumbnail;

            array_push($product_arr, $product);
        }

       
        $data['products'] = $product_arr;
        $data['pagination'] = $all_products;

        
        return view('frontend.index')->with($data);
    }
    

    //category page view
    public function category_page($id){
        // dd($id);
        if ($id!=1) {
            $all_products = DB::table('products')->where('category_id', $id)->latest()->paginate(28);

        $product_arr = [];
        foreach ($all_products as $value) {
            $product = [];
            $product['id'] = $value->id;
            $product['title'] = $value->title;
            $product['price'] = $value->price;
            $product['discount'] = $value->discount;
            $product['discount_price'] = $value->discount ? $value->price - $value->discount : $value->price;
            $product['thumbnail'] = $value->thumbnail;

            array_push($product_arr, $product);
        }

        $data['products'] = $product_arr;
        $data['pagination'] = $all_products; 
        $data['category'] = DB::table('category')->get();

        return view('frontend.pages.category-page')->with($data);

        } else {
            return redirect()->route('home');
        }
        
        
    }

    public function single_product($id) {
        $single_product = DB::table('products')->where('id', $id)->first();
        if (!$single_product) {
            abort(404, 'Product not found');
        }
    
        $gallery_images = DB::table('gallery')->where('product_id', $single_product->id)->get();
    
        $product = [
            'id' => $single_product->id,
            'product_code' => $single_product->product_code,
            'title' => $single_product->title,
            'price' => $single_product->price,
            'discount' => $single_product->discount,
            'discount_price' => $single_product->discount ? $single_product->price - $single_product->discount : $single_product->price,
            'description' => $single_product->description,
            'thumbnail' => $single_product->thumbnail,
            'gallery' => $gallery_images->pluck('image_name')->toArray(),
        ];
    
        $data = [
            'single_product_data' => $product,
            'category' => DB::table('category')->get(),
        ];
    
        return view('frontend.pages.single-product', $data);
    }

    public function shop_checkout(Request $request) {
 
        $data['product_id'] = $request->input('product_id');
        $data['total_amount'] = $request->input('total_amount');
        $data['qty'] = $request->input('qty');
    
   
        $data['this_product'] = DB::table('products')->where('id', $data['product_id'])->first();

        $data['category'] = DB::table('category')->get();
    
        return view('frontend.pages.shop-checkout')->with($data);
    }    

    public function order(Request $request) {
        // Insert order details into the database and get the order ID
        $order_id = DB::table('customer_order')->insertGetId([
            'product_id' => $request->input('product_id'),
            'total_price' => $request->input('total_amount'),
            'products_qty' => $request->input('qty'),
            'full_name' => $request->input('full_name'),
            'delivery_address' => $request->input('delivery_address'),
            'phone_number' => $request->input('phone_number'),
            'additional_number' => $request->input('additional_number'),
            'emai_address' => $request->input('emai_address'),
            'additional_information' => $request->input('additional_information'),
        ]);
        $order_data=DB::table('products')
        ->join('customer_order', 'products.id', 'customer_order.product_id')
        ->where('customer_order.id', $order_id)
        ->select('products.title as title', 'products.price as price', 'products.discount as discount')
        ->first();
        $title = $order_data->title ?? ' ';
        $price = $order_data->price ?? 0;
        $discount=$order_data->discount ? (int)$order_data->discount : 0;
        $discount_price=$price-$discount;
        // dd($discount_price);
    
        return redirect()->route('shopping.card', [
            'order_id' => $order_id,
            'total_price' => $request->input('total_amount'),
            'qty' => $request->input('qty'),
            'title' => $title,
            'discount_price' => $discount_price
        ])->with('success', 'Your order has been successfully placed!');
        
    }

    public function shopping_card(Request $request) {
        $data['category'] = DB::table('category')->get();
        
 
        $data['order_id'] = $request->query('order_id');
        $data['total_price'] = $request->query('total_price', 0); 
        $data['discount_price'] = $request->query('discount_price', 0); 
        $data['qty'] = $request->query('qty', 0); 
        $data['title'] = $request->query('title', ''); 
        $data['success'] = session('success');
        
        // Return the view with the necessary data
        return view('frontend.pages.shopping_cart')->with($data);
    }
    
    
    
       
    
    
    
   
}
