@extends('layouts.app')
@section('content')

<div class="row justify-content-md-center">
    <div class="col-lg-4 col-md-6 col-12 mt-5">
        <div class="card card-profile mt-5">
            <div class="card-body">
                <div class="profile-image-wrapper">
                    <div class="profile-image">
                        <div class="avatar">
                            <img src="{{ asset('admin_assets/app-assets/images/sad-avatar.jpg') }}">
                        </div>
                    </div>
                </div>
                <h5>Sorry Sir..!!</h5>
                <h4>Please Select Your File No.</h4>
                <hr class="mb-2">

                <div class="col-12">
                    @include('pages.errors.message')
                    <form action="{{ route('file.search') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <input type="text" id="payment-input-name" name="project_file_no" class="form-control" placeholder="Project No.">
                            
                            @error('project_file_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection