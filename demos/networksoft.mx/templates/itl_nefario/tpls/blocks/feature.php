<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('feature', 'feature-1, feature-2, feature-3, feature-4')) : ?>
	<div class="feature">
		<!-- Feature Start -->
		<div class="container">
			<?php $this->spotlight('feature', 'feature-1, feature-2, feature-3, feature-4') ?>
		</div>
		<!-- //Feature End -->
	</div>
<?php endif ?>