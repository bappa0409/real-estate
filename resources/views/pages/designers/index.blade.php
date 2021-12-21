@extends('layouts.app')
@section('content')

<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">

            <!-- Responsive Datatable -->
            <section id="responsive-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">List of All Designers</h4>
                                <a type="button" href="{{ route('designer.create') }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Add Designer</a>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sn = 1
                                        @endphp
                                        @foreach ($designers as $info)
                                        <tr>
                                            <td>{{ $sn++ }}</td>
                                            <td>
                                                <img class="rounded-circle cursor-pointer" src="{{ asset('upload/designer_images/'.$info->image)}}" alt="avatar" height="30" width="30">
                                            </td>
                                            <td>{{ $info->name_of_designer }}</td>
                                            <td>{{ $info->email }}</td>
                                            <td>{{ $info->contact_number }}</td>
                                            <td>{{ $info->address }}</td>
                                            <td>
                                                @if ($info->status == 1)
                                                    <span class="badge badge-pill badge-light-success mr-1">Active</span>
                                                    @else
                                                    <span class="badge badge-pill badge-light-danger mr-1">Deactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                        <svg xmlns="" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('designer.edit', $info->id) }}">
                                                            <svg xmlns="" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('designer.delete', $info->id) }}">
                                                            <svg xmlns="" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Responsive Datatable -->
        </div>
    </div>
</div>
@endsection