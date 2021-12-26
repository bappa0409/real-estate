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
                               
                                @foreach ($contractors as $contractor)
                                
                                    <option value="{{ $contractor->id }}">{{ $contractor->name_of_contractor }}</option>
                                    
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
                               
                                    
                                <option value="" selected> Phone number </option>

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
                            <select class="select2 form-control form-control-lg contractor_address" name="contractor_address">
                               
                                    
                                <option value="" selected> Contractor Address </option>

                            </select>
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
                                <tbody id="dynamic_table">
                                    
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
        var i=1;
        $('#addRow').click(function(){
            i++;
            $('#dynamic_table').clone().appendTo('#billingTable');
            // $('#formData').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id"); 
            $('#row'+button_id+'').remove();
        });
        
        // $('#submit').click(function(){		
        //     $.ajax({
        //         url:"name.php",
        //         method:"POST",
        //         data:$('#add_name').serialize(),
        //         success:function(data)
        //         {
        //             alert(data);
        //             $('#add_name')[0].reset();
        //         }
        //     });
        // });
        
    });
    </script>


<script>
    $(document).ready(function() {
      $('select[name="contractor_id"]').on('change', function(){
          var contractor_id = $(this).val();
          if(contractor_id) {
              $.ajax({
                  url: "{{  url('/contractor/ajax') }}/"+contractor_id ,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                      // get data
                    //   console.log(data);
                      $('select[name="contractor_contact_number"]').html('');
                      $('select[name="contractor_address"]').html('');

                     var d =$('select[name="contractor_contact_number"]').empty();
                     var d =$('select[name="contractor_address"]').empty();
                        $.each(data, function(key, value){
                            //console.log(data.contact_number);
                            $('select[name="contractor_contact_number"]').append('<option value="'+ data.id +'">' + data.contact_number + '</option>');
                            $('select[name="contractor_address"]').append('<option value="'+ data.id +'">' + data.address + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });
    });
</script>


@endsection