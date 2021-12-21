@extends('layouts.app')
@section('content')


    <div class="card">
        
        <div class="card-header border-bottom">
            <h4 class="card-title">Customer Allotment Form</h4>
            <a type="button" href="{{ route('project.show', $project->id) }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
        </div>

        <form class="form" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="project_id" value="{{ $project->id }}">

                            <label for="">Name of Customer</label>
                            <input type="text" class="form-control" placeholder="Name of Customer" name="customer_name" value="{{ old('customer_name') }}" autocomplete="off">
                            
                            @error('customer_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Name of Father/Husband</label>
                            <input type="text" class="form-control" placeholder="Name of Father/Husband" name="father_husband_name" autocomplete="off" value="{{ old('father_husband_name') }}">
                            @error('father_husband_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" name="profession" placeholder="Profession" value="{{ old('profession') }}">

                            @error('profession')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <input type="number" class="form-control" name="cell_number" value="{{ old('cell_number') }}" placeholder="Contact Number">

                            @error('cell_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Land Phone: Res.</label>
                            <input type="number" class="form-control" name="land_phone_res" value="{{ old('land_phone_res') }} " placeholder="Land Phone: Res.">
                        
                            @error('land_phone_res')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Office Number</label>
                            <input type="number" class="form-control" name="office_number" value="{{ old('office_number') }}" placeholder="Office Number">
                            
                            @error('office_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="email" class="form-control" name="email_address" value="{{ old('email_address') }}" placeholder="Email Address">
                            
                            @error('email_address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="card-header">
                <h4 class="card-title">Permenet Address</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">House No & Road</label>
                            <input type="text" class="form-control" placeholder="House No & Road" value="{{ old('house_road_no') }}" name="house_road_no">
                            
                            @error('house_road_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Village/Area</label>
                            <input type="text" class="form-control" name="village_area" value="{{ old('village_area') }}"  placeholder="Village/Area">

                            @error('village_area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input type="text"  class="form-control" value="{{ old('post_office') }}"  placeholder="Post Office" name="post_office">

                            @error('post_office')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Police Station</label>
                            <input type="text" class="form-control" value="{{ old('police_station') }}"  name="police_station" placeholder="Police Station">

                            @error('police_station')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">District</label>
                            <input type="text" class="form-control" name="district" value="{{ old('district') }}"   placeholder="District">

                            @error('district')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="country"  value="{{ old('country') }}" placeholder="Country">
                            
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
                        <div class="form-group">
                            <label for="">House No & Road</label>
                            <input type="text" class="form-control" placeholder="House No & Road" name="present_house_road_no"  value="{{ old('present_house_road_no') }}">
                            @error('present_house_road_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Village/Area</label>
                            <input type="text" class="form-control" name="present_village_area" value="{{ old('present_village_area') }}" placeholder="Village/Area">
                            @error('present_village_area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Post Office</label>
                            <input type="text" class="form-control" name="present_post_office" value="{{ old('present_post_office') }}" placeholder="Post Office">
                            @error('present_post_office')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Police Station</label>
                            <input type="text" class="form-control" name="present_police_station" value="{{ old('present_police_station') }}" placeholder="Police Station">
                            @error('present_police_station')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">District</label>
                            <input type="text" class="form-control" name="present_district" value="{{ old('present_district') }}" placeholder="District">
                            @error('present_district')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" name="present_country" value="{{ old('present_country') }}" placeholder="Country">

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
                                    @php
                                    $floor_count = $project->floor;
                                    if ($project->floor) {
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
                                    <option value="1A">1A</option>
                                    <option value="1B">1B</option>
                                    <option value="1C">1C</option>
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
                            <input type="number" class="form-control" placeholder="Area" name="area" value="{{ $project->area }}">
                            @error('area')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" placeholder="Price" name="price" value="{{ $project->price }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="number" class="form-control" placeholder="Total Amount" name="floor_unit_area_price_total_amount" value="{{ old('floor_unit_area_price_total_amount') }}">

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
                                <input type="radio" id="validationRadiojq1" name="parking_type" class="custom-control-input" value="Yes">
                                <label class="custom-control-label" for="validationRadiojq1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio ml-3">
                                <input type="radio" id="validationRadiojq2" name="parking_type" class="custom-control-input" value="No">
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
                            <input type="text" class="form-control" placeholder="Parking No (If Any)" name="parking_no">
                            @error('parking_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label for="">Car Parking Price</label>
                            <input type="text" class="form-control" placeholder="Car Parking Price" name="car_parking_price" value="{{ old('car_parking_price') }}">
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
                            <input type="number" class="form-control" placeholder="Unity Charge" value="{{ old('utility_charge') }}" name="utility_charge">
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
                            <input type="number" class="form-control" placeholder="Total Amount"  value="{{ old('total_amount') }}"  name="total_amount">
                            @error('total_amount')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-12 form-group">
                        <label for="">Date of Booking Amount</label>
                        <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Date of Booking Amount" name="date_of_booking_amount"/>
                        @error('date_of_booking_amount')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Booking Amount</label>
                            <input type="number" class="form-control" placeholder="Booking Amount" name="booking_amount" value="{{ old('booking_amount') }}">
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
                        <input type="text"  id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Date of Down Payment" name="date_of_down_payment"/>
                        @error('date_of_down_payment')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Down Payment Amount</label>
                            <input type="number"  class="form-control" placeholder="Down Payment Amount" name="down_payment_amount" value="{{ old('down_payment_amount') }}">
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
                                <input type="radio" id="tt" name="payment_type" value="tt" class="custom-control-input">
                                <label class="custom-control-label" for="tt">TT</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="dd" name="payment_type" value="dd" class="custom-control-input">
                                <label class="custom-control-label" for="dd">DD</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="p_o" name="payment_type" value="po" class="custom-control-input">
                                <label class="custom-control-label" for="p_o">P.O</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="cash" name="payment_type" value="cash" class="custom-control-input">
                                <label class="custom-control-label" for="cash">Cash</label>
                            </div>
                            <div class="custom-control custom-radio ml-2">
                                <input type="radio" id="a_c" name="payment_type"  value="ac" class="custom-control-input">
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
                            <input type="text" class="form-control" placeholder="Chaque No" value="{{ old('chaque_no') }}" name="chaque_no">
                            @error('chaque_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="form-group row">
                            <div class="col-sm-4 col-form-label">
                                <label for="">Mode of installment Payment :</label>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group d-flex" style="margin-top:8px">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="montly" name="installment_payment_system" class="custom-control-input" value="Monthly">
                                        <label class="custom-control-label" for="montly">Monthly</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-2">
                                        <input type="radio" id="quarterfy" name="installment_payment_system" class="custom-control-input" value="Quarterfy">
                                        <label class="custom-control-label" for="quarterfy">Quarterfy</label>
                                    </div>
                                    <div class="custom-control custom-radio ml-2">
                                        <input type="radio" id="others" name="installment_payment_system" class="custom-control-input" value="Others">
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
                            <textarea class="form-control" style="width: 100%" id="" name="note" rows="3" placeholder="Note" ></textarea>
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
                            </div>
                            {{-- <div class="card-body bg-dark">
                                <h4 class="card-title text-center text-light mb-0">Signature of Customer</h4>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="customer_signature">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('admin_assets/app-assets/images/signature.jpg') }}" alt="" style="height: 50px" class="card-img-top">
                            </div> --}}
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