<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Redirect;

class PaymentMethodController extends Controller
{
    public function add_paymentmethod(Request $add_paymentmethod){

        if($add_paymentmethod->ajax()){
            $data=PaymentMethod::where('name',$add_paymentmethod->name)->count();
            return response()->json($data);
          }

        $add_paymentmethod=PaymentMethod::create([

            'name'=>$add_paymentmethod->name,

        ]);

        if ($add_paymentmethod)
        {
            return Redirect::Route('paymentmethod')->with('success','Payment Method added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function upd_paymentmethod(Request $upd_paymentmethod){

            $upd_paymentmethod=PaymentMethod::where('id', $upd_paymentmethod->id)->update([

            'name'=>$upd_paymentmethod->name,

        ]);

        if ($upd_paymentmethod)
        {
            return Redirect::Route('paymentmethod')->with('success','Payment Method modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function delete_paymentmethod($id){
       
        $decode_paymentmethod_id=\base64_decode($id);

        $paymentmethod=PaymentMethod::find($decode_paymentmethod_id)->delete();

        if($paymentmethod){

            return Redirect::Route('paymentmethod')->with('success','Payment Method deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }
}
