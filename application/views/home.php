<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel And Travel Agency</title>
<meta name="keywords" content="Hote & Travel Agency" />
<meta name="description" content="Hotel and Travel" />
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/home.css" rel="stylesheet" type="text/css">
    <script>
  
              function show_modal(modal_id)
            {
                $('#'+modal_id).modal('show');
            }
  </script>
</head>
<body>
<div id="templatemo_container">
	<!-- Free Website Template by www.TemplateMo.com -->
    <div id="templatemo_header">
        <div id="website_title">
            <div id="title">
	            Hotel &amp; Travel
            </div>
            <div id="salgon">
	            The best service at the lowest price</div>
        </div>
    </div> <!-- end of header -->
    
    <div id="templatemo_banner">
    	<div id="templatemo_menu">
            <ul>
                <li><a href="#" class="current">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Bookings</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#" class="last">Contact</a></li>
            </ul> 
        </div>    
    </div> <!-- end of banner -->
    
    <div id="templatemo_content">
    
    	<div id="content_left">
        	<div class="content_left_section">
            	<div class="content_title_01">Login</div>
        
      <?php 
      
      echo form_open('member/validate_credentials');
      echo form_input('user_name', '', 'placeholder="Email Address" class = "form-control input-sm"');
      echo "<br />";
      echo form_password('password', '', 'placeholder="Password" class = "form-control input-sm"');
      
      echo validation_errors();
      if(isset($flash_message)){
        if( $flash_message == TRUE){
           echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well!</strong> Your account has now been created.';
          echo '</div>';
        }else{
           echo '<div class="alert alert-danger">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Sorry!</strong> Username already taken!';
          echo '</div>';
        }
       }
        
         if(isset($login) && $login == TRUE){
          echo '<div class="alert alert-danger">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> Wrong username or password ! ';
            echo 'Or maybe your account is not verified yet ! ';
          echo '</div>'; 
          
          }
      echo "<br />";
      echo "<br />";
   
      echo form_submit('submit', 'Login', 'class="btn btn btn-danger"') ;
      echo form_close();
      ?>  
      <a  href="#" onclick="javascript:show_modal('register')" >Don't have account ?</a>
      <?php 
      

      
      ?>
      
      
                    
                        
                        <div class="cleaner_h20">&nbsp;</div>                        
                <div class="cleaner">&nbsp;</div>
            </div> <!-- end of booking -->
            
            
             

            

            
            
            
          <div class="cleaner_h30">&nbsp;</div>
        </div> <!-- end of content left -->
        
        <div id="content_right">
        
        	<div class="content_right_section">
        	
                <div class="content_title_01">Welcome to  hotel &amp; travel</div>
            <img src="<?php echo base_url(); ?>assets/images/templatemo_image_01.jpg"  alt="image" />
                <p>This is a free website template provided by <a href="#" target="_parent" title="free website template">templatemo.com</a>. You may download, modify and apply this layout for your personal or business websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos.</p>
                
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum, urna eu feugiat ultricies, turpis leo tempor lacus, in vestibulum diam nisl sed lorem. </p>
              <p>Mauris at tortor non mauris rhoncu vesti bulum. Praesent  purus nuncn com modo metus. Mae cen astin cidu tellus et risus com modo lobor tiSed alique.</p>
       	  </div>
            
            
			<div class="cleaner_h40">&nbsp;</div>
            
            <div class="content_right_2column_box">
            	<div class="content_title_01">Tour Guides</div>
                <p>Curabitur tempor mattis placerat. Duis malesuada posuere magna at fermentum.</p>
                <ul>
                	<li>Quisque facilisis suscipit elit</li>
                    <li>Lacus et dictum tristique</li>
                    <li>Eeros ac tincidunt aliquam</li>
                    <li>Nullam commodo arcu non facilisis</li>
                    <li>Duis commodo erat</li>
                </ul> 
                <div class="cleaner_h10">&nbsp;</div>
                <div class="rc_btn_02"><a href="#">View All</a></div>          
            </div>
   
            
            <div class="cleaner_h40">&nbsp;</div>
            
            
            <div class="content_right_section">
                <div class="content_title_01">Gallery</div>
                    <div class="gallery_box">
                    
                    	<img src="<?php echo base_url(); ?>assets/images/templatemo_image_02.jpg"  alt="image" />
                        <a href="#">one</a>
                    </div>
                    <div class="gallery_box">
	                    <img src="<?php echo base_url(); ?>assets/images/templatemo_image_03.jpg"  alt="image" />
                        <a href="#">two</a>
                    </div>
                    <div class="gallery_box">
	                    <img src="<?php echo base_url(); ?>assets/images/templatemo_image_04.jpg"  alt="image" />
                        <a href="#">three</a>
                    </div>
                    <div class="gallery_box">
                    	<img src="<?php echo base_url(); ?>assets/images/templatemo_image_05.jpg"  alt="image" />
                        <a href="#">four</a>
                    </div>
                    <div class="gallery_box">
                    	<img src="<?php echo base_url(); ?>assets/images/templatemo_image_06.jpg"  alt="image" />
                        <a href="#">five</a>
                    </div>
                    
                    <div class="cleaner_h20">&nbsp;</div>
                    <div class="rc_btn_02"><a href="#">View All</a></div>
                    
                    <div class="cleaner">&nbsp;</div>
			</div>                    
        	<div class="cleaner_h20">&nbsp;</div>
        </div> <!-- end of content right -->
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
    <div id="templatemo_footer">
    Copyright © 2048 <a href="#"><strong>Your Company Name</strong></a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="#" target="_parent">Free CSS Templates</a>
        <div style="clear: both; margin-top: 10px;">                
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
        </div> 
	</div> <!-- end of footer -->
</div> <!-- end of container -->
<!-- Free Website Templates @ TemplateMo.com -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
	

	

	  <!-- Register dialog -->
  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-body">
      
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" action="signup" method="POST" >
			<h2>Please Sign Up <small>It's free</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="Name" id="Name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="Family" id="Family" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="credit_card" id="credit_card" class="form-control input-lg" placeholder="Credit Card" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>

      
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
 </div>
<!-- Register dialog -->


	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/home.js"></script>
	
</html> 
