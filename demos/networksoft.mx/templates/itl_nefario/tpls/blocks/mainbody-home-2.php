<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="home">

	<?php $this->loadBlock('slideshow') ?>

	<?php $this->loadBlock('feature') ?>

	<?php if ($this->countModules('action-home-2')) : ?>
		<!-- Action Home 2 -->
		<div class="action-home-2 parallax <?php $this->_c('action-home-2') ?>" style="background-image: url('images/itl_demo/parallax/parallax3.jpg');">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('action-home-2') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Action Home 2 -->
	<?php endif ?>

	<?php if ($this->countModules('portfolio')) : ?>
		<!-- Portfolio -->
		<div class="portfolio <?php $this->_c('portfolio') ?>">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('portfolio') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Portfolio -->
	<?php endif ?>

	<?php if ($this->countModules('feature-tab')) : ?>
		<!-- Feature-tab -->
		<div class="feature-tab <?php $this->_c('feature-tab') ?>">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('feature-tab') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Feature-tab -->
	<?php endif ?>

	<?php if ($this->countModules('testimonials')) : ?>
		<!-- Testimonial -->
		<div class="testimonials parallax <?php $this->_c('testimonials') ?>" style="background-image: url('images/itl_demo/parallax/parallax2.jpg');">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('testimonials') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Testimonial -->
	<?php endif ?>

	<?php $this->loadBlock('extension') ?>

	<?php if ($this->countModules('clients')) : ?>
		<!-- Clients -->
		<div class="clients <?php $this->_c('clients') ?>" >
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('clients') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Clients -->
	<?php endif ?>

</div>
