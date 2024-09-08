<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

    public function shop_checkout(Request $request){
        $data['category'] = DB::table('category')->get();
        return view('frontend.pages.shop-checkout')->with($data);
    }
    
    
   
}
