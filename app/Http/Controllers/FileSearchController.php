<?php

namespace App\Http\Controllers;

use App\Models\CustomerDeclaration;
use App\Models\Project;
use Illuminate\Http\Request;

class FileSearchController extends Controller
{
    public function file_search(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'project_file_no' => 'required',
        ]);
       
        $project = Project::with('customers')->where('project_file_no', $request->project_file_no)->first();

        if($project){
            //$project = $project;
            return view('pages.customers.index', compact('project'));
            return redirect()->route('customer.create');
            //return view('pages.projects.show', compact('project'));
        }else{
            return redirect()->back()->with('error', 'Your File No is Invalid..!!');
        }
        
    }
}
