@extends('layouts.app')
@section('title') Voucher's @endsection
@section('content')

<!-- Responsive Datatable -->
<section id="responsive-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Debit Vouchers</h4></div>
                <div class="card-datatable">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Accunts Head</th>
                                <th>Code</th>
                                <th>Amount (Taka)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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