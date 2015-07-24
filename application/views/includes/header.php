<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>Hotel Management System</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/bootstrap-datepicker.min.css">
  <script>
  
              function show_modal(modal_id)
            {
                $('#'+modal_id).modal('show');
            }
  </script>
</head>
<body> 
	
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">HMS</a>
        </div>
        
        <div class="navbar-right">
          
          <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
	        
	        <!-- notic dorpdown -->
	         <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bell"></span> <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            
	          </ul>
	        </li>
	        <!-- End notic dorpdown -->
	        
	        <!-- Tasks dorpdown -->
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span> <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            
	          </ul>
	        </li>
	        <!-- End Task dorpdown -->
	        
	        <!-- User dorpdown -->
	         <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	             <a href="<?php echo base_url(); ?>admin/profile"><span class="glyphicon glyphicon-user"></span> <?php echo lang('User Profile'); ?></a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/user"><span class="glyphicon glyphicon-cog"></span> <?php echo lang('Setting'); ?></a>
	            </li>
	            <li class="divider"></li>
	              <li>
	              <a href="<?php echo base_url(); ?>admin/logout"><span class="glyphicon glyphicon-log-out"></span> <?php echo lang('Logout'); ?></a>
	            </li>
	          </ul>
	        </li>
	        <!--End User dorpdown -->
	        
	   </ul>
        </div>
          
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li <?php if($this->uri->segment(2) == 'reservation'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/reservation">Reservation</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'checkin'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/checkin"><?php echo lang('Checkin'); ?></a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'checkout'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/checkout"><?php echo lang('Checkout'); ?></a>
	        </li>
	        
	        <li <?php if($this->uri->segment(2) == 'customer'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>admin/customer"><?php echo lang('Customer'); ?></a>
	        </li>
	        
	        
		 <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <b class="caret"></b></a>
	          <ul class="dropdown-menu">
		    <li>
	              <a href="<?php echo base_url(); ?>admin/report/customer"><span class="glyphicon glyphicon-user"></span> Customer Report</a>
	            </li>
	            <li role="presentation" class="divider"></li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/report/checkin"><span class="glyphicon glyphicon-arrow-left"></span> Checkins Report</a>
	              <a href="<?php echo base_url(); ?>admin/report/today-checkin"><span class="glyphicon glyphicon-calendar"></span> Today Checkins</a>
	              <a href="<?php echo base_url(); ?>admin/report/last-week-checkin"><span class="glyphicon glyphicon-calendar"></span> Last Week Checkins</a>
	            </li>
	            <li role="presentation" class="divider"></li>
		    <li>
	              <a href="<?php echo base_url(); ?>admin/report/checkout"><span class="glyphicon glyphicon-arrow-right"></span> Checkouts Report</a>
	              <a href="<?php echo base_url(); ?>admin/report/today-checkout"><span class="glyphicon glyphicon-calendar"></span> Today Checkouts</a>
	              <a href="<?php echo base_url(); ?>admin/report/last-week-checkout"><span class="glyphicon glyphicon-calendar"></span> Last week Checkouts</a>
	            </li>	
	            <li role="presentation" class="divider"></li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/report/room"><span class="glyphicon glyphicon-print"></span> Rooms Report</a>
	              <a href="<?php echo base_url(); ?>admin/report/free-room"><span class="glyphicon glyphicon-print"></span> Free Rooms Report</a>
	              <a href="<?php echo base_url(); ?>admin/report/Busy-room"><span class="glyphicon glyphicon-print"></span> Busy Rooms Report</a>
	            </li>
	          </ul>
	        </li>		        
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('System'); ?> <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	          <li role="presentation" class="dropdown-header">Hotel Config</li>
		    <li>
	              <a href="#" onclick="javascript:show_modal('hotel-profile')"><span class="glyphicon glyphicon-header"></span> Hotel Profile</a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/roomtype"><span class="glyphicon glyphicon-cog"></span> Roome Type</a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/room"><span class="glyphicon glyphicon-list-alt"></span> Rooms</a>
	            </li>
	          <li role="presentation" class="divider"></li>
	             <li>
	              <a href="<?php echo base_url(); ?>admin/wizard"><span class="glyphicon glyphicon-wrench"></span> <?php echo lang('Config Wizard'); ?></a>
	            </li>
	          </ul>
	        </li>
	        
	                
	        
	        
	      </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
  
  
  
  <!-- Hotel Profile dialog -->
  <div class="modal fade" id="hotel-profile" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="infoLabel">Hotel Profile</h4>
      </div>
      <div class="modal-body">
      
      <form class="form-horizontal" id="frm-hotel-profile" role="form" method="post">
       <div class="form-group">
        
         <label class="sr-only" for="name">Hotel Name</label>
         <input type="text" class="form-control input-sm" id="Name" Name="Name" placeholder="Hotel Name">
        
       </div>
       <div class="form-group">
        
         <label class="sr-only" for="phone1">Phone Number:</label>
         <input type="text" class="form-control input-sm" id="phone1" Name="phone_1" placeholder="Phone Number 1">
        
       </div>  
       <div class="form-group">
        
         <label class="sr-only" for="phone2">Phone Number [2]:</label>
         <input type="text" class="form-control input-sm" id="phone2" Name="phone_2" placeholder="Phone Number 2">
        
       </div>
       <div class="form-group">
        
         <label class="sr-only" for="email">Email:</label>
         <input type="text" class="form-control input-sm" id="email" Name="Email" placeholder="Email">
        
       </div>                
       <div class="form-group">
        
         <label class="sr-only" for="address">Address:</label>
         <textarea class="form-control input-sm" id="address" Name="Address" placeholder="Address:"></textarea>
        
       </div>                
       <div class="form-group">
        
         <button class="btn btn-primary btn-sm" id="btn-update-hotel-profile">Update</button>
         
       </div>
      </form>
      
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
 </div>
<!-- Hotel Profile dialog -->
