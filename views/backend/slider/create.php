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
                    <li><a href="javascript:avoid(0)">Slider</a></li>
                    <li><a href="javascript:avoid(0)">Add Slider</a></li>
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
                    if (isset($msg)) {
                        echo "<span style='color:green;'>".$msg."</span>";
                    }
                ?>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Add New Slider</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="<?php echo BASE_URL; ?>/Slider/show;?>" class="btn btn-primary">All Sliders</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?php echo BASE_URL;?>/Slider/store" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group">
                                       <label for="title" class="col-sm-2 control-label">Title</label>
                                       <div class="col-sm-10">
                                          <input type="text" id="title" class="form-control" name="title">
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label for="" class="col-sm-2 control-label">Sub Title</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control" name="sub_title">
                                       </div>
                                    </div>

                                    <div class="form-group">
                                       <label for="" class="col-sm-2 control-label">Image</label>
                                       <div class="col-sm-10">
                                          <input type="file" class="form-control" name="image">
                                       </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary" name="catSubmit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('views/backend/partials/_footer.php');?>  


