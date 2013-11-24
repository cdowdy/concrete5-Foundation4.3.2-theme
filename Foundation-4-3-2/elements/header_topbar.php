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
  <div class="row">
    <div class="contain-to-grid">
      <!-- Navigation -->
      <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <?php
            $a = new GlobalArea('Title');
            $a->display($c);
            ?>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
        <?php  if ($c->isEditMode()) { ?>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <nav>
        <?php } ?>
        <section class="top-bar-section">
          <?php
          $a = new GlobalArea('Header Nav');
          $a->setBlockLimit(1);
          $a->display($c);
          ?>
        </section>
      </nav>
      <!-- End Navigation -->
    </div>
  </div>