<?php include('views/backend/partials/_header.php');?>
<div class="page-body">
    <!-- LEFT SIDEBAR -->
    <?php include('views/backend/partials/_sidebar.php');?>
    <!-- CONTENT -->
    <div class="content">
		<div class="content-header">
		    <!-- leftside content header -->
		    <div class="leftside-content-header">
		        <ul class="breadcrumbs">
		            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
		            <li><a href="javascript:avoid(0)">Category</a></li>
		            <li><a href="javascript:avoid(0)">Manage Category</a></li>
		        </ul>
		    </div>
		</div>
		<div class="row animated fadeInUp">
	        <div class="col-sm-12 col-md-8 col-md-offset-2">
	        	<?php
                    /*if (isset($_GET['msg'])) {
                        //$msg = urldecode($_GET['msg']);
                        $msg = unserialize(urldecode($_GET['msg']));

                        foreach ($msg as $key => $value) {
                        	echo $value;
                        }
                    }*/
                ?>

                <?php
                    if (isset($_GET['msg'])) {
                    	$msg = unserialize(urldecode($_GET['msg']));
                        
                        foreach ($msg as $key => $value) {
                        	echo $value;
                        }
                    }
                ?>
	            <div class="panel b-primary bt-md">
	                <div class="panel-content">
	                    <div class="row">
	                        <div class="col-xs-6">
	                            <h4>Manage Category</h4>
	                        </div>
	                        <div class="col-xs-6 text-right">
	                            <a href="<?php echo BASE_URL; ?>/Category/create" class="btn btn-primary">Add Category</a>
	                        </div>
	                    </div>
	                    <div class="table-responsive">
	                        <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
	                            <thead>
		                            <tr>
		                                <th width="10%">SL.</th>
		                                <th width="60%">Category Name</th>
		                                <th width="30%">Action</th>
		                            </tr>
	                            </thead>
	                            <tbody>
	                            	<?php
	                            		/*if (isset($cat)) {  */              		
		                            		$i = 0;
		                            		foreach ($cat as $value) {
		                            			$i++;
	                            	?>
	                            	<tr>
	                            		<td><?php  echo $i; ?></td>
	                            		<td><?php echo $value['cat_name']; ?></td>
	                            		<td>
	                            			<a href="<?php echo BASE_URL;?>/Category/edit/<?php echo $value['id']; ?>">Edit</a> ||
	                            			<a onclick="return confirm('Are you sure to delete?');" href="<?php echo BASE_URL;?>/Category/destroy/<?php echo $value['id']; ?>">Delete</a>
	                            		</td>
	                            	</tr>
	                            	<?php	
	                            			/*}*/
	                            		}
	                            	?>	
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
<?php include('views/backend/partials/_footer.php');?>
