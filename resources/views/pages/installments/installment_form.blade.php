@extends('layouts.app')
@section('title') Installment @endsection
@section('content')

<section id="multiple-column-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Installment Amount Form ( {{ $customer->customer_name }})</h4>
                    <a type="button" href="" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
                </div>

                <div class="card-body mt-2">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Initial Installment Amount</label>
                                    <input type="text" id="first-name-column" class="form-control" placeholder="Initial Installment Amount" name="fname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Remaining Installment Amount</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Remaining Installment Amount" name="lname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Latest Installment Amount</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Latest Installment Amount" name="city-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Installment Date</label>
                                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Installment Date" name="date_of_booking_amount"/>
                                    @error('date_of_booking_amount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Next Installment Date</label>
                                    <input type="text" id="fp-default" class="form-control flatpickr-basic flatpickr-input" placeholder="Next Installment Date" name="date_of_booking_amount"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">note</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="reset" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection