<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::latest()->get();
        return view('pages.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_of_supplier' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //Validation END

        //Project Image Start
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/supplier_images/', $filename);
            $path = $filename;
        }
        //Project Image End

        $supplier = new Supplier();
        $supplier->name_of_supplier = $request->name_of_supplier;
        $supplier->email = $request->email;
        $supplier->contact_number = $request->contact_number;
        $supplier->address = $request->address;
        $supplier->image = $path;
        
        $supplier->save();
        return redirect()->route('supplier.list')->with('success','Supplier Added Successfully..!!');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('pages.suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        
        $request->validate([
            'name_of_supplier' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //Validation END

        //Project Image Start
        if($request->hasfile('image')){
            $destination = public_path('upload/supplier_images/'.$supplier->image);
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/supplier_images/', $filename);
            $path = $filename;
        }
        //Project Image End

        
        $supplier->name_of_supplier = $request->name_of_supplier;
        $supplier->email = $request->email;
        $supplier->contact_number = $request->contact_number;
        $supplier->address = $request->address;
        $supplier->image = $path;
        $supplier->status = $request->status;
        
        $supplier->save();
        return redirect()->route('supplier.list')->with('success','Supplier Updated Successfully..!!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.list')->with('success','Supplier Deleted Successfully..!!');
    }
}
