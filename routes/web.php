<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\ContractorsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\DesignersController;
use App\Http\Controllers\FileSearchController;

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

Auth::routes();

    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:web'])->group(function () {
    
    //Customer Route
    Route::prefix('project')->group(function () {
        Route::get('/index', [ProjectController::class, 'index'])->name('project.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/store', [ProjectController::class, 'store'])->name('project.store');
        Route::get('/project-details/{id}', [ProjectController::class, 'show'])->name('project.show');
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
        Route::post('/update/{id}', [ProjectController::class, 'update'])->name('project.update');
        Route::get('/create/customer/{id?}', [ProjectController::class, 'create_customer'])->name('project.create_customer');
    });
     //End Customer Route

    Route::post('/file/search', [FileSearchController::class, 'file_search'])->name('file.search');

    //Customer Route
    Route::prefix('customer')->group(function () {
        Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
        Route::get('/list/{id?}', [CustomerController::class, 'index'])->name('customers.list');
        Route::get('/view/{id?}', [CustomerController::class, 'show'])->name('customer.view');
        Route::post('/delete/{id?}', [CustomerController::class, 'destroy'])->name('customer.delete');
    });
    //End Customer Route

    //Contractor Route
    Route::prefix('contractor')->group(function () {
        Route::get('/create', [ContractorsController::class, 'create'])->name('contractor.create');
        Route::post('/store', [ContractorsController::class, 'store'])->name('contractor.store');
        Route::get('/list', [ContractorsController::class, 'index'])->name('contractor.list'); 
        Route::get('/edit/{id}', [ContractorsController::class, 'edit'])->name('contractor.edit');
        Route::post('/update/{id}', [ContractorsController::class, 'update'])->name('contractor.update');
        Route::get('/delete/{id}', [ContractorsController::class, 'destroy'])->name('contractor.delete');
    });
    //End Contractor Route

    //Supplier Route
    Route::prefix('supplier')->group(function () {
        Route::get('/create', [SuppliersController::class, 'create'])->name('supplier.create');
        Route::post('/store', [SuppliersController::class, 'store'])->name('supplier.store');
        Route::get('/list', [SuppliersController::class, 'index'])->name('supplier.list'); 
        Route::get('/edit/{id}', [SuppliersController::class, 'edit'])->name('supplier.edit');
        Route::post('/update/{id}', [SuppliersController::class, 'update'])->name('supplier.update');
        Route::get('/delete/{id}', [SuppliersController::class, 'destroy'])->name('supplier.delete');
    });
    //End Supplier Route]

    //Designer Route
    Route::prefix('designer')->group(function () {
        Route::get('/create', [DesignersController::class, 'create'])->name('designer.create');
        Route::post('/store', [DesignersController::class, 'store'])->name('designer.store');
        Route::get('/list', [DesignersController::class, 'index'])->name('designer.list'); 
        Route::get('/edit/{id}', [DesignersController::class, 'edit'])->name('designer.edit');
        Route::post('/update/{id}', [DesignersController::class, 'update'])->name('designer.update');
        Route::get('/delete/{id}', [DesignersController::class, 'destroy'])->name('designer.delete');
    });
    //End Designer Route

    //Billing Route
    Route::prefix('billing')->group(function () {
        Route::get('/select/{id?}', [BillingController::class, 'select'])->name('billing.select');
        Route::get('/add/billing/contractor/{id}', [BillingController::class, 'add_billing_contractor'])->name('add.billing.contractor');
        Route::post('/store/billing/contractor', [BillingController::class, 'store_billing_contractor'])->name('store.contractor.billing');
        Route::get('/add/billing/supplier/{id}', [BillingController::class, 'add_billing_supplier'])->name('add.billing.supplier');
        Route::post('/store/billing/supplier', [BillingController::class, 'store_billing_supplier'])->name('store.billing.supplier');
        Route::get('/add/billing/designer/{id}', [BillingController::class, 'add_billing_designer'])->name('add.billing.designer');
        Route::post('/store/billing/designer', [BillingController::class, 'store_billing_designer'])->name('store.billing.designer');
        Route::post('/select/seller/{id?}', [BillingController::class, 'select_seller'])->name('select.seller');
        // Route::get('/list', [BillingController::class, 'index'])->name('billing.list'); 
        // Route::get('/edit/{id}', [BillingController::class, 'edit'])->name('billing.edit');
        // Route::post('/update/{id}', [BillingController::class, 'update'])->name('billing.update');
        // Route::get('/delete/{id}', [BillingController::class, 'destroy'])->name('billing.delete');
    });
    //End Billing Route

    Route::get('/contractor/ajax/{contractor_id}', [BillingController::class, 'getContractor']);

    //Purchase Route
    Route::prefix('purchase')->group(function () {
        Route::get('/create', [PurchaseController::class, 'create'])->name('purchase.create');
        Route::get('/list', [PurchaseController::class, 'index'])->name('purchase.index');
    });
    //End Purchase Route

     //Voucher Route
     Route::prefix('voucher')->group(function () {
        Route::get('/money-receipts', [VoucherController::class, 'money_receipts'])->name('voucher.money.receipt');
        Route::get('/debit-vouchers', [VoucherController::class, 'debit_vouchers'])->name('voucher.debit.voucher');
    });
    //End Voucher Route

    //Installment Route
        Route::prefix('installment')->group(function () {
            Route::get('/all-installment/{id?}', [InstallmentController::class, 'index'])->name('installment.index');
        });
    //End Installment Route
});




//Route::get('/purchase/order-list', [PurchaseController::class, 'index'])->name('purchase.order.list');

//Route::get('/voucher/create', [App\Http\Controllers\VoucherController::class, 'index'])->name('debit.voucher.create');


