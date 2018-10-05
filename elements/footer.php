                </div>
                <!-- /CONTENT -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo SITE_URL ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo SITE_URL ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo SITE_URL ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo SITE_URL ?>/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo SITE_URL ?>/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo SITE_URL ?>/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo SITE_URL ?>/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $( ".add-column" ).click(function() {
                $( ".parts-columns" ).append( "<div class='column-wrapper'><input type='text' name='column_name[]' class='form-control'><span class='remove-column'>Remove</span></div>" );

                return false;
            });
            $( ".remove-column" ).click(function() {
                $( this ).parent().remove();
            });
        });
    </script>
</body>

</html>
