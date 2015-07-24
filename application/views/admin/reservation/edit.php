    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> customer updated with success.';
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

      echo form_open('admin/customer/update/'.$this->uri->segment(4).'', $attributes);
      ?>
         <fieldset>
        
        <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Name</label>         
            <div class="controls">
              <input type="text" id="" name="Name" value="<?php echo $customer[0]['Name']; ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Family</label>         
            <div class="controls">
              <input type="text" id="" name="Family" value="<?php echo $customer[0]['Family']; ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Age</label>         
            <div class="controls">
              <input type="number" id="" name="Age" value="<?php echo $customer[0]['Age']; ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Passport</label>         
            <div class="controls">
              <input type="text" id="" name="Passport" value="<?php echo $customer[0]['Passport']; ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
       
       	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Credit Card</label>         
            <div class="controls">
              <input type="text" id="" name="credit_card" value="<?php echo $customer[0]['credit_card']; ?>" >
            </div>
          </div>
         </div>
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Mobile</label>         
            <div class="controls">
              <input type="text" id="" name="Mobile" value="<?php echo $customer[0]['Mobile']; ?>" >
            </div>
          </div>
         </div>

         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Country</label>         
            <div class="controls">
              <input type="text" id="" name="Country" value="<?php echo $customer[0]['Country']; ?>" >
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Nationality</label>         
            <div class="controls">
              <input type="text" id="" name="Nationality" value="<?php echo $customer[0]['Nationality']; ?>" >
            </div>
          </div>
         </div>             
         
       </div>
       
       <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">City</label>         
            <div class="controls">
              <input type="text" id="" name="City" value="<?php echo $customer[0]['City']; ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Company</label>         
            <div class="controls">
              <input type="text" id="" name="Company" value="<?php echo $customer[0]['Company']; ?>" >
            </div>
          </div>
         </div> 
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Address</label>         
            <div class="controls">
              <textarea type="text" id="" name="Adress" value="<?php echo $customer[0]['Adress']; ?>" ></textarea>
            </div>
          </div>
         </div>          
         
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Note</label>         
            <div class="controls">
              <textarea type="text" id="" name="Note" value="<?php echo $customer[0]['Note'];?>" ></textarea>
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
     
