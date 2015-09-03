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

	<?php if ($this->countModules('subscribe')) : ?>
		<!-- Subscribe Start-->
		<div class="subscribe <?php $this->_c('subscribe') ?>" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<jdoc:include type="modules" name="<?php $this->_p('subscribe') ?>" style="T3xhtml" />
					</div>
				</div>
			</div>
		</div>
		<!-- Subscribe End -->
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

	<section id="service" class="service-wrap">
		<?php if ($this->countModules('service-top')) : ?>
			<!-- Service-top -->
			<div class="service-top <?php $this->_c('service-top') ?>">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<jdoc:include type="modules" name="<?php $this->_p('service-top') ?>" style="xhtml" />
						</div>
					</div>
				</div>
			</div>
			<!-- //Service-top -->
		<?php endif ?>
		
		<?php $this->loadBlock('service') ?>

	</section>

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
		<!-- Testimonials -->
		<div class="testimonials parallax <?php $this->_c('testimonials') ?>" style="background-image: url('images/itl_demo/parallax/parallax2.jpg');">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('testimonials') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Testimonial -->
	<?php endif ?>

	<?php $this->loadBlock('extension') ?>

	<?php if ($this->countModules('action-home-2')) : ?>
		<!-- Action Home 2 -->
		<div class="action-home-2 parallax <?php $this->_c('action-home-2') ?>" style="background-image: url('images/itl_demo/parallax/parallax3.jpg');">
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('action-home-2') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Action Home 2 -->
	<?php endif ?>
	
	<?php if ($this->countModules('clients')) : ?>
		<!-- Clients -->
		<div class="clients <?php $this->_c('testimonial') ?>" >
			<div class="container">
				<jdoc:include type="modules" name="<?php $this->_p('clients') ?>" style="xhtml" />
			</div>
		</div>
		<!-- //Clients -->
	<?php endif ?>

</div>
