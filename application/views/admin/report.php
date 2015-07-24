
<div class="container top">
<div class="page-header users-header">
        
          <a  href="" class="btn btn-sm btn-success"  onClick="PrintElem('#main_div')" ><span class="glyphicon glyphicon-print"></span>   Print</a>
        </br>
        </br>
</div>
<div id="main_div">

<div>
<?php
$t=time();
echo(date("Y-m-d h:i a",$t));
?>
<center>
<?php echo "&#x09;" . ucfirst($this->uri->segment(3)) . ' ' . ucfirst($this->uri->segment(2));?> 
</center>
</br>
</br>
</div>

<table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
              <?php
              foreach ($fields as $field)
		{
		echo ' <th class="yellow header headerSortDown"> ' .  $field . ' </th> '  ;
		}
	      ?>
              </tr>
            </thead>
            <tbody>
              <?php
               foreach($data as $row)
              {
               echo '<tr>';
               foreach ($fields as $field)
		{
		 echo '<td>'.$row[$field].'</td>';
		}
                echo '</tr>';
              }
              ?>     
              
            </tbody>
          </table>
</div>          
          
</div>

