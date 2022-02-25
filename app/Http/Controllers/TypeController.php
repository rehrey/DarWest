<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Redirect;

class TypeController extends Controller
{
    public function add_type(Request $add_type){

        if($add_type->ajax()){
            $data=Type::where('name',$add_type->name)->count();
            return response()->json($data);
          }

        $add_type=Type::create([

            'name'=>$add_type->name,

        ]);

        if ($add_type)
        {
            return Redirect::Route('type')->with('success','Medicine Type added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function addtype(Request $addtype){

        if($addtype->ajax()){
            $data=Type::where('name',$addtype->name)->count();
            return response()->json($data);
          }

        $addtype=Type::create([

            'name'=>$addtype->name,

        ]);

        if ($addtype)
        {
            return Redirect::Route('type')->with('success','Medicine Type added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function upd_type(Request $upd_type){

            $upd_type=Type::where('id', $upd_type->id)->update([

            'name'=>$upd_type->name,

        ]);

        if ($upd_type)
        {
            return Redirect::Route('type')->with('success','Medicine Type modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function delete_type($id){
       
        $decode_type_id=\base64_decode($id);

        $type=Type::find($decode_type_id)->delete();

        if($type){

            return Redirect::Route('type')->with('success','Medicine Type deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }
}
