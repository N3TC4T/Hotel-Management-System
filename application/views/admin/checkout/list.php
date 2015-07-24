    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
          
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_checkout = array();    
            foreach ($checkout as $array) {
              foreach ($array as $key => $value) {
                $options_checkout[$key] = $key;
              }
              break;
            }

            echo form_open('admin/checkout', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_checkout, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-sm btn-primary', 'value' => 'Go');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
              echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Checkin ID</th>
                <th class="yellow header headerSortDown">Customer</th>
                <th class="yellow header headerSortDown">Date In</th>
                <th class="yellow header headerSortDown">Date Out</th>
                <th class="yellow header headerSortDown">Room Number</th>
                <th class="yellow header headerSortDown">Staying</th>
                <th class="yellow header headerSortDown">User</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($checkout as $row)
              {
                
                echo '<tr>';
                echo '<td></td>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['customer_id'].'</td>';
                echo '<td>'.$row['date_in'].'</td>';
                echo '<td>'.$row['date_out'].'</td>';
                echo '<td>'.$row['room_no'].'</td>';
                echo '<td>'.$row['staying'].'</td>';
                echo '<td>'.$row['user'].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/reciept/'.$row['id'].'" class="btn btn-sm btn-info" data-toggle="tooltip" title="Reciept" id="btnEdit"><span class="glyphicon glyphicon glyphicon-usd"></span></a>                   
                </td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>