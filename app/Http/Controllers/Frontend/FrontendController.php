<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    
    public function home(){
        $data['category']=DB::table('category')->get();
        $data['sliders']=DB::table('sliders')->latest()->get();
        // dd($data);
        return view('frontend.index')->with($data);
    }

    //category page view
    public function category_page($id){
        // dd($id);
        $data['category']=DB::table('category')->get();
        return view('frontend.pages.category-page')->with($data);
    }

    //single peoduct page view
    public function single_product($id){
        // dd($id);
        $data['category']=DB::table('category')->get();
        return view('frontend.pages.single-product')->with($data);
    }
    
   
}
