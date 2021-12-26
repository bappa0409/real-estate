<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function index($id = null)
    {
        if($id){
            $customer = Customer::findOrFail($id);
            return view('pages.installments.installment_form', compact('customer'));
        }else{
           
        }
      
    }
}
