@extends('layouts.app')
@section('content')

<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Starts -->
        <section id="dashboard-ecommerce">
            <div class="row match-height">

                <!-- Medal Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-developer-meetup">
                        <div class="card-body py-2">
                            
                                <div style="position: relative;height: 130px;">
                                    <a href="{{ route('project.create') }}">
                                        <div class="d-flex" style=" margin: 0; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                                            <i class="far fa-plus-square" style="font-size: 20px;"></i>
                                            <h3 class="pl-1">Add Project</h3>
                                        </div>
                                    </a>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->

                <!-- Medal Card -->
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <a href="{{ route('project.show', $project->id) }}">
                            {{-- <a href="{{ route('project.edit', $project->id) }}"> --}}
                                <div class="card-body d-flex py-2">
                                    <div class="col-md-8 pl-0">
                                        <div class="meetup-header d-flex align-items-center mb-0">
                                            <div class="my-auto">
                                                <h4 class="card-title mb-1">{{ $project->name_of_project }}</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="avatar bg-light-primary rounded mr-1">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0">{{ date('D, M j, Y', strtotime($project->created_at)); }}</h6>
                                                <small>{{ date('g:i a', strtotime($project->created_at)); }}</small>
                                            </div>
                                        </div>
                                        <div class="media" style="margin-top:5px">
                                            <div class="avatar bg-light-primary rounded mr-1">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0">{{ $project->project_area }}</h6>
                                                <small>{{ $project->project_zila }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-0 pl-0">
                                        @if ($project->project_image)
                                            <img src="{{ asset('upload/project_images/'.$project->project_image)}}" class="img-fluid img-thumbnail"alt="Project Picture"  style="width:100%; height: 130px;">
                                        @else
                                            <img src="{{ asset('admin_assets/app-assets/images/project_image_thumbnail.jpg')}}" class="img-fluid img-thumbnail"alt="Project Picture"  style="width:100%; height: 130px;">
                                        @endif

                                        
                                    </div>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!--/ Medal Card -->

            </div>
            
            {{ $projects->links('vendor.pagination.custom')}}
            
        </section>
        <!-- Dashboard ends -->

    </div>
</div>
@endsection 