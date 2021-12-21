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
                            @php
                               $value = explode(',', $project->booked_flat)
                            @endphp
                            <label>Booked Flat</label>
                            <select class="select2 form-control form-control-lg booked_flat" id="select2-basic" name="booked_flat[]" value="" selected multiple>
                                @foreach ( $value as   $values)
                                     <option value="{{ $values }}" selected>{{  $values}}</option> 
                                @endforeach
                               
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
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')

 <!-- Booked flat JS Start-->
 <script>
    $( document ).ready(function() {

        var floor_num = 0,
            floor_unit = 0,
            total_val = 0;
        $('.floor_num').on('change', function(){
            floor_num = $(this).val();
        });

        $('.floor_unit').on('change', function(){
            floor_unit = $(this).val();
            total_val = floor_unit * floor_num;

            console.log(total_val);
            for (let flat_loop = 1; flat_loop <= floor_num; flat_loop++) {

                for (let flat_unit_count = 1; flat_unit_count <= floor_unit; flat_unit_count++) {
                    if (flat_unit_count == 1) {
                        $('.booked_flat').append('<option>'+ flat_loop+'A</option>');
                    } else if (flat_unit_count == 2) {
                        $('.booked_flat').append('<option>'+ flat_loop+'B</option>');
                    } else if (flat_unit_count == 3) {
                        $('.booked_flat').append('<option>'+ flat_loop+'C</option>');
                    } else if (flat_unit_count == 4) {
                        $('.booked_flat').append('<option>'+ flat_loop+'D</option>');
                    } else if (flat_unit_count == 5) {
                        $('.booked_flat').append('<option>'+ flat_loop+'E</option>');
                    } else if (flat_unit_count == 6) {
                        $('.booked_flat').append('<option>'+ flat_loop+'F</option>');
                    }
                }
            }
            
        });

        $('.booked_flat').on('change', function(){
            var booked_flat_item = $( ".booked_flat option:selected" ).text();
            console.log(booked_flat_item);
        });

        
    });

</script>

@endsection