<?php include('views/frontend/partials/_header.php');?>
<?php include('views/frontend/partials/_slider.php');?>
<!-- Post Area Start -->
<section class="post-area sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Single Post Start -->
        <?php 
          foreach ($posts as $post) {
        ?>
        <article class="single-post mb-30">
          <div class="card">
            <img class="card-img-top" src="<?php echo BASE_URL;?>/public/uploads/<?php echo $post['image'];?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $post['title'];?></h5>
              <p class="card-text"><?php echo $post['content'];?></p>
              <a href="<?php echo $post['id'];?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </article>
        <?php } ?>
        <!-- Single Post End -->

      </div>
      <div class="col-md-4">
        <?php include('views/frontend/partials/_sidebar.php');?>
      </div>
    </div>
  </div> 
</section>
<!-- Post Area End -->
<?php include('views/frontend/partials/_footer.php');?>
    