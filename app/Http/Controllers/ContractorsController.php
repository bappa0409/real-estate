<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContractorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors = Contractor::latest()->get();
        return view('pages.contractors.index', compact('contractors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contractors.create');
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
            'name_of_contractor' => 'required',
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
            $file->move('upload/contractor_images/', $filename);
            $path = $filename;
        }
        //Project Image End

        $contractor = new Contractor();
        $contractor->name_of_contractor = $request->name_of_contractor;
        $contractor->email = $request->email;
        $contractor->contact_number = $request->contact_number;
        $contractor->address = $request->address;
        $contractor->image = $path;
        
        $contractor->save();
        return redirect()->route('contractor.list')->with('success','Contractor Added Successfully..!!');   
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
        $contractor = Contractor::findOrFail($id);
        return view('pages.contractors.edit', compact('contractor'));
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
        $contractor = Contractor::findOrFail($id);
        
        $request->validate([
            'name_of_contractor' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        //Validation END

        //Project Image Start
        if($request->hasfile('image')){
            $destination = public_path('upload/contractor_images/'.$contractor->image);
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/contractor_images/', $filename);
            $path = $filename;
        }
        //Project Image End

        
        $contractor->name_of_contractor = $request->name_of_contractor;
        $contractor->email = $request->email;
        $contractor->contact_number = $request->contact_number;
        $contractor->address = $request->address;
        $contractor->image = $path;
        $contractor->status = $request->status;
        
        $contractor->save();
        return redirect()->route('contractor.list')->with('success','Contractor Updated Successfully..!!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contractor = Contractor::findOrFail($id);
        $contractor->delete();

        return redirect()->route('contractor.list')->with('success','Contractor Deleted Successfully..!!');
    }
}
