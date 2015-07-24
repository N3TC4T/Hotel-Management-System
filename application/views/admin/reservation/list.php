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
            $options_reservation = array();    
            foreach ($reservation as $array) {
              foreach ($array as $key => $value) {
                $options_reservation[$key] = $key;
              }
              break;
            }

            echo form_open('admin/reservation', $attributes);
     
              echo form_label('Search:', 'search_string');
              echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
              echo form_dropdown('order', $options_reservation, $order, 'class="span2"');

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
                <th class="yellow header headerSortDown">Customer</th>
                <th class="yellow header headerSortDown">Room Number</th>
                <th class="yellow header headerSortDown">Checkin</th>
                <th class="yellow header headerSortDown">Checkout</th>
                <th class="yellow header headerSortDown">Reservation Date</th>
                <th class="yellow header headerSortDown">Confirmed</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($reservation as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['Family'].'</td>';
                echo '<td>'.$row['room_no'].'</td>';
                echo '<td>'.$row['checkin_data'].'</td>';
                echo '<td>'.$row['checkout_data'].'</td>';
                echo '<td>'.$row['checkout_data'].'</td>';
                if ($row['confirmed']==0)
                {
                    echo '<td style="text-align:center;"><span class="label label-danger" id="' . $row['id'] . '">Not Confirmed</span></td>';
                }else if ($row['Confirmed']==1) {
                    echo '<td style="text-align:center;"><span class="label label-success">Confirmed</span></td>';
                }
                echo '<td class="crud-actions"> ' ;
                if ($row['confirmed']==0)
                {
                  echo '<a href="#" class="btn btn-sm btn-success" onclick="javascript:reserv_confirm(' .$row['id'] . ')" data-toggle="tooltip" title="Verify" id="btnVerify"><span class="glyphicon glyphicon-ok"></span></a>' ;
                 }else
                 {
				  echo '<a href="#" class="btn btn-sm btn-success" disabled data-toggle="tooltip" title="Verify" id="btnVerify"><span class="glyphicon glyphicon-ok"></span></a>' ;
				 }
				 echo " " ;
                 echo 
                  '<a href="'.site_url("admin").'/reservation/update/'.$row['id'].'" style="display:none;" class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit & View" id="btnEdit"><span class="glyphicon glyphicon glyphicon-edit"></span></a>                   
                  <a href="'.site_url("admin").'/reservation/delete/'.$row['id'].'" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" id="btnDel"><span class="glyphicon glyphicon-trash"></span></a>
                </td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>
