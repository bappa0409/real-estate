@extends('layouts.app')
@section('title') Customer's List @endsection
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
                                <div class="col-md-5">
                                    <h4 class="card-title">Customers of {{ $project->name_of_project }} Project</h4>
                                </div>
                                <div class="col-md-5">
                                    <a type="button" href="{{ route('customer.create') }}" class="btn btn-primary waves-effect waves-float waves-light ml-2" style="float: right">Back</a>
                                    <a type="button" href="{{ route('customer.create') }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Add Customer</a>
                                </div>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle; width:5%">SN</th>
                                            <th style="vertical-align: middle">Image</th>
                                            <th style="vertical-align: middle">Name of Customer</th>
                                            <th style="vertical-align: middle">Email</th>
                                            <th style="vertical-align: middle">Address</th>
                                            <th style="vertical-align: middle">Area</th>
                                            <th style="vertical-align: middle">Installment</th>
                                            <th style="vertical-align: middle">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sn= 1;
                                        @endphp
                                        @foreach ($project->customers as $info)
                                            <tr>
                                                <td>{{ $sn++ }}</td>
                                                <td>
                                                    <img src="{{ asset('upload/customer_images/' .$info->customer_image)}}" class="rounded mr-75" height="40" width="40" alt="Customer Image">
                                                </td>
                                                
                                                <td>{{$info->customer_name}}</td>
                                                <td>{{ $info->email_address  }}</td>
                                                <td>H- {{ $info->house_no}}, R- {{ $info->road_no}}</td>
                                                <td>{{ $info->police_station  }}</td>
                                                <td>
                                                    <a href="{{ route('installment.index',  $info->id)  }}" type="button" class="btn btn-success waves-effect waves-float waves-light">Update</a>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('customer.edit', $info->id) }}">
                                                                 <i data-feather='edit'></i>
                                                                <span class="pl-1">Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="{{ route('customer.view', $info->id) }}">
                                                                <i data-feather='eye'></i>
                                                                <span class="pl-1">View</span>
                                                            </a>
                                                            <form action="{{ route('customer.delete', $info->id) }}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="dropdown-item" >
                                                                    <i data-feather='trash'></i>
                                                                    <span class="pl-1">Delete</span>
                                                                </button>
                                                            </form>
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