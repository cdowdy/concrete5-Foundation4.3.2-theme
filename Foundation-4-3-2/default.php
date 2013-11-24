<?php 
defined('C5_EXECUTE') or die('Access_Denied');
$this->inc('elements/header_button_group_right.php');
?>

 <!-- First Band (Image) -->

  <div class="row">
    <div class="large-12 columns">
      <?php 
      	$b = new Area('Banner Image');
      	$b->display($c);
      ?>

      <hr>
    </div>
  </div>
  <!-- Second Band (Image Left with Text) -->

  <div class="row">
    <div class="large-4 columns">
      <?php 
      	$b = new Area('Left Content Image');
      	$b->display($c);
      ?>
    </div>
    <div class="large-8 columns">
      <?php 
      	$b = new Area('Content area header');
      	$b->display($c);
      ?>
      <div class="row">
        <div class="large-6 columns">
          <?php 
	      	$b = new Area('content area 1');
	      	$b->display($c);
	      ?>
        </div>
        <div class="large-6 columns">
          <?php 
	      	$b = new Area('content area 2');
	      	$b->display($c);
	      ?>
        </div>
      </div>
    </div>
  </div>


  <!-- Third Band (Image Right with Text) -->

  <div class="row">
    <div class="large-8 columns">
      <?php 
	      $b = new Area('content section');
	      $b->display($c);
	   ?>

    </div>
    <div class="large-4 columns">
      <?php 
	      $b = new Area('content section image');
	      $b->display($c);
	   ?>
    </div>
  </div>

  <?php $this->inc('elements/footer.php'); ?>
