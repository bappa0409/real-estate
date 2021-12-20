@extends('layouts.app')
@section('content')

<!-- Responsive Datatable -->
<section id="responsive-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Money Receipts</h4></div>
                <div class="card-datatable">
                    <table class="dt-responsive table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name of Customer</th>
                                <th>Name of Project</th>
                                <th>Floor</th>
                                <th>Unit</th>
                                <th>Received By</th>
                                <th>Dated</th>
                                <th>Received From</th>
                                <th>Purpose</th>
                                <th>TK</th>
                                <th>Taka In Word</th>
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