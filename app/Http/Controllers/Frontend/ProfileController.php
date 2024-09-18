<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //dashboard
    public function profile(){
        $data['category'] = DB::table('category')->get();
        return view('frontend.pages.profile')->with($data);
    }
}
