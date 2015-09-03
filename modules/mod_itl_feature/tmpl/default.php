<?php
	/**
	* @package  ITL Feature
	* @author    iThemesLab http://www.ithemeslab.com
	* @copyright Copyright (C) 2014 iThemesLab
	* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
	*/
	
	//no direct access
	defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<div class="<?php echo $moduleclass_sfx ?>">
	<div class="feature-wrap">
		<div class="icon-wrap">
			<span class="fa fa-<?php echo $feature_icon; ?>">&nbsp;</span>
		</div> <!--/.icon-wrap-->
		<h3><?php echo $feature_title; ?></h3>
		<p><?php echo $feature_description; ?></p>
		<?php if ($params->get('read_more') != null) : ?>
			<a href="<?php echo $read_more; ?>" class="btn btn-readmore"><?php echo JText::_('READ_MORE'); ?></a>
		<?php endif;	?>
	</div> <!--/.feature-wrap-->
</div> <!--/.module class suffix-->
