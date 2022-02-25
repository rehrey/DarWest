<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Support\Facades\Redirect;

class ExpenseController extends Controller
{
    public function add_expense(Request $add_expense){

        if($add_expense->ajax()){
            $data=Expense::where('name',$add_expense->name)->count();
            return response()->json($data);
          }

        $add_expense=Expense::create([

            'name'=>$add_expense->name,
            'warehouse'=>$add_expense->warehouse,
            'payment_type'=>$add_expense->payment_type,
            'amount'=>$add_expense->amount,

        ]);

        if ($add_expense)
        {
            return Redirect::Route('expense')->with('success','Expense added successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function upd_expense(Request $upd_expense){

            $upd_expense=Unit::where('id', $upd_expense->id)->update([

                'name'=>$add_expense->name,
                'warehouse'=>$add_expense->warehouse,
                'payment_type'=>$add_expense->payment_type,
                'amount'=>$add_expense->amount,

        ]);

        if ($upd_expense)
        {
            return Redirect::Route('expense')->with('success','Expense modified successfully');

        }
        else{
            return "Fail. please check with admin";
        }

    }

    public function delete_expense($id){
       
        $decode_expense_id=\base64_decode($id);

        $expense=Unit::find($decode_expense_id)->delete();

        if($expense){

            return Redirect::Route('expense')->with('success','Expense deleted successfully');
        }
        else{
            return "Fail. please check with admin";
        }
    
    }
}
