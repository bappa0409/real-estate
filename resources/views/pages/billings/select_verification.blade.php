@extends('layouts.app')
@section('title') Verification @endsection
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
                <h4>Please Select Your Seller</h4>
                <hr class="mb-2">

                <div class="col-12">
                    @include('pages.errors.message')
                    <form action="{{ route('select.seller', $project->id) }}" method="POST">
                        @csrf
                        {{-- <input type="text" name="project_id" value="{{ $project->id }}"> --}}
                        <div class="form-group mb-2">
                            <select class="select2 form-control form-control-lg" name="seller">
                                <option selected disabled>Select One</option>
                                <option value="contractor">Contractor</option>
                                <option value="supplier">Supplier</option>
                                <option value="designer">Designer</option>
                            </select>
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