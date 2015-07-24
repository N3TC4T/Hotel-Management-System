<?php
$option_free_rooms = array('' => "");
foreach ($free_rooms as $row) {
    $option_free_rooms[$row['id']] = $row['room_no'];
}

$option_room_type = array('' => "");
foreach ($room_type as $row) {
    $option_room_type[$row['id']] = $row['type'];
}


?>
    
    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Adding <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">Ã</a>';
            echo '<strong>Well done!</strong> New Checkin Success add to database';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">Ã</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');

      //form validation
      echo validation_errors();
      
      echo form_open('admin/checkin/add', $attributes);
      ?>
        <fieldset>
        
        
        <div class="row">
        
        <div class="col-md-6">
        <div class="panel panel-primary">
        <div class="panel-heading">Customer Information</div>
	  <div class="panel-body">
	    
	    
	 <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group">
            <label for="inputError" class="control-label">Customer ID</label>         
            <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="customer_id" name="customer_id" value="" >             
            </div>
            <div class="col-sm-2 btn-fix"  style="left: -28px">
		<a href="#" onclick="javascript:show_modal('search')" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-search"></span></a>
            </div>
          </div>
         </div>

	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Family</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="Family" name="Family" value="<?php echo set_value('Family'); ?>" disabled >
             </div>
          </div>
         </div> 
         
	</div> <!-- /row -->
	
	
	
        <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Passport</label>         
             <div class="col-sm-11">
              <input class="form-control input-sm" type="text" id="Passport" name="Passport" value="<?php echo set_value('Passport'); ?>" disabled>
             </div>
          </div>
         </div> 

	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Gender</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="Gender" name="Gender" value="<?php echo set_value('sex'); ?>" disabled >
             </div>
          </div>
         </div> 
         
	</div> <!-- /row -->
	    
	</div>
        </div>
        </div>
        
        <div class="col-md-6">
        <div class="panel panel-primary">
        <div class="panel-heading">Room Information</div>
	  <div class="panel-body">
	    
	    
	 <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group">
            <label for="inputError" class="control-label">Room Type</label>         
            <div class="col-sm-10">
	      	      <?php
		echo form_dropdown('roomtype', $option_room_type, set_value('roomtype'), 'class="span2" id="roomtype"');
		?>
            </div>
          </div>
         </div>
         
                  <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Price</label>         
             <div class="col-sm-10">
		<input class="form-control input-sm" type="text" id="Price" name="price" value="0" disabled >
             </div>
          </div>
         </div>
         
         </div>

         
         <div class="row">


	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Room No</label>         
             <div class="col-sm-10">
              	<?php
		echo form_dropdown('room_no', $option_free_rooms, set_value('room_no'), 'class="span2" id="room_no"');
		?>
             </div>
          </div>
         </div> 
         
         
	</div> <!-- /row -->
	</br>
	
	
	
	    
	    
	  </div>
        </div>
        </div>
            
       </div>    <!-- End Row One -->   
       
       
       
       
     <div class="row">
        
        <div class="col-md-6">
        <div class="panel panel-primary">
        <div class="panel-heading">Staying Information</div>
	  <div class="panel-body">
	    
	    
	 <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group">
            <label for="inputError" class="control-label">CheckIn Date</label>         
            <div class="col-sm-10">
              <input class="dtpicker form-control input-sm" type="text" id="date_in" name="date_in" value="" >             
            </div>
          </div>
         </div>
	</div>
         
         <div class="row">
         
	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Staying</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="staying" name="staying" value="1" >
             </div>
          </div>
         </div> 
         </div>
         
         <div class="row">
         	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">CheckOut Date</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="date_out" name="date_out" value="" >
             </div>
          </div>
         </div> 
         
         </div> 
	    
	</div>
        </div>
        </div>
        
        <div class="col-md-6">
        <div class="panel panel-primary">
        <div class="panel-heading">Reception</div>
	  <div class="panel-body">
	    
	    
	    <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group">
            <label for="inputError" class="control-label">Extra Charge</label>         
            <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="extra_charge" name="extra_charges" value="0" >             
          </div>
         </div>
         </div>

	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Discount</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="discount" name="discount" value="0" >
             </div>
          </div>
         </div> 
         
	</div> <!-- /row -->
	
	
	
        <div class="row">
        
	 <div class="col-md-6">
	  <div class="form-group"> 
            <label for="inputError" class="control-label">Amount Per Day</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="per_day" name="per_day" value="0" disabled >
             </div>
          </div>
         </div> 

	 <div class="col-md-6">
	  <div class="form-group has-success"> 
            <label for="inputError" class="control-label">Total</label>         
             <div class="col-sm-10">
              <input class="form-control input-sm" type="text" id="total" name="total" value="0" disabled >
             </div>
          </div>
         </div> 
         
	</div> <!-- /row -->
	</br>
	</br>
	</br>
	</br>
	    
	    
	  </div>
        </div>
        </div>
            
       </div>    <!-- End Row two -->   
       
        
          
          <div class="form-actions">
            <button class="btn btn-sm btn-primary" type="submit">Save changes</button>
            <button class="btn btn-sm" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>
      
 <div class="modal fade" id="add-customer" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="infoLabel">add</h4>
      </div>
      <div class="modal-body">
      <p>Add Customer</p>   
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
 </div>
  
  
  <!-- /.search-dialog -->
  
 <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="infoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="infoLabel">Search</h4>
      </div>
      <div class="modal-body">
	
      <form class="form-inline" id="frm-Customer-search" role="form" method="post">
       <div class="form-group">
        <label class="sr-only" for="Family">Family</label>
        <input type="text" class="form-control input-sm" id="Family" Name="LastName" placeholder="Enter Family">
       </div>
       <div class="form-group">
        <div class="input-group">
         <label class="sr-only" for="Passport">Passport</label>
         <input type="text" class="form-control input-sm" id="Passport" Name="Passport" placeholder="Passport">
        </div>
       </div>    
       <div class="form-group">
        <div class="input-group">
         <button class="btn btn-primary btn-sm" id="btn-Customer-search">Search</button>
        </div>
       </div>    
       
      </form>
      
      </br>
	
	<table id="tblresult" class="table table-bordered">
		<tbody><tr class="active">
			<th style="text-align:center;">#</th>
			<th style="text-align:center;">Name</th>
			<th style="text-align:center;">Family</th>
			<th style="text-align:center;">Passport</th>
			<th style="text-align:center;">ID</th>
			<th style="text-align:center;"></th>
		</tr>
		
		</tbody>
	</table>
      
      </div>
    </div>
  </div>
 </div>

<!-- /.modal-dialog -->

</div>