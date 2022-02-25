<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    public function add_supplier(Request $supp_req){
         
        if($supp_req->ajax()){
            $data=Supplier::where(['name'=>$supp_req->name,'email'=>$supp_req->email])->count();
            return response()->json($data);
          }


        $add_supplier=Supplier::create([
            'name'=>$supp_req->name,
            'phone'=>$supp_req->phone,
            'address'=>$supp_req->address,
            'region'=>$supp_req->region,
            'email'=>$supp_req->email,
        ]);
    
    

        if($add_supplier)
        {
            return Redirect::Route('supplier')->with('success','Supplier added successfully');

        
        }
        else{
            return "Fail. please check with admin";
        }
    

}

    public function upd_supplier(Request $supp_upd){
       
         $decode_supp_id=\base64_decode($supp_upd->id);
        //  dd($decode_med_id);

        // dd($med_upd->all());


        $upd_supplier=Supplier::where('id', $decode_supp_id)->update(
          
            [
                'name'=>$supp_upd->name,
                'phone'=>$supp_upd->phone,
                'address'=>$supp_upd->address,
                'region'=>$supp_upd->region,
                'email'=>$supp_upd->email,

        ]);

        if ($upd_supplier)
        {
            return Redirect::Route('supplier')->with('success','Supplier modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function del_supplier($id){
       
        $decode_supp_id=\base64_decode($id);

        $supp=Supplier::find($decode_supp_id)->delete();

        if($supp){

            return Redirect::Route('supplier')->with('success','Supplier deleted successfully');
        }
    
           
    
    }
}
