<?php 
defined('C5_EXECUTE') or die('Access_Denied');
$this->inc('elements/header_topbar.php');
?>
  
<div class="row">
  <div class="large-12 columns">
    <!-- Desktop Slider -->

    <div class="hide-for-small">
      <?php 
        $b = new Area('Slide-Show Area');
        $b->display($c);
      ?>
    </div><!-- End Desktop Slider -->
    <!-- Mobile Header -->

    <div class="row">
      <div class="small-12 show-for-small"><br>
      <?php 
        $b = new Area('Mobile Header Image');
        $b->display($c);
      ?>
    </div><!-- End Mobile Header -->
  </div>
</div><br>

<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <!-- Thumbnails -->

      <div class="large-3 small-6 columns">
       <?php 
        $b = new Area('Thumbnail Image 1');
        $b->display($c);
       ?>

        <h6 class="panel">
        <?php 
          $b = new Area('Thumbnail Description 1');
          $b->display($c);
         ?>
       </h6>
      </div>

      <div class="large-3 small-6 columns">
        <?php 
          $b = new Area('Thumbnail Image 2');
          $b->display($c);
        ?>

        <h6 class="panel">
        <?php 
          $b = new Area('Thumbnail Description 2');
          $b->display($c);
        ?>
        </h6>
      </div>

      <div class="large-3 small-6 columns">
        <?php 
          $b = new Area('Thumbnail Image 3');
          $b->display($c);
        ?>

        <h6 class="panel">
        <?php 
          $b = new Area('Thumbnail Description 3');
          $b->display($c);
         ?>
        </h6>
      </div>

      <div class="large-3 small-6 columns">
        <?php 
          $b = new Area('Thumbnail Image 4');
          $b->display($c);
        ?>

        <h6 class="panel">
          <?php 
          $b = new Area('Thumbnail Description 4');
          $b->display($c);
         ?>
        </h6>
      </div><!-- End Thumbnails -->
    </div>
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <!-- Content -->

      <div class="large-8 columns">
        <div class="panel radius">
          <div class="row">
            <div class="large-6 small-6 columns">
              <h4>
                <?php 
                  $b = new Area('Content Header');
                  $b->display($c);
                ?>
              </h4>
              <hr>

              <h5 class="subheader">
                <?php 
                  $b = new Area('Sub Header');
                  $b->display($c);
                 ?>
               </h5>

              <div class="show-for-small" style="text-align: center">
                <a class="small radius button" href="#">Call To Action!</a><br>
                <a class="small radius button" href="#">Call To Action!</a>
              </div>
            </div>

            <div class="large-6 small-6 columns">
              <?php 
                $b = new Area('content');
                $b->display($c);
               ?>
            </div>
          </div>
        </div>
      </div>

      <div class="large-4 columns hide-for-small">
        <h4>Get In Touch!</h4>
        <hr>
        <a href="#">
        <div class="panel radius callout" style="text-align: center">
          <strong>Call To Action!</strong>
        </div></a> <a href="#">
        <div class="panel radius callout" style="text-align: center">
          <strong>Call To Action!</strong>
        </div></a>
      </div><!-- End Content -->
    </div>
  </div>
</div>
<?php $this->inc('elements/footer.php'); ?>