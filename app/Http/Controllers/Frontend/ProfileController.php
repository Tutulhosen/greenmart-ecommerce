<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //dashboard
    public function profile(){
        $user=Auth::guard('customer')->user();
       
        $data['category'] = DB::table('category')->get();
        $data['recent_order'] = DB::table('customer_order')
            ->select('order_code', DB::raw('MAX(id) as max_id'), DB::raw('MAX(total_price) as total_price'), DB::raw('MAX(full_name) as full_name'), DB::raw('MAX(order_status) as order_status'), DB::raw('MAX(order_date) as order_date'))
            ->where('customer_id', $user->id)
            ->groupBy('order_code')
            ->orderBy('max_id', 'DESC')
            ->limit(3)
            ->get();
        // dd($data);
        return view('frontend.pages.profile')->with($data);
    }
}
