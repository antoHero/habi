<!-- jQuery  -->
<script src="{{ url('backend_assets') }}/js/jquery.min.js"></script>
<script src="{{ url('backend_assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('backend_assets') }}/js/metismenu.min.js"></script>
<script src="{{ url('backend_assets') }}/js/waves.js"></script>
<script src="{{ url('backend_assets') }}/js/feather.min.js"></script>
<script src="{{ url('backend_assets') }}/js/simplebar.min.js"></script>
<script src="{{ url('backend_assets') }}/js/jquery-ui.min.js"></script>
<script src="{{ url('backend_assets') }}/js/moment.js"></script>
<script src="{{ url('backend_assets') }}/plugins/daterangepicker/daterangepicker.js"></script>

<script src="{{ url('backend_assets') }}/plugins/apex-charts/apexcharts.min.js"></script>
<script src="{{ url('backend_assets') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{ url('backend_assets') }}/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="{{ url('backend_assets') }}/pages/jquery.sales_dashboard.init.js"></script>

 <!--Wysiwig js-->
 <script src="{{ url('backend_assets') }}/plugins/tinymce/tinymce.min.js"></script>
 <script src="{{ url('backend_assets') }}/pages/jquery.form-editor.init.js"></script>

 <!-- Required datatable js -->
 <script src="{{ url('backend_assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
 <!-- Buttons examples -->
 <script src="{{ url('backend_assets') }}/plugins/datatables/dataTables.buttons.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/jszip.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/pdfmake.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/vfs_fonts.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/buttons.html5.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/buttons.print.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/buttons.colVis.min.js"></script>
 <!-- Responsive examples -->
 <script src="{{ url('backend_assets') }}/plugins/datatables/dataTables.responsive.min.js"></script>
 <script src="{{ url('backend_assets') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
 <script src="{{ url('backend_assets') }}/pages/jquery.datatable.init.js"></script>

<!-- App js -->
<script src="{{ url('backend_assets') }}/js/app.js"></script>

<script>
    @if(Session::has('success'))
        toastr.options = {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.success("{{ session('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.options = {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
        toastr.options = {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
        toastr.options = {
            "closeButton" : true,
            "progressBar" : true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>