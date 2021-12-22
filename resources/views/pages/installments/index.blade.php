@extends('layouts.app')
@section('title') Installment @endsection
@section('content')

<!-- Responsive Datatable -->
<section id="responsive-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Installment List</h4>
                    <a type="button" href="{{ route('purchase.create') }}" class="btn btn-primary waves-effect waves-float waves-light" style="float: right">Add Project</a>
                </div>
                <div class="card-datatable">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name of Material</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Remarks</th>
                                <th>Requisition No</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>111 </td>
                                <td>111 </td>
                                <td>111 </td>
                                <td>111 </td>
                                <td>111 </td>
                                <td>111 </td>
                                <td>111 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Responsive Datatable -->

@endsection