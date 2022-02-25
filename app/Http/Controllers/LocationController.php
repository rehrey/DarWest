<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\Redirect;

class LocationController extends Controller
{
    public function add_location(Request $add_location){

        if($add_location->ajax()){
            $data=Location::where('name',$add_location->name)->count();
            return response()->json($data);
          }

        $add_location=Location::create([

            'name'=>$add_location->name,

        ]);

        if ($add_location)
        {
            return Redirect::Route('location')->with('success','Location added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function upd_location(Request $upd_location){

            $upd_location=Location::where('id', $upd_location->id)->update([

            'name'=>$upd_location->name,

        ]);

        if ($upd_location)
        {
            return Redirect::Route('location')->with('success','Location modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }


    public function delete_location($id){
       
        $decode_location_id=\base64_decode($id);

        $location=Location::find($decode_location_id)->delete();

        if($location){

            return Redirect::Route('location')->with('success','Location deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }
}
