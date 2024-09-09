<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orderList(){
        $data['order_list']=DB::table('customer_order')
        ->join('products', 'products.id', 'customer_order.product_id')
        ->select('products.title', 'customer_order.*')
        ->orderBy('customer_order.id', 'DESC')->paginate(10);
        // dd($data);
        return view('admin.order.list')->with($data);
    }

    public function orderStatusUpdate(Request $request){
        $id = $request->input('id');
        $type = $request->input('type');
     
        if ($type=='accept') {
            DB::table('customer_order')->where('id', $id)->update([
                'order_status' => 2
            ]);
        }
        if ($type=='cancel') {
            DB::table('customer_order')->where('id', $id)->update([
                'order_status' => 1
            ]);
        }
        if ($type=='on_delivery') {
            DB::table('customer_order')->where('id', $id)->update([
                'order_status' => 3
            ]);
        }
        if ($type=='delivery_done') {
            DB::table('customer_order')->where('id', $id)->update([
                'order_status' => 4
            ]);
        }
        if ($type=='return_back') {
            DB::table('customer_order')->where('id', $id)->update([
                'order_status' => 5
            ]);
        }

        return response([
            'status' =>true
        ]);

    }
}
