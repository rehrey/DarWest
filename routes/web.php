<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BillerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PurchaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class ,'index'])->name('index');
Route::get('index',[PageController::class, 'index'])-> name ('index');
Route::get('/dashboard',[PageController::class, 'dashboard'])->name('dashboard');
Route::get('customer',[PageController::class, 'customer'])-> name ('customer');
Route::get('supplier',[PageController::class, 'supplier'])-> name ('supplier');
Route::get('biller',[PageController::class, 'biller'])-> name ('biller');
Route::get('medicine',[PageController::class, 'medicine'])-> name ('medicine');
Route::get('category',[PageController::class ,'category'])->name('category');
Route::get('type',[PageController::class ,'type'])->name('type');
Route::get('unit',[PageController::class ,'unit'])->name('unit');
Route::get('expense',[PageController::class ,'expense'])->name('expense');
Route::get('location',[PageController::class ,'location'])->name('location');
Route::get('paymentmethod',[PageController::class ,'paymentmethod'])->name('paymentmethod');
Route::get('pos',[PageController::class ,'pos'])->name('pos');
Route::get('purchase',[PageController::class ,'purchase'])->name('purchase');
Route::get('purchaselist',[PageController::class ,'purchaselist'])->name('purchaselist');



//---------------check customer-------------
Route::get('check_customer',[CustomerController::class ,'add_customer'])->name('check_customer');

//------------------Add customer route-------
Route::post('add_customer',[CustomerController::class ,'add_customer'])->name('add_customer');

//------------------Update customer route-------
Route::post('upd_customer',[CustomerController::class ,'upd_customer'])->name('upd_customer');

//------------------delete customer route-------
Route::get('del_customer/{id}',[CustomerController::class ,'del_customer'])->name('del_customer');


//---------------check supplier-------------
Route::get('check_supplier',[SupplierController::class ,'add_supplier'])->name('check_supplier');


//------------------Add supplier route-------
Route::post('add_supplier',[SupplierController::class ,'add_supplier'])->name('add_supplier');

//------------------Update supplier route-------
Route::post('upd_supplier',[SupplierController::class ,'upd_supplier'])->name('upd_supplier');

//------------------delete supplier route-------
Route::get('del_supplier/{id}',[SupplierController::class ,'del_supplier'])->name('del_supplier');



//---------------check biller-------------
Route::get('check_biller',[BillerController::class ,'add_biller'])->name('check_biller');


//------------------Add biller route-------
Route::post('add_biller',[BillerController::class ,'add_biller'])->name('add_biller');

//------------------Update biller route-------
Route::post('upd_biller',[BillerController::class ,'upd_biller'])->name('upd_biller');

//------------------delete biller route-------
Route::get('del_biller/{id}',[BillerController::class ,'del_biller'])->name('del_biller');


// -------------add Medicne-------------- 
Route::post('add_medicine',[MedicineController::class ,'add_medicine'])->name('add_medicine');

// -------------update Medicne-------------- 
Route::post('upd_medicine',[MedicineController::class ,'upd_medicine'])->name('upd_medicine');

//------------------delete Medicine route-------
Route::get('delete_med/{id}',[MedicineController::class ,'delete_med'])->name('delete_med');

// -------------add category-------------- 
Route::post('add_category',[CategoryController::class ,'add_category'])->name('add_category');

//---------------check category-------------
Route::get('check_category',[CategoryController::class ,'add_category'])->name('check_category');

//---------------check category from medicine-------------
Route::get('categorycheck',[CategoryController::class ,'addcategory'])->name('categorycheck');


// -------------update category-------------- 
Route::post('upd_category',[CategoryController::class ,'upd_category'])->name('upd_category');

//------------------delete  category route-------
Route::get('delete_category/{id}',[CategoryController::class ,'delete_category'])->name('delete_category');


//---------------check type-------------
Route::get('check_type',[TypeController::class ,'add_type'])->name('check_type');

//---------------check category from medicine-------------
Route::get('typecheck',[TypeController::class ,'addtype'])->name('typecheck');


// -------------add type-------------- 
Route::post('add_type',[TypeController::class ,'add_type'])->name('add_type');

// -------------update type-------------- 
Route::post('upd_type',[TypeController::class ,'upd_type'])->name('upd_type');

//------------------delete  type route-------
Route::get('delete_type/{id}',[TypeController::class ,'delete_type'])->name('delete_type');



//---------------check unit-------------
Route::get('check_unit',[UnitController::class ,'add_unit'])->name('check_unit');

//---------------check category from medicine-------------
Route::get('unitcheck',[UnitController::class ,'addunit'])->name('unitcheck');

// -------------add unit-------------- 
Route::post('add_unit',[UnitController::class ,'add_unit'])->name('add_unit');

// -------------update unit-------------- 
Route::post('upd_unit',[UnitController::class ,'upd_unit'])->name('upd_unit');

//------------------delete  unit route-------
Route::get('delete_unit/{id}',[UnitController::class ,'delete_unit'])->name('delete_unit');


//---------------check Expense-------------
Route::get('check_expense',[ExpenseController::class ,'add_expense'])->name('check_expense');

// -------------add Expense-------------- 
Route::post('add_expense',[ExpenseController::class ,'add_expense'])->name('add_expense');

// -------------update Expense-------------- 
Route::post('upd_expense',[ExpenseController::class ,'upd_expense'])->name('upd_expense');

//------------------delete  Expense route-------
Route::get('delete_expense/{id}',[ExpenseController::class ,'delete_expense'])->name('delete_expense');



//---------------check payment method-------------
Route::get('check_paymentmethod',[PaymentMethodController::class ,'add_paymentmethod'])->name('check_paymentmethod');

// -------------add paymentmethod-------------- 
Route::post('add_paymentmethod',[PaymentMethodController::class ,'add_paymentmethod'])->name('add_paymentmethod');

// -------------update paymentmethod-------------- 
Route::post('upd_paymentmethod',[PaymentMethodController::class ,'upd_paymentmethod'])->name('upd_paymentmethod');

//------------------delete  paymentmethod route-------
Route::get('delete_paymentmethod/{id}',[PaymentMethodController::class ,'delete_paymentmethod'])->name('delete_paymentmethod');


//---------------check location method-------------
Route::get('check_location',[LocationController::class ,'add_location'])->name('check_location');

// -------------add paymentmethod-------------- 
Route::post('add_location',[LocationController::class ,'add_location'])->name('add_location');

// -------------update paymentmethod-------------- 
Route::post('upd_location',[LocationController::class ,'upd_location'])->name('upd_location');

//------------------delete  paymentmethod route-------
Route::get('delete_location/{id}',[LocationController::class ,'delete_location'])->name('delete_location');



//---------------check purchase order -------------
Route::get('check_purchase',[PurchaseController::class ,'add_purchase'])->name('check_purchase');

//---------------fetch medicines  -------------
Route::get('fetch_saleprice/',[PurchaseController::class ,'fetch_saleprice'])->name('fetch_saleprice');

// -------------add purchase order-------------- 
Route::post('add_purchase',[PurchaseController::class ,'add_purchase'])->name('add_purchase');

// -------------update purchase order-------------- 
Route::post('upd_purchase',[PurchaseController::class ,'upd_purchase'])->name('upd_purchase');

//------------------delete  purchase order-------
Route::get('delete_purchase/{PO_id}',[PurchaseController::class ,'delete_purchase'])->name('delete_purchase');
