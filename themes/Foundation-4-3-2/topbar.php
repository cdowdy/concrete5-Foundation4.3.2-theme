<?php 
defined('C5_EXECUTE') or die('Access_Denied');
$this->inc('elements/header_topbar.php');
?>


<div class="row">
	<?php  if ($c->isEditMode()) { ?>
	<div class="large-12 columns">
	<?php  } ?>
	 <?php 
	    $b = new Area('Main Content Area');
	    $b->display($c);
	 ?>
</div>
<?php  if ($c->isEditMode()) { ?>
</div>
<?php } ?>

<?php $this->inc('elements/footer.php'); ?>

