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
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> New Customer Success add to database';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
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
      
      echo form_open('admin/customer/add', $attributes);
      ?>
        <fieldset>
        
        <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Name</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Name" value="<?php echo set_value('Name'); ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Family</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Family" value="<?php echo set_value('Family'); ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Age</label>         
            <div class="controls">
              <input type="number" id="" class="form-control input-sm" name="Age" value="<?php echo set_value('Age'); ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Passport</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Passport" value="<?php echo set_value('Passport'); ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
       
       	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Credit Card</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="credit_card" value="<?php echo set_value('credit_card'); ?>" >
            </div>
          </div>
         </div>
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Mobile</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Mobile" value="<?php echo set_value('Mobile'); ?>" >
            </div>
          </div>
         </div>

         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Country</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Country" value="<?php echo set_value('Country'); ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Nationality</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Nationality" value="<?php echo set_value('Nationality'); ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">City</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="City" value="<?php echo set_value('City'); ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Company</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="Company" value="<?php echo set_value('Company'); ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Address</label>         
            <div class="controls">
              <textarea type="text" id="" class="form-control input-sm" name="Adress" value="<?php echo set_value('Adress'); ?>" ></textarea>
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Note</label>         
            <div class="controls">
              <textarea type="text" id="" class="form-control input-sm" name="Note" value="<?php echo set_value('Note'); ?>" ></textarea>
            </div>
          </div>
         </div>             
         
       </div>       
        
          
          <div class="form-actions">
            <button class="btn btn-sm btn-primary" type="submit">Save changes</button>
            <button class="btn btn-sm" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     