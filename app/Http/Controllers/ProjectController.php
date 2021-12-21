<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(11);

        return view('pages.projects.index', compact('projects'));
    }

    public function list()
    {
        return view('pages.projects.list');
    }

    public function create()
    {
        return view('pages.projects.create');
    }

    public function store(Request $request)
    {
        //Validation for Project Information Start
        $request->validate([
            'name_of_project' => 'required|unique:projects',
            'project_area' => 'required',
            'project_zila' => 'required',
            'floor' => 'required|numeric',
            'unit' => 'required|numeric',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'project_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],
        [
            'project_area.required' => 'The Project Location field is required.',
            'project_zila.required' => 'Project Location field is required.'
        ]);
        //Validation END

        //Project Image Start
        if($request->hasfile('project_image')){
            $file = $request->file('project_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/project_images/', $filename);
            $path = $filename;
        }
        //Project Image End
        $file_no = 'THL'.time();

        $project = new Project();
        $project->project_file_no = $file_no;
        $project->name_of_project = $request->name_of_project;
        $project->project_area = $request->project_area;
        $project->project_zila = $request->project_zila;
        $project->floor = $request->floor;
        $project->unit = $request->unit;
        $project->area = $request->area;
        $project->price = $request->price;
        $project->project_image = $path;
        
        //For Booked Flat
        $data = $request->booked_flat;
        $request->booked_flat = implode(',', $data);
        $project->booked_flat = $request->booked_flat;
        //End Booked Flat
        

        $project->save();
        return redirect()->route('home')->with('success','Project created successfully!');        
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('pages.projects.show', compact('project'));
    }
    public function edit($id)
    {
        $project = Project::find($id);
        return view('pages.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        

        //Validation for Project Information Start
        $request->validate([
            'name_of_project' => 'required',
            'project_area' => 'required',
            'project_zila' => 'required',
            'floor' => 'required|numeric',
            'unit' => 'required|numeric',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'project_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'project_area.required' => 'The Project Location field is required.',
            'project_zila.required' => 'Project Location field is required.'
        ]);
        //Validation END

        $project = Project::find($id);

        //Project Image Start
        if($request->hasfile('project_image')){

            $destination = public_path('upload/project_images/'.$project->project_image);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('project_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/project_Images/', $filename);
            $path = $filename;
        }
        //Project Image End

        $project->name_of_project = $request->name_of_project;
        $project->project_area = $request->project_area;
        $project->project_zila = $request->project_zila;
        $project->floor = $request->floor;
        $project->unit = $request->unit;
        $project->area = $request->area;
        $project->price = $request->price;
        $project->project_image = $path;
        
        //For Booked Flat
        $data = $request->booked_flat;
        $request->booked_flat = implode(',', $data);
        $project->booked_flat = $request->booked_flat;
        //End Booked Flat
        

        $project->save();
        return redirect()->route('home')->with('success','Project Updated Successfully!');        
    }

    //For show Customer Create page 
    public function create_customer($id = null)
    {

        try{
            $project = Project::findOrFail($id);
            return view('pages.customers.create', compact('project'));
        }
        // catch(Exception $e) catch any exception
        catch(ModelNotFoundException $e)
        {
            return view('pages.errors.page_not_found');
        }
    
    }
    //For show Customer Create page














    
}
