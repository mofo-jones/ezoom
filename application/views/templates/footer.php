            </div> 
        </main>
        <!-- Footer -->
        <!-- <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-right">
                    Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I"
                        target="_blank">pixelcave</a>
                </div>
                <div class="float-left">
                    <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 1.3</a> &copy; <span
                        class="js-year-copy">2017</span>
                </div>
            </div>
        </footer> -->
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/jquery.countTo.min.js"></script>
    <script src="<?=base_url()?>assets/js/core/js.cookie.min.js"></script>
    <script src="<?=base_url()?>assets/js/codebase.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?=base_url()?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?=base_url()?>assets/js/pages/be_pages_dashboard.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?=base_url()?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?=base_url()?>assets/js/pages/be_tables_datatables.js"></script>


    
        <!-- Page JS Plugins -->
        <script src="<?=base_url()?>assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?=base_url()?>assets/js/plugins/jquery-mask/jquery.mask.js"></script>
        <!-- <script src="/ci-ezoom/assets/js/plugins/jquery-validation/additional-methods.min.js"></script> -->

        <!-- Page JS Code -->
        <script>
            $('.money').mask("#.##0,00", {reverse: true});
            $('.number').mask('0#');
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                Codebase.helpers('select2');
            });
        </script>
        <!-- <script src="/ci-ezoom/assets/js/pages/be_forms_validation.js"></script> -->


</body>

</html>