<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function money_receipts(){
        return view('pages.vouchers.money_receipts');
    }
    public function debit_vouchers(){
        return view('pages.vouchers.debit_voucher');
    }
}
