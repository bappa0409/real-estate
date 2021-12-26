@extends('layouts.app')
@section('title') Customer View @endsection
@section('content')

<section class="app-user-view">
    
    <!-- User Card & Plan Starts -->
    <div class="row">
        <!-- User Card starts-->
        <div class="col-xl-8 col-lg-8 col-md-7">
            <div class="card mb-0">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Information of Customer</h4>
                    <a type="button" href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Edit Profile</a>
                </div>
            </div>
            <div class="card user-card">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 d-flex flex-column border-container-lg">
                            <div class="user-avatar-section">
                                <div class="d-flex justify-content-start">
                                    <img class="img-fluid rounded" src="{{ asset('upload/customer_images/'.$customer->customer_image) }}" height="120" width="240" alt="Customer Avatar" />
                                    
                                </div>
                                <div class="d-flex flex-column mt-1 text-center">
                                        <div class="user-info mb-1">
                                            <h4 class="mb-0">{{ $customer->customer_name }}</h4>
                                            <span class="card-text">{{ $customer->email_address }}</span>
                                        </div>
                                      
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-xl-8 col-lg-12 mt-2 mt-xl-0">
                            <div class="card-body pt-0 pl-0">
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="user" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Father/Husband Name</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right"> {{ $customer->father_husband_name }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="credit-card" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Profession</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right"> {{ $customer->father_husband_name }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="phone" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Contact Number</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right"> {{ $customer->cell_number }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="rss" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Land Phone: Res.</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right">{{ $customer->land_phone_res }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="phone-call" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Office Number</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right"> {{ $customer->office_number }}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-7">
                                        <div class="user-info-title">
                                            <i data-feather="flag" class="mr-1"></i>
                                            <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <p class="card-text mb-0 text-right"> {{ $customer->country }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center user-total-numbers mt-0">
                                <div class="d-flex align-items-center mr-2">
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Account Created</h6>
                                            <small>{{ date('D, M j, Y', strtotime($customer->created_at)); }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">File No</h6>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card pb-0 mb-0 mt-3">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 d-flex flex-column border-container-lg">
                                <div class="card-header pl-0 pt-0">
                                    <h4 class="card-title">Permanent Address</h4>
                                </div>
                                <div class="card-body pt-0 pl-0">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">House No</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">:  {{ $customer->house_no }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Road No</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->road_no }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Village/Area</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->village_area }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Post Office</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->post_office }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Police Station</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->police_station }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">District</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->district }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                <div class="card-header pl-0 pt-0">
                                    <h4 class="card-title">Present Address</h4>
                                </div>
                                <div class="card-body pt-0 pl-0">
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">House No</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->present_house_no }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Road No</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">:  {{ $customer->present_road_no }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Village/Area</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->present_village_area }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Post Office</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->present_post_office }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">Police Station</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->present_police_station }}</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px">
                                        <div class="col-6">
                                            <div class="user-info-title">
                                                <span class="card-text user-info-title font-weight-bold mb-0">District</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-text mb-0">: {{ $customer->present_district }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body pt-0">
                                    <h4 class="card-title">Remark (Note)</h4>
                                    <p class="card-text">
                                        {{ $customers_declaration->note }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /User Card Ends-->

        <!-- Plan Card starts-->
        <div class="col-xl-4 col-lg-4 col-md-5">
            <div class="card mb-0">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Declaration</h4>
                    <a type="button" href="{{ route('customers.list', $customer->project_id) }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
                </div>
            </div>
            <div class="card plan-card border-grey">
                <div class="card-body">
                    <ul class="list-unstyled my-1">
                        <li>
                            <span class="align-middle  font-weight-bold">Floor No</span>
                            <span style="float: right">{{ $customers_declaration->floor }}</span>
                        </li>

                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Unit No</span>
                            <span style="float: right">{{ $customers_declaration->unit }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Area (sft)</span>
                            <span style="float: right">{{ $customers_declaration->area }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Price</span>
                            <span style="float: right">{{ $customers_declaration->price }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Total Amount</span>
                            <span style="float: right">{{ $customers_declaration->total_amount }}</span>
                        </li>
                        <hr>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Parking Type</span>
                            <span style="float: right">{{ $customers_declaration->parking_type }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Parking No (If Any)</span>
                            <span style="float: right">{{ $customers_declaration->parking_no }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Car Parking Price</span>
                            <span style="float: right">{{ $customers_declaration->car_parking_price }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Utility Charge</span>
                            <span style="float: right">{{ $customers_declaration->utility_charge }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Total Amount</span>
                            <span style="float: right">{{ $customers_declaration->total_amount }}</span>
                        </li>
                        <hr>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Date of <br> Booking Amount</span>
                            <span style="float: right">{{ date('M j, Y', strtotime($customers_declaration->date_of_booking_amount)) }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Date of <br> Down Payment</span>
                            <span style="float: right">{{ date('M j, Y', strtotime($customers_declaration->date_of_down_payment)) }}</span>
                        </li>
                        <hr>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Booking Amount</span>
                            <span style="float: right">{{ $customers_declaration->booking_amount }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Down Payment</span>
                            <span style="float: right">{{ $customers_declaration->down_payment_amount }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle  font-weight-bold">Payment By</span>
                            <span style="float: right">{{ $customers_declaration->payment_type }}</span>
                        </li>
                        
                        <li class="my-25">
                            <span class="align-middle font-weight-bold">Installment Payment</span>
                            <span style="float: right">{{ $customers_declaration->installment_payment_system }}</span>
                        </li>
                        <li class="my-25">
                            <span class="align-middle font-weight-bold">Chaque No</span>
                            <span style="float: right">{{ $customers_declaration->chaque_no }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Plan CardEnds -->
    </div>
    <!-- User Card & Plan Ends -->
</section>

@endsection