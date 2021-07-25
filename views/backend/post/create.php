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
                    <li><a href="javascript:avoid(0)">Add Post</a></li>
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
                        echo $msg;
                    }
                ?>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4>Add New Post</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="<?php echo BASE_URL; ?>/Post/show" class="btn btn-primary">All Posts</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?php echo BASE_URL; ?>/Post/store" method="POST" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cat_id" class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-9">
                                            <select name="cat_id" id="cat_id" class="cat_id">
                                                <option value="">Select Category</option>
                                                <?php 
                                                    foreach ($cats as $cat) {
                                                ?>
                                                <option value="<?php echo $cat['id'];?>"><?php echo $cat['cat_name'];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="col-sm-3 control-label">Content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="content" id="content"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Save</button>
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


