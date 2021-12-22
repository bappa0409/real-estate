@extends('layouts.app')
@section('title') Create Project @endsection
@section('content')

    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Project Form</h4>
            <a type="button" href="{{ route('home') }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
        </div>

        <form class="form" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                
               @include('pages.errors.message')
                
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label>Name of Project</label>
                            <input type="text" class="form-control" placeholder="Name of Project" name="name_of_project" value="{{ old('name_of_project') }}">
                            @error('name_of_project')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <label>Project Location</label>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" style="width: 30%" name="project_area" placeholder="example: Town Hall" value="{{ old('project_area') }}">
                            <input type="text" class="form-control"style="width: 70%"  name="project_zila" placeholder="example: Mohammadpur, Dhaka" value="{{ old('project_zila') }}">
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
                                <input type="number" class="form-control floor_num" name="floor" placeholder="Floor">
                                
                                @error('floor')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <input type="number" class="form-control floor_unit" name="unit" placeholder="Unit">
    
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
                            <select class="select2 form-control form-control-lg booked_flat"  id="select2-basic" name="booked_flat[]" readonly="" multiple>
                                
                            </select>
                        </div>
                        <!-- Select2 End -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Area (sft)</label>
                                <input type="number"  class="form-control" name="area" placeholder="Area (sft)" value="{{ old('area') }}">
    
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
                                <input type="number" class="form-control" name="price" placeholder="Price (sft)" value="{{ old('price') }}">
    
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="imgUp mt-2">
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
    <!-- Booked flat JS End-->

    <!-- Booked flat Image JS Start-->
    <script>
        $(function() {
            $(document).on("change",".uploadFile", function()
            {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file
        
                    reader.onloadend = function(){ // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }
            });
        });
    </script>
    <!-- Booked flat Image JS End-->

@endsection