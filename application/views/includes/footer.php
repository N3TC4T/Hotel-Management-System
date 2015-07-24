	<div id="footer">
		<hr>
		<div class="inner">
			<div class="container">
				<p class="right"><a href="#">Back to top</a></p>
				<p>
				</p>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.fa.min.js"></script> -->
	
	
	<!-- Script -->
	<script type="text/javascript">
	
            $(document).ready(function() {
            

                $('#btnEdit').tooltip();
                $('#btnDel').tooltip();
                
		$(".dtpicker").datepicker({
		        changeMonth: true,
		        changeYear: true,
		        yearRange: 'c-50:c+10'
		});
                
                
            }); //END $(document).ready()
            
        </script> <!--  //Script -->
        

</body>
</html>