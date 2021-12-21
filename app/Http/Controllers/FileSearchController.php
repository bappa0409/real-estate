<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FileSearchController extends Controller
{
    public function file_search(Request $request)
    {
        $request->validate([
            'project_file_no' => 'required',
        ]);
        
        $project = Project::where('project_file_no', $request->project_file_no)->first();
        
        if($project){
            $project = $project;
            // dd( $project);
            return view('pages.customers.create', compact('project'));
            //return redirect()->route('customer.create');
            //return view('pages.projects.show', compact('project'));
        }else{
            return redirect()->back()->with('error', 'Your File No is Invalid..!!');
        }
        
    }
}
