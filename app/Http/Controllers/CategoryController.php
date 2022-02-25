<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
   
    public function add_category(Request $add_category){

        if($add_category->ajax()){
            $data=Category::where('name',$add_category->name)->count();
            return response()->json($data);
          }

        $add_category=Category::create([

            'name'=>$add_category->name,

        ]);

        if ($add_category)
        {
            return Redirect::Route('category')->with('success','Medicine Category added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function addcategory(Request $addcategory){

        if($addcategory->ajax()){
            $data=Category::where('name',$addcategory->name)->count();
            return response()->json($data);
          }

        $addcategory=Category::create([

            'name'=>$addcategory->name,

        ]);

        if ($addcategory)
        {
            return Redirect::Route('category')->with('success','Medicine Category added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }



    public function upd_category(Request $upd_category){

            $upd_category=Category::where('id', $upd_category->id)->update([

            'name'=>$upd_category->name,

        ]);

        if ($upd_category)
        {
            return Redirect::Route('category')->with('success','Medicine Category modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }


    public function delete_category($id){
       
        $decode_category_id=\base64_decode($id);

        $category=Category::find($decode_category_id)->delete();

        if($category){

            return Redirect::Route('category')->with('success','Medicine Category deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }

}
