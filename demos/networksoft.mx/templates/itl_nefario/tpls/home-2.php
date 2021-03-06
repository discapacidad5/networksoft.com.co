<?php
/** 
 *------------------------------------------------------------------------------
 * @package       iThemesLab for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 ithemeslab. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       ithemeslab
 * @Link:         http://ithemeslab.com 
 *------------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" />'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
	<?php $this->addCss('home') ?>
</head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

	<?php $this->loadBlock('top-header') ?>

	<?php $this->loadBlock('header') ?>

	<?php $this->loadBlock('mainbody-home-2') ?>

	<?php $this->loadBlock('footer') ?>

</div>


</body>
</html>