@extends('layouts.app')
@section('content')

    <div class="card-header">
        <h3 class="card-title text-center" style="margin-bottom: 0px">Project Form Update</h3>
    </div>

    <div class="card">
        <form class="form" action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label>Name of Project</label>
                            <input type="text" class="form-control" placeholder="Name of Project" name="name_of_project" value="{{ $project->name_of_project }}">
                            @error('name_of_project')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <label>Project Location</label>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" style="width: 30%" name="project_area" placeholder="example: Town Hall" value="{{ $project->project_area }}">
                            <input type="text" class="form-control"style="width: 70%"  name="project_zila" placeholder="example: Mohammadpur, Dhaka" value="{{ $project->project_zila }}">
                        </div>
                        @error('project_area')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card-header">
                <h4 class="card-title">Project Information</h4>
            </div>
            <div class="card-body d-flex">
                <div class="col-md-9 pl-0">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Floor</label>
                                <input type="number" class="form-control floor_num" name="floor" placeholder="Floor" value="{{ $project->floor }}">
                                
                                @error('floor')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <input type="number" class="form-control floor_unit" name="unit" placeholder="Unit" value="{{ $project->unit }}">
    
                                @error('unit')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Select2 Start  -->
                        <div class="col-md-6 col-12">
                            <label>Booked Flat</label>
                            <select class="select2 form-control form-control-lg booked_flat" id="select2-basic" name="booked_flat[]" value="{{ $project->booked_flat }}" selected multiple>
                                
                            </select>
                        </div>
                        <!-- Select2 End -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Area (sft)</label>
                                <input type="number"  class="form-control" name="area" placeholder="Area (sft)" value="{{ $project->area }}">
    
                                @error('area')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Price (sft)</label>
                                <input type="number" class="form-control" name="price" placeholder="Price (sft)" value="{{ $project->price }}">
    
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Update</button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="imgUp mt-2">
                        @if ($project->project_image)
                            <img src="{{ asset('upload/project_images/'.$project->project_image)}}" class="img-fluid imagePreview">
                        @endif
                        <div class="imagePreview">
                            
                        </div>
                        <label class="btn btn-primary imgBtn" style="width: 100%">
                        Upload Your Project Image
                            <input type="file" class="uploadFile img mt-1" name="project_image" value="Upload Photo" style="width:100%; height: 100%;overflow: hidden;">
                        </label>
                    </div>
                    @error('project_image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    {{-- <div class="card">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="card-body bg-dark">
                                    <h4 class="card-title text-center text-light mb-0">Project Image</h4>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="project_image">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                
                                @error('customer_signature')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('admin_assets/app-assets/images/signature.jpg') }}" alt="" style="height: 100px; width:100%" class="card-img-top">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            {{-- <div class="card-body pt-0">
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>
            </div> --}}
        </form>
    </div>

@endsection