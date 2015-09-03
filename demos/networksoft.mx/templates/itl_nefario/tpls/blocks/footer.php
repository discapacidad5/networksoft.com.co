<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="footer" class="footer">

	<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOT NAVIGATION -->
		<div class="container">
			<?php $this->spotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
		</div>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>

</footer>
<section class="agnes-copyright">
<div class="container">
  <div class="row">
	<div class="col-md-6 col-sm-12 col-xs-12 copyright <?php $this->_c('footer') ?>">
	  <jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
	</div>
	
	<div class="col-md-6 col-sm-12 col-xs-12 footer-menu copyright <?php $this->_c('footer-menu') ?>">
	  <jdoc:include type="modules" name="<?php $this->_p('footer-menu') ?>" />
	</div>
	
  </div>
  <?php if ($this->getParam('t3-rmvlogo', 1)): ?>
  <div class="row">
	<div class="col-md-12 poweredby text-hide">
		<a class="t3-logo t3-logo-color" href="http://themeforest.net/user/ithemeslab" title="Powered By iThemesLab"
		   target="_blank" <?php echo method_exists('T3', 'isHome') && T3::isHome() ? '' : 'rel="nofollow"' ?>>Powered by <strong>iThemesLab</strong></a>
	  </div>
  </div>
  <?php endif; ?>
</div>
</section>
  
  

<!-- //FOOTER -->
<!--To Top Button-->
<div id="back-to-top" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>
<!--To Top Button-->