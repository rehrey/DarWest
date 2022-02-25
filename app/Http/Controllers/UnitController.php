<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\Support\Facades\Redirect;

class UnitController extends Controller
{
    public function add_unit(Request $add_unit){

        if($add_unit->ajax()){
            $data=Unit::where('name',$add_unit->name)->count();
            return response()->json($data);
          }

        $add_unit=Unit::create([

            'name'=>$add_unit->name,

        ]);

        if ($add_unit)
        {
            return Redirect::Route('unit')->with('success','Medicine Unit added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function addunit(Request $addunit){

        if($addunit->ajax()){
            $data=Unit::where('name',$addunit->name)->count();
            return response()->json($data);
          }

        $addunit=Unit::create([

            'name'=>$addunit->name,

        ]);

        if ($addunit)
        {
            return Redirect::Route('unit')->with('success','Medicine Unit added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function upd_unit(Request $upd_unit){

            $upd_unit=Unit::where('id', $upd_unit->id)->update([

            'name'=>$upd_unit->name,

        ]);

        if ($upd_unit)
        {
            return Redirect::Route('unit')->with('success','Medicine Unit modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function delete_unit($id){
       
        $decode_unit_id=\base64_decode($id);

        $unit=Unit::find($decode_unit_id)->delete();

        if($unit){

            return Redirect::Route('unit')->with('success','Medicine Unit deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }
}
