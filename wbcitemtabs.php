<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * Article News Bootstrap 4 Tabs Layout
 * Stand: 03/2019
 *
 */

defined('_JEXEC') or die;
$i = 0;
$i_count = count($list);
?>
<div class="wbcitemtabs <?php echo $moduleclass_sfx; ?>">

	<ul class="nav nav-tabs nav-fill" id="tab_<?php echo $module->id;?>" role="tablist" >
		<?php foreach ($list as $item) : ?>
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemtabs'); ?>
		<?php endforeach; ?>
	</ul>
	<?php $i=0; ?>
	<div class="tab-content" id="tabcontent_<?php echo $module->id;?>">
		<?php foreach ($list as $item) : ?>
			
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemtabcontent'); ?>
		<?php endforeach; ?>
	</div>
</div>
