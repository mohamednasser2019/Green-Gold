<!-- Bootstrap core JavaScript-->
<script src="{{ asset('public/js/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('public/js/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ asset('public/js/admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('public/js/admin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('public/js/admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('public/js/admin/sb-admin.js') }}"></script>

<!-- Demo scripts for this page-->
<script src="{{ asset('public/js/admin/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('public/js/admin/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('public/js/admin/bootstrap-fileupload.min.js') }}"></script>


<!-- login page-->
<script src="{{ asset('public/plugins/jQuery/jquery-2.1.1.min.js') }}"></script>
<!--<![endif]-->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/plugins/iCheck/jquery.icheck.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery.transit/jquery.transit.js') }}"></script>
<script src="{{ asset('public/plugins/TouchSwipe/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('public/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/js/login.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Login.init();
    });
</script>

<!-- Gallery page-->
<script src="{{ asset('public/plugins/blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('public/plugins/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('public/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('public/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('public/plugins/bootbox/bootbox.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery.scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('public/plugins/ScrollToFixed/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery.appear/jquery.appear.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('public/plugins/velocity/jquery.velocity.min.js') }}"></script>
<script src="{{ asset('public/plugins/owl-carousel/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-mockjax/jquery.mockjax.js') }}"></script>
<script src="{{ asset('public/plugins/toastr/toastr.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('public/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('public/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
<script src="{{ asset('public/plugins/truncate/jquery.truncate.js') }}"></script>
<script src="{{ asset('public/plugins/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('public/js/subview.js') }}"></script>
<script src="{{ asset('public/js/subview-examples.js') }}"></script>
<script src="{{ asset('public/plugins/mixitup/src/jquery.mixitup.js') }}"></script>
<script src="{{ asset('public/plugins/lightbox2/js/lightbox.min.js') }}"></script>
<script src="{{ asset('public/js/pages-gallery.js') }}"></script>

<!-- Form elements page -->

<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('public/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
<script src="{{ asset('public/plugins/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('public/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('public/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('public/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('public/plugins/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('public/js/form-elements.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "language": {
                "lengthMenu": '<select>' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select>',
                "search": "{{trans('arabic_trans.search_tables')}}",
            },

        });
    });
</script>
</body>

</html>
