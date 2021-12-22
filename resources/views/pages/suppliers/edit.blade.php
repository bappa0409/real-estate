@extends('layouts.app')
@section('title') Update Supplier @endsection
@section('content')

    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h3 class="card-title mb-0">Supplier Update Form</h3>
            </div>
            <div class="col-6">
                <a href="{{ route('supplier.list') }}" class="btn btn-primary" type="button" style="float: right">Back</a>
            </div>
        </div>
    </div>

    <div class="card">
        <form class="form" action="{{ route('supplier.update', $supplier->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-header">
                <h4 class="card-title">Supplier Information</h4>
            </div>
            <div class="card-body d-flex">
                <div class="col-md-9 pl-0">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Name of Supplier</label>
                                <input type="text" class="form-control" name="name_of_supplier" value="{{ $supplier->name_of_supplier }}" placeholder="Name of Supplier">
                                
                                @error('name_of_supplier')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ $supplier->email }}" placeholder="Email Address">
    
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
                                <input type="number" class="form-control" name="contact_number" value="{{ $supplier->contact_number }}"  placeholder="Contractor Name">
                                
                                @error('contact_number')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label>Location Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $supplier->address }}" placeholder="Location Address">
    
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group d-flex" style="margin-top:8px">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="active" name="status" class="custom-control-input" value="1" {{ ($supplier->status =="1")? "checked" : "" }} >
                                    <label class="custom-control-label" for="active">Active</label>
                                </div>
                                <div class="custom-control custom-radio ml-2">
                                    <input type="radio" id="deactive" name="status" class="custom-control-input" value="0" {{ ($supplier->status =="0")? "checked" : "" }} >
                                    <label class="custom-control-label" for="deactive">Deactive</label>
                                </div>
                            </div>
                        </div>
                        @error('installment_payment_system')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            <a href="{{ route('supplier.list') }}" class="btn btn-outline-secondary waves-effect" type="button">Back</a>
                        </div>
                    </div>
                </div>
                <img class="rounded-circle cursor-pointer" src="{{ asset('upload/supplier_images/'.$supplier->image)}}" alt="avatar" height="30" width="30">
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