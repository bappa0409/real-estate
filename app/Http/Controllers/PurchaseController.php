<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('pages.purchase.index');
    }

    public function create($id =null)
    {

        return view('pages.purchase.create');
    }
}
