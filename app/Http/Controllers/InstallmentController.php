<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function index()
    {
        return view('pages.installments.index');
    }
}
