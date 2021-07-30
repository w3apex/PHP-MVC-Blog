<aside class="sidebar">
  <div class="widget categories-widget">
      <h4 class="text-capitalize fw-medium">Categories</h4>
      <ul>
        <?php 
          foreach ($cats as $cat) {
        ?>
        <li><a href="<?php echo $cat['id'];?>"><?php echo $cat['cat_name'];?></a></li>
        <?php } ?>
      </ul>
  </div>
  <div class="widget popular-post-widget">
    <h4 class="text-capitalize fw-medium">Recent posts</h4>
    <ul>
        <li>
            <div class="single-recent-post">
                <!-- Single Recent Post -->
                <div class="media">
                    <img class="mr-3" src="<?php echo BASE_URL;?>/public/frontend/img/blog/popular-post/1.jpg" alt="">
                    <div class="media-body">
                        <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                        <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
               </div>
               <!--./ Single Recent Post -->
            </div>
        </li>
        <li>
            <div class="single-recent-post">
                <!-- Single Recent Post -->
                <div class="media">
                    <img class="mr-3" src="<?php echo BASE_URL;?>/public/frontend/img/blog/popular-post/2.jpg" alt="">
                    <div class="media-body">
                        <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                        <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
               </div>
               <!--./ Single Recent Post -->
            </div>
        </li>
        <li>
            <div class="single-recent-post">
                <!-- Single Recent Post -->
                <div class="media">
                    <img class="mr-3" src="<?php echo BASE_URL;?>/public/frontend/img/blog/popular-post/3.jpg" alt="">
                    <div class="media-body">
                        <h6 class="fw-semi-bold text-capitalize"><a class="theme-color-2" href="#">Vehicle Accidents</a></h6>
                        <p>voluptate velit esse cillum dolore eu fugiat nulla.</p>
                    </div>
               </div>
               <!--./ Single Recent Post -->
            </div>
        </li>
    </ul>
  </div>
  <div class="widget tag-widget">
      <h4 class="text-capitalize fw-medium">Tag Cloud</h4>
      <div class="tagcloud">
          <a href="#" class="btn secondary-outline-btn">Consulting</a>
          <a href="#" class="btn secondary-outline-btn">Business</a>
          <a href="#" class="btn secondary-outline-btn">Tips</a>
          <a href="#" class="btn secondary-outline-btn">Blog</a>
          <a href="#" class="btn secondary-outline-btn">Finance</a>
          <a href="#" class="btn secondary-outline-btn">Design</a>
          <a href="#" class="btn secondary-outline-btn">Tag cloud</a>
          <a href="#" class="btn secondary-outline-btn">Montserrat</a>
      </div>
  </div>
</aside>