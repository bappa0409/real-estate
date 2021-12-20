<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DesignersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designers = Designer::latest()->get();
        return view('pages.designers.index', compact('designers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.designers.create');
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
            'name_of_designer' => 'required',
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
            $file->move('upload/designer_images/', $filename);
            $path = $filename;
        }
        //Project Image End

        $designer = new Designer();
        $designer->name_of_designer = $request->name_of_designer;
        $designer->email = $request->email;
        $designer->contact_number = $request->contact_number;
        $designer->address = $request->address;
        $designer->image = $path;
        
        $designer->save();
        return redirect()->route('designer.list')->with('success','Designer Added Successfully..!!');   
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
        $designer = Designer::findOrFail($id);
        return view('pages.designers.edit', compact('designer'));
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
        $designer = Designer::findOrFail($id);
        
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
            $destination = public_path('upload/supplier_images/'.$designer->image);
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

        
        $designer->name_of_designer = $request->name_of_supplier;
        $designer->email = $request->email;
        $designer->contact_number = $request->contact_number;
        $designer->address = $request->address;
        $designer->image = $path;
        $designer->status = $request->status;
        
        $designer->save();
        return redirect()->route('designer.list')->with('success','Designer Updated Successfully..!!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designer = Designer::findOrFail($id);
        $designer->delete();

        return redirect()->route('designer.list')->with('success','Designer Deleted Successfully..!!');
    }
}
