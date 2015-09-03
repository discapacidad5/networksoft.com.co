<?php
/**
 * @package   iThemesLab
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<?php if ($this->checkSpotlight('top-header', 'top-header-1, top-header-2, top-header-3, top-header-4')) : ?>
  <section id="top-header" class="top-header">
    <!-- SPOTLIGHT 1 -->
    <div class="container">
      <?php $this->spotlight('top-header', 'top-header-1, top-header-2, top-header-3, top-header-4') ?>
    </div>
    <!-- //SPOTLIGHT 1 -->
  </section>
<?php endif ?>