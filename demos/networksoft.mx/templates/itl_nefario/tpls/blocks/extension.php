<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->checkSpotlight('extension', 'extension-1, extension-2, extension-3, extension-4')) : ?>
	<div id="extension" class="extension">
		<!-- Extension Start-->
		<div class="container">
			<?php $this->spotlight('extension', 'extension-1, extension-2, extension-3, extension-4') ?>
		</div>
		<!-- //Extension End -->
	</div>
<?php endif ?>