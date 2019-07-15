<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php $i++; ?>
<li class="nav-item <?php echo $i < $i_count ? 'mr-md-3' : '';?>">	
	<a class="nav-link bg-primary <?php echo $i === 1 ? 'active' : '';?>" id="tab_<?php echo $i;?>" href="#tabcontent_<?php echo $i;?>" data-toggle="tab" role="tab" aria-controls=""><?php echo $item->title; ?></a>
</li>