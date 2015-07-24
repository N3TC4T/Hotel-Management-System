<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>Hotel Management System</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/global.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/bootstrap-datepicker.min.css">
  <script>
  
              function show_modal(modal_id)
            {
                $('#'+modal_id).modal('show');
            }
            
            function checkDelete(){
	    		return confirm('Are you sure want to cancel this reservation?');
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
	             <a href="<?php echo base_url(); ?>admin/profile"><span class="glyphicon glyphicon-user"></span> User Profile</a>
	            </li>
	            <li>
	              <a href="<?php echo base_url(); ?>admin/user"><span class="glyphicon glyphicon-cog"></span> Setting</a>
	            </li>
	            <li class="divider"></li>
	              <li>
	              <a href="<?php echo base_url(); ?>admin/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
	            </li>
	          </ul>
	        </li>
	        <!--End User dorpdown -->
	        
	   </ul>
        </div>
          
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
	        <li <?php if($this->uri->segment(2) == 'Home'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'support'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>/support"><span class="glyphicon glyphicon-earphone"></span> Support</a>
	        </li>
	            	        
	      </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
  
  
  
 
