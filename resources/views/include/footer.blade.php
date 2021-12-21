
 <!-- BEGIN: Footer-->
 <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="" target="_blank">Team Holding Limited</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/js/scripts/forms/form-select2.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/js/scripts/forms/form-select2.min.js')}}"></script>

<script src="{{ asset('admin_assets/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin_assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
<!-- END: Page JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
 <script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
 <script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
 <script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
 <script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
 <!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
 <script src="{{ asset('admin_assets/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>
 <!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/file-uploaders/dropzone.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/pagination/jquery.bootpag.min.js')}}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/pagination/jquery.twbsPagination.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/js/scripts/pagination/components-pagination.js')}}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('admin_assets/app-assets/js/scripts/forms/form-file-uploader.js')}}"></script>
<!-- END: Page JS-->

<!-- SweetAlert2 JS Start-->
{{-- <script>
    $(function(){
    
        @if(Session::has('success'))
            Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: '{{ Session::get("success") }}'
        })
        @endif
    });
</script> --}}
<!-- SweetAlert2 JS End-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>