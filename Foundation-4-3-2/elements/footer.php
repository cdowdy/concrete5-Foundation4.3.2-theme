<?php 
defined('C5_EXECUTE') or die('Access_Denied');
?>
<!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; <?php print date('Y') . ' ' . SITE; ?></p>
        </div>
        <div class="large-6 columns">
          <?php
	     	$a = new GlobalArea('Footer Nav');
	     	$a->display($c);
	     ?>
        </div>
      </div>
    </div>
  </footer>
  
  <script>
    $(document).foundation();
  </script>
  <?php
    $html = Loader::helper('html');
    $this->addFooterItem($html->javascript('foundation.min.js'));
  ?>
  <?php Loader::element('footer_required'); ?>
</body>
</html>