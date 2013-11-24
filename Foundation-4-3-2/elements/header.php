<?php
defined('C5_EXECUTE') or die('Access_Denied');
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo LANGUAGE ?>" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo LANGUAGE ?>" > <!--<![endif]-->
<head>
  <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/normalize.css" />
  <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/foundation.css" />
  <?php  if ($c->isEditMode()) { ?> <style>#ccm-highlighter { margin-top: -49px; }</style> <?php  } ?>
  <?php Loader::element('header_required'); ?>
  <script src="<?php echo $this->getThemePath(); ?>/js/vendor/custom.modernizr.js"></script>
</head>
<body>
  <!-- Header and Nav -->
  <div class="row">
    <?php
    $a = new GlobalArea('Header Logo');
    $a->setBlockWrapperStart('<div class="large-3 columns"><h1>');
    $a->setBlockWrapperEnd('</h1></div>');
    $a->setBlockLimit(1);
    $a->display($c);
    ?>
    
    <?php
    $a = new GlobalArea('Header Nav');
    $a->setBlockLimit(1);
    $a->display($c);
    ?>
  </div>
  <!-- End Header and Nav -->