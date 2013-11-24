<?php 
defined('C5_EXECUTE') or die('Access_Denied');
$this->inc('elements/header.php');
?>

 <!-- First Band (Image) -->

  <div class="row">
    <div class="large-12 columns">
      <?php
        print $innerContent;
      ?>  
    </div>
  </div>
  

  <?php $this->inc('elements/footer.php'); ?>
