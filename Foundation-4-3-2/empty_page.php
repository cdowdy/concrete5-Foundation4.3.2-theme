<?php 
defined('C5_EXECUTE') or die('Access_Denied');
$this->inc('elements/header_button_group_right.php');
?>

 <!-- First Band (Image) -->

  <div class="row">
    
      <?php 
      	$b = new Area('Main Content');
      	$b->display($c);
      ?>

      
    </div>
  

  <?php $this->inc('elements/footer.php'); ?>
