<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('service', 'service-1, service-2, service-3, service-4')) : ?>
	<div class="service">
		<!-- Service Start -->
		<div class="container">
			<?php $this->spotlight('service', 'service-1, service-2, service-3, service-4') ?>
		</div>
		<!-- //Service End -->
	</div>
<?php endif ?>