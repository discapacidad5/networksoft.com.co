<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$slogan    = $this->params->get('slogan', '');
$logotype  = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', 'templates/' . T3_TEMPLATE . '/images/logo.png') : '';
$logoimgsm = ($logotype == 'image' && $this->params->get('enable_logoimage_sm', 0)) ? $this->params->get('logoimage_sm', '') : false;

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

$logosize = 'col-sm-3';
$mainnavsize = 'col-sm-9';
if ($headright = $this->countModules('head-search or languageswitcherload')) {
	$mainnavsize = 'col-sm-8';
}

?>

<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header hidden-md hidden-lg">

	<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
		<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
		<button type="button" class="navbar-toggle hidden" data-toggle="collapse" data-target=".t3-navbar-collapse">
			<i class="fa fa-bars"></i>
		</button>
	<?php endif ?>

	<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
		<?php $this->loadBlock ('off-canvas') ?>
	<?php endif ?>

</div>

<!-- HEADER -->
<header id="t3-header" class="t3-header">
	<div class="container">
		<div class="main-container">
			<div class="row">
		
				<!-- LOGO -->
				<div class="col-xs-12 <?php echo $logosize ?> logo">
					<div id="logo-img" class="logo-<?php echo $logotype, ($logoimgsm ? ' logo-control' : '') ?>">
						<a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>">
							<?php if($logotype == 'image'): ?>
								<img class="logo-img hidden-sm hidden-xs" src="<?php echo JURI::base(true) . '/' . $logoimage ?>" alt="<?php echo strip_tags($sitename) ?>" />
							<?php endif ?>
							<?php if($logoimgsm) : ?>
								<img class="logo-img-sm visible-sm visible-xs" src="<?php echo JURI::base(true) . '/' . $logoimgsm ?>" alt="<?php echo strip_tags($sitename) ?>" />
							<?php endif ?>
							<span><?php echo $sitename ?></span>
						</a>
						<small class="site-slogan"><?php echo $slogan ?></small>
					</div>
				</div>
				<!-- //LOGO -->
				
				<?php if ($headright): ?>
					<div class="pull-right">
						<?php if ($this->countModules('head-search')) : ?>
							<!-- HEAD SEARCH -->
							<div class="head-search <?php $this->_c('head-search') ?>">
								<jdoc:include type="modules" name="<?php $this->_p('head-search') ?>" style="raw" />
							</div>
							<!-- //HEAD SEARCH -->
						<?php endif ?>
		
						<?php if ($this->countModules('languageswitcherload')) : ?>
							<!-- LANGUAGE SWITCHER -->
							<div class="languageswitcherload">
								<jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" />
							</div>
							<!-- //LANGUAGE SWITCHER -->
						<?php endif ?>
					</div>
				<?php endif ?>
				
				<div class="<?php echo $mainnavsize ?>  hidden-sm hidden-xs">
					<div class="t3-navbar navbar-default navbar-collapse collapse pull-right">
						<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
					</div>
				</div>
		
			</div>
		</div>
	</div>
</header>
<!-- //HEADER -->
