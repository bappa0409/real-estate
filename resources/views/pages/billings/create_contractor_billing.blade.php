@extends('layouts.app')
@section('title') Add Biiling @endsection
@section('content')

    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Add Billing Form (Contractor)</h4>
            <a type="button" href="" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Back</a>
        </div>
        @include('include.messages')
        <form class="form" action="{{ route('store.contractor.billing') }}" method="POST" enctype="multipart/form-data" id="formData">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="">Name of Project</label>
                            <input type="hidden" name="project_id" value="{{ $project->id }}">
                            <input type="text" class="form-control" disabled value="{{ $project->name_of_project }}">
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="">Select Contractor</label>
                            <select class="select2 form-control form-control-lg contractor_name" name="contractor_id" id="selectContractor">
                                <option selected disabled>Select One</option>
                               
                                @foreach ($contractors as $info)
                                    
                                    <option value="{{ $info->id }}">{{ $info->name_of_contractor }}</option>

                                    
                                @endforeach
                            </select>
                            @error('contractor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label for="">Contact Number</label>
                            <select class="select2 form-control form-control-lg contractor_contact_number" name="contractor_contact_number">
                                @foreach ($contractors as $info)
                                    
                                <option value="{{ $info->id }}" data-contact-num-id="{{ $info->id }}">{{ $info->contact_number }}</option>

                                    
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2 col-12">
                        <div class="form-group">
                            <label for="">Bill Amount</label>
                            <input type="number" class="form-control" name="bill_amount" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="contractor_address" value="">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <label for="">File Opening Date</label>
                        <input type="text" id="fp-default" name="file_opening_date" class="form-control flatpickr-basic flatpickr-input" placeholder="File Opening Date"/>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="form-group">
                            <label for="">Fixed Bill Amount</label>
                            <input type="number" class="form-control" name="fixed_bill_amount" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table" id="billingTable">
                                <thead>
                                    <tr>
                                        <th style="vertical-align: middle; text-center">SN</th>
                                        <th style="vertical-align: middle; width:10%">Bill Date</th>
                                        <th style="vertical-align: middle">Bill Amount</th>
                                        <th style="vertical-align: middle">Payment Receiving Date</th>
                                        <th style="vertical-align: middle">Challan No</th>
                                        <th style="vertical-align: middle">Payment Receiving Amount</th>
                                        <th style="vertical-align: middle">Balance Amount</th>
                                        <th style="vertical-align: middle">
                                            <button class="btn btn-primary" type="button" id="addRow">Add</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>1</td>
                                        <td style="padding-left: 3px; padding-right: 3px;">
                                            <input type="text" id="fp-default" name="bill_date" class="form-control flatpickr-basic flatpickr-input" placeholder="Bill Date"/>
                                        </td>
                                        <td style="padding-left: 3px; padding-right: 3px;">
                                            <input type="number" class="form-control" placeholder="Bill Amount" name="bill_amount">
                                        </td>
                                        <td style="padding-left: 3px; padding-right: 3px;">
                                            <input type="text" id="fp-default" name="payment_receiving_date" class="form-control flatpickr-basic flatpickr-input" placeholder="Payment Receiving Date"/>
                                        </td>
                                        <td style="padding-left: 3px; padding-right: 3px;">
                                            <input type="text" class="form-control" placeholder="Challan No" name="challan_no">
                                        </td>
                                        <td style="padding-left: 3px; padding-right: 3px;">
                                            <input type="number" name="payment_receiving_amount" class="form-control" placeholder="Payment Receiving Amount"/>
                                        </td>
                                        <td colspan="2" style="padding-left: 3px; padding-right: 3px;">
                                            <input type="number" class="form-control" placeholder="Balance Amount" name="balance_amount">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body d-flex pt-0" style="float: right">
                <div class="col-md-12 pl-0">
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="reset" class="btn btn-outline-secondary waves-effect mr-1 ">Reset</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('scripts')

<script>
    $(document).ready(function(){
     
     $('#addRow').on('submit', function(event){
      event.preventDefault();
      $.ajax({
       url:"/add/billing/contractor/",
       method:"POST",
       data:$(this).serialize(),
       dataType:"json",
       beforeSend:function(){
        $('#add').attr('disabled', 'disabled');
       },
       success:function(data){
        $('#add').attr('disabled', false);
        if(data.first_name)
        {
         var html = '<tr>';
         html += '<td>'+data.first_name+'</td>';
         html += '<td>'+data.last_name+'</td></tr>';
         $('#table_data').prepend(html);
         $('#add_details')[0].reset();
        }
       }
      })
     });
     
    });
    </script>

    <script>
        $(document).ready(function() {
            $(".contractor_name").on('change', function () { 
                var identified_id = $(this).val();

                $(".contractor_contact_number > option").css(
                    "display":"none"
                );
                // $(".contractor_contact_number > option").each(function() {

                //     if(this.value == identified_id) {
                //         $("option").show();
                //     } else {
                //         $("option").hide();
                //     }

                // });

            });
        });
    </script>

    {{-- <script type="text/javascript">
        $("#selectContractor").change(function(){
            $.ajax({
                url: "{{ route('admin.cities.get_by_country') }}?country_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#city').html(data.html);
                }
            });
        });
    </script> --}}
{{-- <script type="text/javascript">
    var scntDiv = $('#billingTable');
    var i = $('#billingTable tr').size() + 1;

    $('#addRow').click(function() {
        scntDiv.append('
        <tr><td><select name="type" id="type"><option value="Debit">Debit</option><option value="Credit">Credit</option></select></td><td><select name="accounts" id="accounts"><option value="">SELECT</option><option value="One">One</option><option value="Two">Two</option></select></td><td><input type="text" name="debit_amount" id="debit_amount"/></td><td><input type="text" name="credit_amount" id="credit_amount"/></td><td><a href="#" id="remScnt">Remove</a></td></tr>');   
        i++;
        return false;
    });

    //Remove button
    $(document).on('click', '#remScnt', function() {
        if (i > 2) {
            $(this).closest('tr').remove();
            i--;
        }
        return false;
    });​ 
</script> --}}
@endsection