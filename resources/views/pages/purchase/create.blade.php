@extends('layouts.app')
@section('content')

    <div class="card-header">
        <h3 class="card-title text-center" style="margin-bottom: 0px">Purchase Form</h3>
    </div>

    <div class="card">
        <form class="form">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" id="first-name-column" class="form-control" placeholder="Name of Material" name="material_name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" id="last-name-column" class="form-control" placeholder="Product Unit" name="product_unit">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" id="city-column" class="form-control" name="product_quantity" placeholder="Product Quantity">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <input type="text" id="country-floating" class="form-control" name="cell_number" placeholder="Cell">
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <textarea class="form-control" style="width: 100%" id="" name="remark" rows="3" placeholder="Remark"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body pt-0">
                <div class="form-group row">
                    <div class="col-12">
                        <button type="reset" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection