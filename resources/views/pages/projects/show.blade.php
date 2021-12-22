@extends('layouts.app')
@section('title') Project Details @endsection
@section('content')

    {{-- <div class="card-header">
        <h3 class="card-title text-center" style="margin-bottom: 0px">Project Details</h3>
    </div> --}}
    
    <div class="card">
        <div class="card-header" style="background-color:rgb(46 46 46 / 18%)">
            <div class="col-md-3 col-12">
                <h4 class="card-title">Project Informations</h4>
            </div>
            <div class="col-md-9 col-12">
                <a type="button" href="{{ route('project.edit', $project->id ) }}" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="float: right">Edit Project</a>
                <a type="button" href="{{ route('customers.list', $project->id) }}" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="float: right">Customers List</a>
                <a type="button" href="{{ route('billing.select', $project->id) }}" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="float: right">Add Billing</a>
                <a type="button" href="{{ route('project.create_customer', $project->id) }}" class="btn btn-primary mr-1 waves-effect waves-float waves-light" style="float: right">Add Customer</a>
            </div>
        </div>

        <div class="card-body d-flex">
            
            <!-- Developer Meetup Card -->
            <div class="col-lg-8 col-md-6 col-12">
                <div class="card card-developer-meetup">
                    <div class="card-body pl-0 pt-0 mt-3">
                        <div class="meetup-header d-flex align-items-center">
                            <div class="my-auto">
                                <h4 class="card-title mb-25">{{ $project->name_of_project }}</h4>
                                <p class="card-text mb-0">File No : {{ $project->project_file_no }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Project Started</h6>
                                        <h6 class="mb-0">Sat, May 25, 2020</h6>
                                       
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Total Floor</h6>
                                        <h6 class="mb-0">{{ $project->floor }}</h6>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">{{ $project->project_area }}</h6>
                                        <small>{{ $project->project_zila }}</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Area (sft)</h6>
                                        <h6 class="mb-0">{{ $project->area }} sft</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Unit Count</h6>
                                        <h6 class="mb-0">{{ $project->unit }}</h6>
                                       
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        @php
                                            $total_unit = $project->unit * $project->floor
                                        @endphp
                                        <h6 class="mb-0">Total Unit</h6>
                                        <h6 class="mb-0">{{ $total_unit }}</h6>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Price</h6>
                                        <h6 class="mb-0">{{ $project->price }} TK</h6>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Booked Flat</h6>
                                        <h6 class="mb-0">{{ $project->booked_flat }}</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Developer Meetup Card -->
           
            <div class="col-lg-4 col-md-6 col-12 mt-3" style="border: 1px solid #ebe9f1;">
                <div class="card card-profile pt-2">
                    <img src="{{ asset('admin_assets/app-assets/images/project.jpg')}}" class="img-fluid card-img-top" alt="Profile Cover Photo">
                    <div class="card-body">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <div class="avatar">
                                    <img src="{{ asset('upload/project_images/'.$project->project_image)}}" alt="Profile Picture">
                                </div>
                            </div>
                        </div>
                        <h3>{{ $project->name_of_project }}</h3>
                        <hr class="mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted fw-bolder">File No</h6>
                                <h3 class="mb-0">{{ $project->project_file_no }}</h3>
                            </div>
                            <div>
                                <h6 class="text-muted fw-bolder">Customers</h6>
                                <h3 class="mb-0">156</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection