<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Purchase;
use App\Models\Medicine;
use App\Models\Purchase_detail;

class PurchaseController extends Controller
{
    public function add_purchase(Request $purchase_req){
         
        if($purchase_req->ajax()){
            $data=Purchase::where(['name'=>$purchase_req->name,'email'=>$purchase_req->email])->count();
            return response()->json($data);
          }


          $decode_purchase_id=\base64_decode($PO_id);

        $add_purchase=Purchase::create([

        'medicine'=>$purchase_req->medicine,
        'supplier'=>$purchase_req->supplier,
        'payment_method'=>$purchase_req->payment_method,
        'batch_no'=>$purchase_req->batch_no,
        'box_size'=>$purchase_req->box_size,
        'box_qty'=>$purchase_req->box_qty,
        'buy_price'=>$purchase_req->buy_price,
        'subtotal_price'=>$purchase_req->subtotal_price,
        'status'=>$purchase_req->status,
        'expiry_date'=>$purchase_req->expiry_date,
        ]);
    
        $po_id=Purchase::find($decode_purchase_id);

        $total_price=Purchase::where(['id'=>$po_id,'subtotal_price'=>$purchase_req->subtotal_price])->sum();

        $add_purchase_detail=Purchase_detail::create([

            'PO_id'=>($po_id),
            'status'=>$purchase_req->status,
            'total_price'=>$total_price,
            'paid_amount'=>$purchase_req->paid_amount,
            'Due_amount'=>$purchase_req->Due_amount,

            ]);
    

        if($add_purchase)
        {
            return Redirect::Route('purchase')->with('success','Purchase added successfully');

        
        }
        else{
            return "Fail. please check with admin";
        }
    

}

    public function upd_purchase(Request $purchase_upd){
       
         $decode_purchase_id=\base64_decode($purchase_upd->id);
        //  dd($decode_med_id);

        // dd($med_upd->all());


        $upd_purchase=Purchase::where('id', $decode_purchase_id)->update(
          
            [
                'medicine'=>$purchase_upd->medicine,
                'supplier'=>$purchase_upd->supplier,
                'payment_method'=>$purchase_upd->payment_method,
                'batch_no'=>$purchase_upd->batch_no,
                'box_size'=>$purchase_upd->box_size,
                'box_qty'=>$purchase_upd->box_qty,
                'buy_price'=>$purchase_upd->buy_price,
                'total_price'=>$purchase_upd->total_price,
                'status'=>$purchase_upd->status,
                'expiry_date'=>$purchase_upd->expiry_date,

        ]);

        if ($upd_purchase)
        {
            return Redirect::Route('purchase')->with('success','purchase modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }
    }

    public function del_purchase($PO_id){
       
        $decode_purchase_id=\base64_decode($PO_id);

        $purchase=Purchase::find($decode_purchase_id)->delete();
        $purchase_detail=Purchase_detail::find($decode_purchase_id)->delete();

        if($purchase && $purchase_detail){

            return Redirect::Route('purchase')->with('success','purchase deleted successfully');
        }
    
           
    
    }

    public function fetch_saleprice(Request $request){
        $medicine=Medicine::where(['medicine_id'=>$request->id])->get();
        return response()->json($medicine);// Then send this data to ajax success function
       
    }
}
