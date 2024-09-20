<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TopHeaderController extends Controller
{
    // top-header list 
    public function List(){
        $data['list']=DB::table('top_header')->get();
        return view("admin.top_header.list")->with($data);
    }

    //show top-header create page
    public function create(){
        
        // return $data['category_list'];exit;
        return view('admin.top_header.create');
    }

    // store category
    public function store(Request $request){
        
        $name = $request->name;
       
       $insert= DB::table('top_header')->insert([
            'title' =>$name,
            
        ]);
        if ($insert) {
           return response()->json([
                'status' => true,
                'success' => 'Top header created successfully!',
           ]);

        }
       
        

        


    }

    // top-header update page
    public function update_page($id){
        $data['top_header_info']=DB::table('top_header')->where('id', $id)->first();
        return view('admin.top_header.edit')->with($data);
    }

    // update top-header
    public function update(Request $request){
        
        $name = $request->name;
    
        $update = DB::table('top_header')->where('id', $request->id)->update([
            'title' => $name,
           
        ]);
    
        if ($update) {
            return response()->json([
                'status' => true,
                'success' => 'Top-header updated successfully!',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'error' => 'Nothing Change.',
            ]);
        }
    }


    //delete category
    public function delete($id){
       
        $delete=DB::table('top_header')->where('id', $id)->delete();
        if ($delete) {
            return response([
                'status' =>true,
                'message'=>"Successfully Delete"
            ]);
        } else {
            return response([
                'status' =>false,
                'message'=>"Not deleted"
            ]);
        }
        
    }

    //top-header status update
    public function status($id){
        $top_header_id=DB::table('top_header')->where('id', $id)->first();
        if ($top_header_id->status==1) {
           $update= DB::table('top_header')->where('id', $id)->update([
                'status'    =>0,
           ]);
            
        }elseif ($top_header_id->status==0) {
            $update= DB::table('top_header')->where('id', $id)->update([
                'status'    =>1,
           ]);
            
        }
        if ($update) {
            return response([
                'status' =>true,
               
            ]);
        }else {
            return response([
                'status' =>false,
               
            ]);
        }

    }
}
