<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biller;
use Illuminate\Support\Facades\Redirect;

class BillerController extends Controller
{
    public function add_biller(Request $bill_req){
        // dd($cust_req->all()); // dump and heck data from form
        if($bill_req->ajax()){
            $data=Biller::where(['name'=>$bill_req->name,'email'=>$bill_req->email])->count();
            return response()->json($data);
          }

        $add_biller=Biller::create([
            'name'=>$bill_req->name,
            'phone'=>$bill_req->phone,
            'address'=>$bill_req->address,
            'region'=>$bill_req->region,
            'email'=>$bill_req->email,
        ]);
        

        if($add_biller)
        {
            return Redirect::Route('biller')->with('success','Biller added successfully');

        
        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function upd_biller(Request $bill_upd){
       
         $decode_bill_id=\base64_decode($bill_upd->id);
        //  dd($decode_med_id);

        // dd($med_upd->all());


        $upd_biller=Biller::where('id', $decode_bill_id)->update(
          
            [
                'name'=>$bill_upd->name,
                'phone'=>$bill_upd->phone,
                'address'=>$bill_upd->address,
                'region'=>$bill_upd->region,
                'email'=>$bill_upd->email,

        ]);

        if ($upd_biller)
        {
            return Redirect::Route('biller')->with('success','Biller modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function del_biller($id){
       
        $decode_bill_id=\base64_decode($id);

        $bill=Biller::find($decode_bill_id)->delete();

        if($bill){

            return Redirect::Route('biller')->with('success','Biller deleted successfully');
        }
    
           
    
    }
}
