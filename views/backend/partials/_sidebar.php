<div class="left-sidebar">
    <!-- left sidebar HEADER -->
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">Navigation</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    <!-- NAVIGATION -->
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">
                    <!--HOME-->
                    <li class="active-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                    <!--Category-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Category Option</span> </a>
                        <ul class="nav child-nav level-1">
                            <li><a href="<?php echo BASE_URL;?>/Category/create/">Create Category</a></li>
                            <li><a href="<?php echo BASE_URL;?>/Category/show/">All Category</a></li>
                        </ul>
                    </li>

                    <!--Post-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Post Option</span> </a>
                        <ul class="nav child-nav level-1">
                            <li><a href="<?php echo BASE_URL;?>/Post/create/">Create Post</a></li>
                            <li><a href="<?php echo BASE_URL;?>/Post/show/">All Post</a></li>
                        </ul>
                    </li>

                    <!--Slider-->
                    <li class="has-child-item close-item">
                        <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Slider Option</span> </a>
                        <ul class="nav child-nav level-1">
                            <li><a href="<?php echo BASE_URL;?>/Slider/create/"">Create Slider</a></li>
                            <li><a href="<?php echo BASE_URL;?>/Slider/show/">All Slider</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>