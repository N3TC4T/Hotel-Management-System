	<div id="">
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
	<script src="<?php echo base_url(); ?>assets/js/member.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	
	
	
	<!-- Script -->
         <script type="text/javascript">
         
             var activeEl = 2;
	    $(function() {
		var items = $('.btn-nav');
		$( items[activeEl] ).addClass('active');
		$( ".btn-nav" ).click(function() {
		    $( items[activeEl] ).removeClass('active');
		    $( this ).addClass('active');
		    activeEl = $( ".btn-nav" ).index( this );
		});
	    });
         
   
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