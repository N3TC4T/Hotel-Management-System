    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo $this->session->userdata('user_name');?>
          </a> 
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
          <a  href="<?php echo site_url("admin") ?>/checkin/add" class="btn btn-sm btn-default"><?php echo lang('New CheckIn') ; ?></a>
        </h2>
      </div>
      
                  <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="glyphicon glyphicon-big glyphicon-time"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="time"><?php echo date("Y/m/d"); ?></div>
                                    </br>
                                    <div><?php echo date_default_timezone_get();  ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo lang('Full Date'); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="glyphicon glyphicon-big glyphicon-user"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $customer_count; ?></div>
                                    <div><?php echo lang('Customer'); ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url("admin").'/customer/list' ?> ">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo lang('View Full list'); ?></span>                 
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="glyphicon glyphicon-big glyphicon-eye-open"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $today_reserv ; ?></div>
                                    <div><?php echo lang('Today Check-In'); ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>admin/report/today-checkin">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo lang('View Details'); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <span class="glyphicon glyphicon-big glyphicon glyphicon-warning-sign"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $today_checkout; ?></div>
                                    <div><?php echo lang('Today Check-Out !'); ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>admin/report/today-checkout">
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo lang('View Details'); ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <?php if ($not_verifued != 0 )
            {
            echo 
            '<div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            You have <strong>' . $not_verifued . '</strong> Not Verifyed Customer . Please check <a href=" ' . base_url() .'admin/customer">Customers List</a>
            </div>' ;
		    }
            





     
