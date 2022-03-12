<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Biller;
use App\Models\Medicine;
use App\Models\Category;
use App\Models\Type;
use App\Models\Unit;
use App\Models\Expense;
use App\Models\PaymentMethod;
use App\Models\Location;


class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function dashboard(){
        return view('Dashboard.dashboard');
    } 

    public function customer(){
        $customers=Customer::all();
        
        return view('Customer.customer')->with([
            'customers' => $customers
        ]);
    }

    public function supplier(){
        $suppliers=Supplier::all();
        
        return view('Supplier.supplier')->with([
            'suppliers' => $suppliers
        ]);

    }public function biller(){
        $billers=Biller::all();
        
        return view('Biller.biller')->with([
            'billers' => $billers
        ]);
    }

   
    public function medicine(){

        $medicines=Medicine::all();
        $categories=Category::all();
        $types=Type::all();
        $units=Unit::all();
        

        return view ('Medicine.medicine')->with(
            [
                'medicines' => $medicines,
                'categories' => $categories,
                'types' => $types,
                'units' => $units
            ]
            );

    }
    public function category(){

        $categories=Category::all();

        return view ('Medicine.category')->with(
            [
                'categories' => $categories
            ]
            );

    }
    public function type(){

        $types=Type::all();

        return view ('Medicine.type')->with(
            [
                'types' => $types
            ]
            );

    }

    public function unit(){

        $units=Unit::all();

        return view ('Medicine.unit')->with(
            [
                'units' => $units
            ]
            );

    } 
    
    public function expense(){

        $expenses=Expense::all();
        $locations=Location::all();
        $paymentmethods=PaymentMethod::all();

        return view ('Expense.expense')->with(
            [
                'expenses' => $expenses,
                'locations' => $locations,
                'paymentmethods' => $paymentmethods
            ]
            );

    } 

    public function paymentmethod(){

        $paymentmethods=PaymentMethod::all();

        return view ('Settings.paymentmethod')->with(
            [
                'paymentmethods' => $paymentmethods
            ]
            );

    }

    public function location(){

        $locations=Location::all();

        return view ('Settings.location')->with(
            [
                'locations' => $locations
            ]
            );

    }

    public function pos(){
        return view('Sales.pos');
    } 
    

    public function purchaselist(){
        return view('Purchase.listpurchase');
    } 


    public function purchase(){

        $medicines=Medicine::all();
        $suppliers=Supplier::all();
        $paymentmethods=PaymentMethod::all();

        return view('Purchase.addpurchase')->with(
            [
                'medicines' => $medicines,
                'suppliers' => $suppliers,
                'paymentmethods' => $paymentmethods
            ]
            );

    } 
  
}
