@extends('layouts.app')
@section('title') Update Customer @endsection
@section('content')


    <div class="card">
        
        <div class="card-header border-bottom">
            <h4 class="card-title">Update Customer Allotment Form</h4>
            <a type="button" href="{{ route('customer.view', $project_information->id) }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
        </div>
        {{-- {{ route('customer.store') }} --}}
        <form class="form" action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Name of Customer</label>
                            <input type="text" class="form-control" placeholder="Name of Customer" name="customer_name" value="{{ $customer->customer_name }}" autocomplete="off">
                            
                            @error('customer_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Name of Father/Husband</label>
                            <input type="text" class="form-control" placeholder="Name of Father/Husband" name="father_husband_name" autocomplete="off" value="{{ $customer->father_husband_name }}">
                            @error('father_husband_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" name="profession" placeholder="Profession" value="{{ $customer->profession }}">

                            @error('profession')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="number" class="form-control" name="cell_number" value="{{ $customer->cell_number }}" placeholder="Contact Number">

                            @error('cell_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Land Phone: Res.</label>
                            <input type="number" class="form-control" name="land_phone_res" value="{{ $customer->land_phone_res }}" placeholder="Land Phone: Res.">
                        
                            @error('land_phone_res')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Office Number</label>
                            <input type="number" class="form-control" name="office_number" value="{{ $customer->office_number }}" placeholder="Office Number">
                            
                            @error('office_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control" name="email_address" value="{{ $customer->email_address }}" placeholder="Email Address">
                            
                            @error('email_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="card-header">
                <h4 class="card-title">Permanent Address</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">House No</label>
                                    <input type="text" class="form-control" placeholder="House No" value="{{  $customer->house_no}}" name="house_no">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Road No</label>
                                    <input type="text" class="form-control" placeholder="Road No" value="{{ $customer->road_no }}" name="road_no">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Village/Area</label>
                            <input type="text" class="form-control" name="village_area" value="{{ $customer->village_area }}"  placeholder="Village/Area">

                            @error('village_area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input type="text"  class="form-control" value="{{ $customer->post_office }}"  placeholder="Post Office" name="post_office">

                            @error('post_office')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Police Station</label>
                            <input type="text" class="form-control" value="{{ $customer->police_station }}"  name="police_station" placeholder="Police Station">

                            @error('police_station')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">District</label>
                            <input type="text" class="form-control" name="district" value="{{ $customer->district }}"   placeholder="District">

                            @error('district')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="country" value="{{ $customer->country }}" placeholder="Country">
                            
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-header">
                <h4 class="card-title">Present Address</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">House No</label>
                                    <input type="text" class="form-control" placeholder="House No" value="{{  $customer->present_house_no}}" name="present_house_no">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Road No</label>
                                    <input type="text" class="form-control" placeholder="Road No" value="{{ $customer->present_road_no }}" name="present_road_no">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Village/Area</label>
                            <input type="text" class="form-control" name="present_village_area" value="{{ $customer->present_village_area }}" placeholder="Village/Area">
                            @error('present_village_area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input type="text" class="form-control" name="present_post_office" value="{{ $customer->present_post_office }}" placeholder="Post Office">
                            @error('present_post_office')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Police Station</label>
                            <input type="text" class="form-control" name="present_police_station" value="{{ $customer->present_police_station }}" placeholder="Police Station">
                            @error('present_police_station')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">District</label>
                            <input type="text" class="form-control" name="present_district" value="{{ $customer->present_district }}" placeholder="District">
                            @error('present_district')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="present_country" value="{{ $customer->present_country }}" placeholder="Country">

                            @error('present_country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-header">
                <h4 class="card-title">Customer Declarrations</h4>
            </div>
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                                <label>Floor</label>
                                
                                <select class="select2 form-control form-control-lg" name="floor">
                                    <option selected disabled>Select One</option>
                                        @php
                                        $floor_count = $project_information->floor;
                                        if ($project_information->floor) {
                                            for ($floor=1; $floor <= $floor_count; $floor++) { @endphp
                                                <option value="{{ $floor}}">{{ $floor}}</option>
                                        @php
                                            }
                                        }
                                        @endphp
                                </select>
                            {{-- <input type="number" class="form-control" placeholder="Floor" name="floor" value="{{ $project->floor }}"> --}}
                            @error('floor')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Unit</label>
                                <select class="select2 form-control form-control-lg" name="unit">
                                    <option value="{{$customers_declaration->unit}}">{{$customers_declaration->unit}}</option>
                                        {{-- @php
                                        $floor_unit = $project_information->unit;
                                        if ($project_information->unit) {
                                            for ($unit=1; $floor <= $floor_unit; $unit++) { @endphp
                                                <option value="{{ $unit}}">{{ $unit}}</option>
                                        @php
                                            }
                                        }
                                        @endphp --}}
                                </select>
                            {{-- <input type="number" class="form-control" placeholder="Unit" name="unit" value="{{ $project->unit }}"> --}}
                            @error('unit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Area</label>
                            <input type="number" class="form-control" placeholder="Area" name="area" value="{{ $customers_declaration->area }}">
                            @error('area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" placeholder="Price" name="price" value="{{ $customers_declaration->price }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="number" class="form-control" placeholder="Total Amount" name="floor_unit_area_price_total_amount" value="{{ $customers_declaration->floor_unit_area_price_total_amount }}">

                            @error('floor_unit_area_price_total_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text" class="form-control" placeholder="Amount In Word" name="amount_in_word">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="form-group d-flex mt-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="validationRadiojq1" name="parking_type" class="custom-control-input" value="Yes" {{ ($customers_declaration->parking_type=="Yes")? "checked" : "" }}>
                                <label class="custom-control-label" for="validationRadiojq1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio ml-3">
                                <input type="radio" id="validationRadiojq2" name="parking_type" class="custom-control-input" value="No"{{ ($customers_declaration->parking_type=="No")? "checked" : "" }}>
                                <label class="custom-control-label" for="validationRadiojq2">No</label>
                            </div>
                            @error('parking_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label for="">Parking No (If Any)</label>
                            <input type="text" class="form-control" placeholder="Parking No (If Any)" name="parking_no" value="{{ $customers_declaration->parking_no }}">
                            @error('parking_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label for="">Car Parking Price</label>
                            <input type="text" class="form-control" placeholder="Car Parking Price" name="car_parking_price" value="{{ $customers_declaration->car_parking_price }}">
                            @error('car_parking_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text"  class="form-control" placeholder="Amount In Word" name="car_parking_price_in_word">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text" class="form-control" placeholder="In Word" name="utility_charge_in_word">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Utility Charge</label>
                            <input type="number" class="form-control" placeholder="Utility Charge" value="{{ $customers_declaration->utility_charge }}" name="utility_charge">
                            @error('utility_charge')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text" class="form-control" placeholder="In Word" name="total_amount_in_word">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Total Amount</label>
                            <input type="number" class="form-control" placeholder="Total Amount"  value="{{ $customers_declaration->total_amount }}"  name="total_amount">
                            @error('total_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12 form-group">
                        <label for="">Date of Booking Amount</label>
                        <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Date of Booking Amount" name="date_of_booking_amount" value="{{  $customers_declaration->date_of_booking_amount  }}"/>
                        @error('date_of_booking_amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Booking Amount</label>
                            <input type="number" class="form-control" placeholder="Booking Amount" name="booking_amount" value="{{  $customers_declaration->booking_amount  }}">
                            @error('booking_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text"  class="form-control" placeholder="Amount In Word" name="booking_amount_in_word">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 form-group">
                        <label for="">Date of Down Payment</label>
                        <input type="text"  id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Date of Down Payment" name="date_of_down_payment" value="{{  $customers_declaration->date_of_down_payment  }}"/>
                        @error('date_of_down_payment')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Down Payment Amount</label>
                            <input type="number"  class="form-control" placeholder="Down Payment Amount" name="down_payment_amount" value="{{  $customers_declaration->down_payment_amount  }}">
                            @error('down_payment_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Amount In Word</label>
                            <input type="text" class="form-control" placeholder="Amount In Word" name="down_payment_in_word">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1 col-form-label">
                        <label for="first-name">Payment By :</label>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group d-flex mt-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="tt" name="payment_type" value="tt" class="custom-control-input"  {{ ($customers_declaration->payment_type=="payment_type")? "checked" : "" }}>
                                <label class="custom-control-label" for="tt">TT</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="dd" name="payment_type" value="dd" class="custom-control-input" {{ ($customers_declaration->payment_type=="dd")? "checked" : "" }}>
                                <label class="custom-control-label" for="dd">DD</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="p_o" name="payment_type" value="po" class="custom-control-input" {{ ($customers_declaration->payment_type=="po")? "checked" : "" }}>
                                <label class="custom-control-label" for="p_o">P.O</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="cash" name="payment_type" value="cash" class="custom-control-input" {{ ($customers_declaration->payment_type=="cash")? "checked" : "" }}>
                                <label class="custom-control-label" for="cash">Cash</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="a_c" name="payment_type"  value="ac" class="custom-control-input" {{ ($customers_declaration->payment_type=="ac")? "checked" : "" }}>
                                <label class="custom-control-label" for="a_c">A/C</label>
                            </div>
                            @error('payment_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Chaque No</label>
                            <input type="text" class="form-control" placeholder="Chaque No" value="{{  $customers_declaration->chaque_no  }}" name="chaque_no">
                            @error('chaque_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group row">
                            <div class="col-md-3 col-12 col-form-label">
                                <label for="">Mode of installment Payment :</label>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form-group d-flex" style="margin-top:8px">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="montly" name="installment_payment_system" class="custom-control-input" value="Monthly"  {{ ($customers_declaration->installment_payment_system=="Monthly")? "checked" : "" }}>
                                        <label class="custom-control-label" for="montly">Monthly</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-2">
                                        <input type="radio" id="quarterfy" name="installment_payment_system" class="custom-control-input" value="Quarterfy" {{ ($customers_declaration->installment_payment_system=="Quarterfy")? "checked" : "" }}>
                                        <label class="custom-control-label" for="quarterfy">Quarterfy</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-2">
                                        <input type="radio" id="others" name="installment_payment_system" class="custom-control-input" value="Others" {{ ($customers_declaration->installment_payment_system=="Others")? "checked" : "" }}>
                                        <label class="custom-control-label" for="others">Others</label>
                                    </div>
                                </div>
                                @error('installment_payment_system')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="">Note</label>
                            <textarea class="form-control" style="width: 100%" id="" name="note" rows="3" placeholder="Note" >{{  $customers_declaration->note  }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 form-group">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3 mb-2">
                                    <label for="">Upload Profile Picture</label>
                                    <div class="imgUp">
                                        <div class="imagePreview">
                                        </div>
                                        <label class="btn btn-primary imgBtn" style="width: 100%">
                                            Upload Profile Picture
                                            <input type="file" class="uploadFile img mt-1" name="customer_image" value="Customer Image" style="width:100%; height: 100%;overflow: hidden;">
                                        </label>
                                    </div>
                                    @error('project_image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <img src="{{ asset('upload/customer_images/'.$customer->customer_image) }}" alt="" style="height: 275px; width:230px">
                                </div>
                                <div class="col-md-3  mb-2">
                                    <label for="">Signature of Customer</label>
                                    <div class="imgUp">
                                        <div class="imagePreview">
                                        </div>
                                        <label class="btn btn-primary imgBtn" style="width: 100%">
                                            Signature of Customer
                                            <input type="file" class="uploadFile img mt-1" name="customer_signature" value="Upload Photo" style="width:100%; height: 100%;overflow: hidden;">
                                        </label>
                                    </div>
                                    @error('customer_signature')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-3 mt-2">
                                    <img src="{{ asset('upload/customers_signature/' .$customers_declaration->customer_signature) }}" alt="" style="height: 100px; width:230px">
                                </div>
                            </div>
                            @error('customer_signature')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="card-body pt-0">
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')

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