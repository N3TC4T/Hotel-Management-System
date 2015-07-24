    <div class="container top">

    </br>
      <div class="container">
    <div class="row">
		<div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button id="btn_profile" type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-user"></span>
    			    <p>Profile</p>
                </button>
            </div>
            <div class="btn-group">
                <button id="btn_manage" type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-wrench"></span>
    			    <p>Manage your Bookins</p>
                </button>
            </div>
            <div class="btn-group">
                <button id="btn_search" type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-search"></span>
    			    <p>Hotel Search</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-calendar"></span>
    			    <p>Calendar</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-time"></span>
    			    <p>Statistics</p>
                </button>
            </div>
            
        </div>
	</div>
</div>
            
            <hr>
            
            <div id="search" class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon glyphicon-search"></span> Hotel Search</div>
            <div class="panel-body">
            
                  <?php
      //form data
      $attributes = array('class' => 'form-inline', 'id' => 'frm_room_search');

      //form validation
      echo validation_errors();
      
      echo form_open('member/search', $attributes);
      ?>
        <fieldset>
        
            <div class="row">
            <form class="form-inline" role="form">
            
         <div class="col-md-2">    
	  <div class="form-group">
            <label for="inputError" class="control-label"> <span class="glyphicon glyphicon-calendar"></span> CheckIn Date</label>         
            <div class="col-sm-10">
              <input class="dtpicker form-control input-sm" type="text" id="date_in" name="date_in" value="<?php echo date("m/d/Y"); ?>" >             
            </div>
          </div>
         </div>
         
         <div class="col-md-2">     
          <div class="form-group">
            <label for="inputError" class="control-label"> <span class="glyphicon glyphicon-calendar"></span> CheckOut Date</label>         
            <div class="col-sm-10">
              <input class="dtpicker form-control input-sm" type="text" id="date_out" name="date_out" value="<?php echo date("m/d/Y"); ?>" >             
            </div>
          </div>
         </div>
         
         <div class="col-md-2">     
          <div class="form-group">
            <label for="inputError" class="control-label"> <span class="glyphicon glyphicon-user"></span> Adult</label>         
            <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="adult" name="adult" value="1" >             
            </div>
          </div>
         </div>
         
         <div class="col-md-2">     
          <div class="form-group">
            <label for="inputError" class="control-label"> <span class="glyphicon glyphicon-user"></span> Child</label>         
            <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="child" name="chid" value="0" >             
            </div>
          </div>
         </div>
         
         
         <div class="col-md-4">     
          <div class="form-group">
            <label for="inputError" class="control-label"></label>         
            <div class="col-sm-10">
               
                 <button class="btn btn-sm btn-primary" id="btn_room_search" data-loading-text="Loading..." ><span class="glyphicon glyphicon-search"></span> Search</button>
               
            </div>
          </div>
         </div>
         
         
        </fieldset>

      <?php echo form_close(); ?>
        
        </br>
	<table id="tblresult" class="table table-bordered">
		<tbody><tr class="active">
			<th style="text-align:center;">#</th>
			<th style="text-align:center;">Room Number</th>
			<th style="text-align:center;">Type</th>
			<th style="text-align:center;">Price</th>
			<th style="text-align:center;">Options</th>
			<th style="text-align:center;"></th>
		</tr>
		
		</tbody>
	</table>                 
                 

      </div> <!-- end row -->
     </div><!-- end panel body -->
    </div><!-- end panel -->
            
