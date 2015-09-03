<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('slideshow')) : ?>
	<!-- Slideshow Start -->
	<div class="slideshow <?php $this->_c('slideshow') ?>">
		<div class="">
			<jdoc:include type="modules" name="<?php $this->_p('slideshow') ?>" style="xhtml" />
		</div>
	</div>
	<!-- //Slideshow End -->
<?php endif ?>