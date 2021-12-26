@extends('layouts.app')
@section('title') Money Receipts @endsection
@section('content')


<!-- Responsive Datatable -->
{{-- <section id="responsive-datatable">
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
</section> --}}
<!--/ Responsive Datatable -->

<section class="invoice-preview-wrapper">
    <div class="row invoice-preview">
        <!-- Invoice -->
        <div class="col-xl-9 col-md-8 col-12">
            <div class="card invoice-preview-card">
                <div class="card-body invoice-padding pb-0">
                    <!-- Header starts -->
                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                        <div>
                            <div class="logo-wrapper mb-1">
                                <h3 class="text-primary invoice-logo ml-0">THL</h3>
                            </div>
                            <p class="card-text mb-25">8/4, Block-C, Lalmatiya, Dhaka</p>
                            <p class="card-text mb-0">+88-02-9115848, 9125241</p>
                        </div>
                        <div class="mt-md-0 mt-1">
                            <h4 class="invoice-title mb-2">
                                Money Receipt
                                <span class="invoice-number">#3492</span>
                            </h4>
                            <div class="invoice-date-wrapper">
                                <p class="invoice-date-title">Date Issued:</p>
                                <p class="invoice-date">25/08/2020</p>
                            </div>
                            <div class="invoice-date-wrapper">
                                <p class="invoice-date-title">Due Date:</p>
                                <p class="invoice-date">29/08/2020</p>
                            </div>
                        </div>
                    </div>
                    <!-- Header ends -->
                </div>

                <hr class="invoice-spacing" />

                <!-- Address and Contact starts -->
                <div class="card-body pt-0">
                    <div class="row invoice-spacing">
                        <div class="col-xl-7 p-0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Name of Customer</td>
                                        <td>Bappa Sutradhar</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Name of Project</td>
                                        <td>American Bank</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Received by</td>
                                        <td>BR91905</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Received with thanks from</td>
                                        <td>BR91905</td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="pr-1 font-weight-bold">TK</td>
                                        <td>BR91905</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">In Word</td>
                                        <td>BR91905</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-5 p-0 mt-xl-0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Floor</td>
                                        <td>United States</td>
                                    </tr>
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Unit</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Dated</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="pr-1 font-weight-bold">Purpose</td>
                                        <td>ETD95476213874685</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Address and Contact ends -->

            </div>
        </div>
        <!-- /Invoice -->

        <!-- Invoice Actions -->
        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary btn-block mb-75" data-toggle="modal" data-target="#send-invoice-sidebar">
                        Send Invoice
                    </button>
                    <button class="btn btn-outline-secondary btn-block btn-download-invoice mb-75">Download</button>
                    <a class="btn btn-outline-secondary btn-block mb-75" href="./app-invoice-print.html" target="_blank">
                        Print
                    </a>
                    <a class="btn btn-outline-secondary btn-block mb-75" href="./app-invoice-edit.html"> Edit </a>
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#add-payment-sidebar">
                        Add Payment
                    </button>
                </div>
            </div>
        </div>
        <!-- /Invoice Actions -->
    </div>
</section>

@endsection