<!-- ****************************************************************************** -->          
          
          
    <!-- Profile container -->
    <div  id="profile" style="display:none;"  class="container">
      <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $profile[0]['Name'] . " " . $profile[0]['Family'] ; ?> </h3>
              <h3 style="display:none;" id="customer_id"><?php echo $profile[0]['id']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/assets/images/profile.png" width="120px" class="img-circle"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                       <tr>
                        <td>Passport:</td>
                        <td><?php echo $profile[0]['Passport']; ?></td>
                      </tr>
                      <tr>
                        <td>Credit Card:</td>
                        <td><?php echo $profile[0]['credit_card']; ?></td>
                      </tr>
                      <tr>
                        <td>Country:</td>
                        <td><?php echo $profile[0]['Country']; ?></td>
                      </tr>
                      <tr>
                        <td>Nationality:</td>
                        <td><?php echo $profile[0]['Nationality']; ?></td>
                      </tr>
                      <tr>
                        <td>Age:</td>
                        <td><?php echo $profile[0]['Age']; ?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $profile[0]['Gender']; ?></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td><?php echo $profile[0]['Adress']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="<?php echo $profile[0]['email']; ?>"><?php echo $profile[0]['email']; ?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $profile[0]['Mobile']; ?>(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" onclick="javascript:show_modal('edit-profile')" class="btn btn-success">Edit Profile</a>
                  <a href="#" class="btn btn-danger">Change Password</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- ************************************************************ End profile -->
    
    <div class="row">
    <div class="col-md-1" >
    </div>
     <div class="col-md-10" >
    <div id="bookings" style="display:none;"class="panel panel-primary">
       <div class="panel-heading"><span class="glyphicon glyphicon glyphicon-calendar"></span> Your Bookings</div>
          <div class="panel-body">
           <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Room No</th>
                <th class="yellow header headerSortDown">Booking Date</th>
                <th class="yellow header headerSortDown">CheckIn Data</th>
                <th class="yellow header headerSortDown">CheckOut Data</th>
                <th class="yellow header headerSortDown">Status</th>
                <th class="yellow header headerSortDown"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($bookings as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['room_id'].'</td>';
                echo '<td>'.$row['reservation_date'].'</td>';
                echo '<td>'.$row['checkin_data'].'</td>';
                echo '<td>'.$row['checkout_data'].'</td>';
                if ($row['confirmed']==0)
                {
					
                    echo '<td style="text-align:center;"><span class="label label-warning" id="' . $row['id'] . '">Waiting for Confirm</span></td>';
                }else if ($row['confirmed']==1) {
                    echo '<td style="text-align:center;"><span class="label label-success">Confirmed</span></td>';
                }
                echo '<td class="crud-actions">' ;
         	    if ($row['confirmed']==0)
                {									
                  echo '<a href="'.site_url("").'member/reservation/cancel/'.$row['id'].'" onclick="javascript:return checkDelete()" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cancel Reseration" id="btnDel"><span class="glyphicon glyphicon-eye-close"></span> Cancel Reseration</a>' ;
                 }else
                 {
				   echo '<a href="'.site_url("").'member/reservation/cancel/'.$row['id'].'" class="btn btn-sm btn-danger" disabled data-toggle="tooltip" title="Cancel" id="btnDel"><span class="glyphicon glyphicon-eye-close"></span> Cancel Reseration</a>' ;
				 }
                echo '</td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>
          
          </div>
         </div>
         </div>
        </div>
            
            
    
    <!-- ***************************************************************************** -->
    
     <!-- /.reserve-dialog -->
  
 <div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="infoLabel">Reservation</h4>
      </div>
      <div class="modal-body">
	<div style="display:none" id="res_id"></div>
      <blockquote> Do you Wanna reserve room with room number <span id='res_room'></span> in date range <span id='res_in'></span> and <span id='res_out'></span> with price <span id='res_price'></span> for each night ?
      </blockquote>
	
      
      </div>
      <div class="modal-footer">
      <a href="#" id="btn_reserve" class="btn btn-lg btn-success">Yes</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-lg btn-warning">No</a>
      </div>
    </div>
  </div>
 </div>

<!-- /.modal-dialog -->



<!-- /.customer-edit-dialog -->
  
 <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="infoLabel">Edit Profile</h4>
      </div>
      <div class="modal-body">


	  <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();

      echo form_open('member/profile/', $attributes);
      ?>
         <fieldset>
        
        <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Name</label>         
            <div class="controls">
              <input type="text" id="" name="Name" value="<?php echo $profile[0]['Name']; ?>" >
              <input type="text" style="display:none;" id="" name="id" value="<?php echo $profile[0]['id']; ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Family</label>         
            <div class="controls">
              <input type="text" id="" name="Family" value="<?php echo $profile[0]['Family']; ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Age</label>         
            <div class="controls">
              <input type="number" id="" name="Age" value="<?php echo $profile[0]['Age']; ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Passport</label>         
            <div class="controls">
              <input type="text" id="" name="Passport" value="<?php echo $profile[0]['Passport']; ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
       
       	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Credit Card</label>         
            <div class="controls">
              <input type="text" id="" name="credit_card" value="<?php echo $profile[0]['credit_card']; ?>" >
            </div>
          </div>
         </div>
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Mobile</label>         
            <div class="controls">
              <input type="text" id="" name="Mobile" value="<?php echo $profile[0]['Mobile']; ?>" >
            </div>
          </div>
         </div>

         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Country</label>         
            <div class="controls">
              <input type="text" id="" name="Country" value="<?php echo $profile[0]['Country']; ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Nationality</label>         
            <div class="controls">
              <input type="text" id="" name="Nationality" value="<?php echo $profile[0]['Nationality']; ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">City</label>         
            <div class="controls">
              <input type="text" id="" name="City" value="<?php echo $profile[0]['City']; ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Company</label>         
            <div class="controls">
              <input type="text" id="" name="Company" value="<?php echo $profile[0]['Company']; ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Address</label>         
            <div class="controls">
              <textarea type="text" id="" name="Adress" value="<?php echo $profile[0]['Adress']; ?>" ></textarea>
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Note</label>         
            <div class="controls">
              <textarea type="text" id="" name="Note" value="<?php echo $profile[0]['Note'];?>" ></textarea>
            </div>
          </div>
         </div>             
         
       </div>       
        
          
      
      </div>
      <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-sm btn-success" type="submit">Save changes</button>
            <button class="btn btn-sm btn-warning" type="reset">Cancel</button>
          </div>
        </fieldset>
      <?php echo form_close(); ?>
      </div>
    </div>
  </div>
 </div>

<!-- /.modal-dialog -->
    
    
    
    
    
    
    
    
    
    
      
</div><!-- Main container -->
  





     
