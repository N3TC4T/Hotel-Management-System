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
      
      echo form_open('admin/roomtype/add', $attributes);
      ?>
        <fieldset>
        
        <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Type</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="type" value="<?php echo set_value('type'); ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Price</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="price" value="<?php echo set_value('price'); ?>" >
            </div>
          </div>
         </div>           
         
       </div>
       
        <div class="row">
        
	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Number Adult</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="adult" value="<?php echo set_value('adult'); ?>" >
            </div>
          </div>
         </div>

	 <div class="col-md-3">
	  <div class="control-group">
            <label for="inputError" class="control-label">Number Child</label>         
            <div class="controls">
              <input type="text" id="" class="form-control input-sm" name="child" value="<?php echo set_value('child'); ?>" >
            </div>
          </div>
         </div>           
         
       </div>
       
         <div class="row">
        
	 <div class="col-md-12">
	  <div class="control-group">
            <label for="inputError" class="control-label">Options and note</label>         
            <div class="controls">
              <textarea type="text" id="" class="form-control" name="note" value="<?php echo set_value('note'); ?>" ></textarea>
            </div>
          </div>
         </div>
         
         
       </div>
    
        
          </br>
          <div class="form-actions">
            <button class="btn btn-sm btn-primary" type="submit">Save changes</button>
            <button class="btn btn-sm" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     