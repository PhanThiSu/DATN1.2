<?php include_once 'views/layout/'.$this->layout.'headerTop.php'; ?>
<link rel="stylesheet" href="<?php echo RootREL; ?>media/bootstrap/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo RootREL; ?>media/admin/css/three-state-radio-buttons.css">
<script type="text/javascript">
	var norecords 	= parseInt(<?php echo $this->records['norecords']; ?>);
	var nocurp 		= parseInt(<?php echo $this->records['nocurp']; ?>);
	var curp 		= parseInt(<?php echo $this->records['curp']; ?>);
	var nopp 		= parseInt(<?php echo $this->records['nopp']; ?>);
</script>

<?php vendor_html_helper::contentheader('Notifications<small>management</small>', [['urlp'=>['ctl'=>$app['ctl'], 'act'=>$app['act']]]]); ?>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header with-border row" id="reports-header">
					<div class="col-sm-6">
						<h3 class="box-title">
							Notifications <?=$this->time?> of <?=vendor_html_helper::link($this->fullname, ["ctl"=>"users", "act"=>"profile"])?>
						</h3>
					</div>
					<div class="col-sm-6">
						<h3 class="box-title text-info pull-right text-right">This Week <?=vendor_html_helper::link($this->fullname, ["ctl"=>"reports", "act"=>"profile"])?> has had notifications <strong class="text-danger"><?=$this->notificationsTotal;?></strong></h3>
					</div>
			    </div>
			    <div class="box-header">
		    		<div class="row" id="reports-header">
		    			<div class="col-sm-9 col-xs-9">
			      			<form id="form-report" action="<?php echo vendor_app_util::url(["ctl"=>"notifications", "act"=>'week']); ?>" method="post" enctype="multipart/form-data" class="form-inline">
								<div class="form-group">
								    <div class="input-group">
								      	<div class="input-group-addon mobileHide">Select week: </div>
			      						<input type="week" name="week" class="form-control selectInput" id="week" placeholder="Month...">
			      					</div>
			      				</div>
								<button type="submit" class="btn btn-info">Submit</button>
			      			</form>
		    			</div>

		    			<div class="col-sm-3 col-xs-3">
		    				<button id="delete-reports" class="btn btn-danger pull-right">
		    					<i class="fa fa-remove"></i>
		    				</button>
		    				<a href="<?php echo vendor_app_util::url(['ctl'=>'reports','act'=>'add']); ?>" id="add-report" type = "button" class="btn btn-primary pull-right" >
		    					<i class="fa fa-plus"></i>
		    				</a>	
		    			</div>
		    		</div>
			    </div>
			    <!-- /.box-header -->
			    
				<?php include_once 'views/'.$this->controller.'/_datatable.php';	?>
			</div>
		</div>
	</div>
</section>

<?php include_once 'views/layout/'.$this->layout.'footer.php'; ?>
