@extends('layouts.app')
@section('content')

    <div class="card-header">
        <h3 class="card-title text-center" style="margin-bottom: 0px">Contractor Add Form</h3>
    </div>

    <div class="card">
        <form class="form" action="{{  route('contractor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-header">
                <h4 class="card-title">Contractor Information</h4>
            </div>
            <div class="card-body d-flex">
                <div class="col-md-9 pl-0">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Contractor Name</label>
                                <input type="text" class="form-control" name="name_of_contractor" value="{{ old('name_of_contractor') }}" placeholder="Name of Contractor">
                                
                                @error('name_of_contractor')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
    
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="number" class="form-control" name="contact_number" value="{{ old('contractor_name') }}"  placeholder="Contractor Name">
                                
                                @error('contact_number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Location Address</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Location Address">
    
                                @error('address')
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
                        Upload Contractor Image
                            <input type="file" class="uploadFile img mt-1" name="image" value="Upload Photo" style="width:100%; height: 100%;overflow: hidden;">
                        </label>
                    </div>
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </form>
    </div>

@endsection


@section('scripts')

    <!--Image JS Start-->
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
    <!-- Image JS End-->

@endsection