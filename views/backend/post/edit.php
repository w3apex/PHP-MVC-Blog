<?php include('views/backend/partials/_header.php');?>

<div class="page-body">
    <!-- LEFT SIDEBAR -->
    <?php include('views/backend/partials/_sidebar.php');?>
    <!-- CONTENT -->
    <div class="content">
        <!-- content HEADER -->
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Post</a></li>
                    <li><a href="javascript:avoid(0)">Edit Post</a></li>
                </ul>

            </div>
        </div>

        <div class="row animated fadeInUp">
            <!-- For messaging -->
            <div class="row">
             <div class="col-md-8 col-md-offset-2">
             </div>   
            </div>
            <!-- For messaging./ -->
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <?php
                    /*if (isset($msg)) {
                        echo "<span style='color:green;'>".$msg."</span>";
                    }*/
                ?>

                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Edit Post</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="catlist.php" class="btn btn-primary">All Posts</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    foreach ($cat_by_id as $data) {
                                ?>
                                <form action="<?php echo BASE_URL;?>/Post/update" method="POST" class="form-horizontal">
                                    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                                    <div class="form-group">
                                        <label for="cat_name" class="col-sm-3 control-label">Post Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cat_name" value="<?php echo $data['cat_name'];?>" id="cat_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary" name="catSubmit">Update</button>
                                        </div>
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('views/backend/partials/_footer.php');?> 