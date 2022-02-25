<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function add_customer(Request $cust_req){
        // dd($cust_req->all()); // dump and heck data from form

        if($cust_req->ajax()){
            $data=Customer::where(['name'=>$cust_req->name,'email'=>$cust_req->email])->count();
            return response()->json($data);
          }

        $add_customer=Customer::create([
            'name'=>$cust_req->name,
            'phone'=>$cust_req->phone,
            'address'=>$cust_req->address,
            'region'=>$cust_req->region,
            'email'=>$cust_req->email,
        ]);
        

        if($add_customer)
        {
            return Redirect::Route('customer')->with('success','Customer added successfully');

        
        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function upd_customer(Request $cust_upd){
       
         $decode_cust_id=\base64_decode($cust_upd->id);
        //  dd($decode_med_id);

        // dd($med_upd->all());


        $upd_customer=Customer::where('id', $decode_cust_id)->update(
          
            [
                'name'=>$cust_upd->name,
                'phone'=>$cust_upd->phone,
                'address'=>$cust_upd->address,
                'region'=>$cust_upd->region,
                'email'=>$cust_upd->email,

        ]);

        if ($upd_customer)
        {
            return Redirect::Route('customer')->with('success','Customer modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function del_customer($id){
       
        $decode_cust_id=\base64_decode($id);

        $cust=Customer::find($decode_cust_id)->delete();

        if($cust){

            return Redirect::Route('customer')->with('success','Customer deleted successfully');
        }
    
           
    
    }
}