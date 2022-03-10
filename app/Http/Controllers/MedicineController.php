<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Redirect;


class MedicineController extends Controller
{
    public function add_medicine(Request $med_req){
       
        
        if(isset($med_req->Retail)){
            
            
            $retail_set="Wholesale Price";
        }
        else{

            $retail_set="Retail Price";
        }

        $add_medicine=Medicine::create([
            'name'=>$med_req->name,
            'category'=>$med_req->category,
            'type'=>$med_req->type,
            'unit'=>$med_req->unit,
            'sell_price'=>$med_req->sell_price,
            'discount_price'=>$med_req->discount_price,
            'Retail'=>$retail_set,

        ]);

        if ($add_medicine)
        {
            return Redirect::Route('medicine')->with('success','Medicine added successfully');

        }
        else{
            return "Fail. please check with admin";
        }



    }

    public function upd_medicine(Request $med_upd){
       
        // dd($med_upd);
        //  dd($med_upd->all());

         $decode_med_id=\base64_decode($med_upd->id);
        //  dd($decode_med_id);

        // dd($med_upd->all());

        if(isset($med_upd->Retail)){
            
            
            $retail_set="Wholesale Price";
            // dd($retail_set);
        }
        else{

            $retail_set="Retail Price";
        }

        $upd_medicine=Medicine::where('id', $decode_med_id)->update(
          
            [
            'name'=>$med_upd->name,
            'category'=>$med_upd->category,
            'type'=>$med_upd->type,
            'unit'=>$med_upd->unit,
            'sell_price'=>$med_upd->sell_price,
            'discount_price'=>$med_upd->discount_price,
            'Retail'=>$retail_set,

        ]);

        if ($upd_medicine)
        {
            return Redirect::Route('medicine')->with('success','Medicine modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }
    }

        public function delete_med($id){
       
        $decode_med_id=\base64_decode($id);
        $med=Medicine::find($decode_med_id)->delete();
        if($med){
            return Redirect::Route('medicine')->with('success','Medicine deleted successfully');
        }
    
           
    
    }
}
