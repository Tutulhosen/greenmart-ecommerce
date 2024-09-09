<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('get_category_name')) {
    function get_category_name($id)
    {   return $id;
        $category_name=DB::table('category')->where('id', $id)->select('name')->first();
        return $category_name->name;
    }
}

if (!function_exists('get_sub_category_name')) {
    function get_sub_category_name($id)
    {
        $sub_category_name=DB::table('subcategory')->where('id', $id)->select('name')->first();
        return $sub_category_name->name;
    }
}

if (!function_exists('order_status')) {
    function order_status($order_status)
    {
       
        if ($order_status==0) {
            return "Pending";
        }elseif ($order_status==1) {
            return "Canceled";
        }elseif ($order_status==2) {
            return "Accepted";
        }elseif ($order_status==3) {
            return "On Delivery";
        }elseif ($order_status==4) {
            return "Delivery Done";
        }elseif ($order_status==5) {
            return "Return Back";
        }else{
            return "--";
        }
    }
}


?>