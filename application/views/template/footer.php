    <!-- Bootstrap core and JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript">
   $(function () {
    $('#datetimepicker').datetimepicker({
     format: 'DD MMMM YYYY HH:mm',
                });
    
    $('#datepicker').datetimepicker({
     format: 'YYYY-MM-DD',
    });
    $('#datepicker2').datetimepicker({
     format: 'YYYY-MM-DD',
    });    
    $('#timepicker').datetimepicker({
     format: 'HH:mm'
    });
   });
  </script>
  </body>
</html>
