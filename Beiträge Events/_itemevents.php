<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt

 * Override c.Oerter
 * Stand: 04/2019
 * Anzeige Beiträge als Veranstaltungen. Folgende Custom Fields müssen angelegt sein:
 * eventdatum 
 * starttime
 * endtime
 *
 * Dies wird dann als Veranstaltungsdatum ausgegeben.
 */

defined('_JEXEC') or die;
setlocale(LC_TIME, "de_DE.utf8");
$startzeit = '';
$endzeit   = '';
?>
<div class="wbcitem mb-3">
	<?php foreach($item->jcfields as $jcfield) : ?>
		<?php if  ( $jcfield->name == "eventdatum") : ?>
			<?php if ($item->link !== '') { ?>
				<a href="<?php echo $item->link; ?>">
			 <?php } ?>
			<div class="wbcdate mb-3 ">  
				  	
					<div class="wbc-date p-md-2 bg-secondary text-light">
					<span class="d-inline-block text-center h4"><?php echo strftime("%a", strtotime($jcfield->value));?></span>
					<span class="d-block text-center h3"><?php echo strftime("%d.%m.", strtotime($jcfield->value));?></span>
					</div>
			</div>
			<?php if ($item->link !== '') { ?>
				</a>
			<?php } ?>

	    <?php endif; ?>
	    <?php if ( $jcfield->value > '') : ?>
		    <?php if ($jcfield->name == "starttime"  ) {
		    	$startzeit =  '<span>'. $jcfield->value .'</span>'; 
		    	}?>
		    <?php if ($jcfield->name == "endtime") {
	    		$endzeit = '<span> - '. $jcfield->value . JText::_('WBC_TIMELABEL') .'</span>';
	    	} ?>
		<?php endif; ?>

	<?php endforeach; ?>	

	<div class="wbc-content">
	<?php if( $startzeit > '' || $endzeit > '')	: ?>
	<div class="wbc-time">
		<i class="fa fa-clock-o"></i> <?php echo $startzeit; echo $endzeit; ?>
	</div>
	<?php endif; ?>

	<?php if ($params->get('item_title')) : ?>
		<?php $item_heading = $params->get('item_heading', 'h4'); ?>
		<<?php echo $item_heading; ?> class="event-title <?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
			<a href="<?php echo $item->link; ?>">
				<?php echo $item->title; ?>
			</a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $item_heading; ?>>
	<?php endif; ?>

	<?php if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc)) : ?>	
		<figure class="wbcevents-image">
			<img src="<?php echo $item->imageSrc; ?>" alt="<?php echo $item->imageAlt; ?>">
			<?php if (!empty($item->imageCaption)) : ?>
				<figcaption>
					<?php echo $item->imageCaption; ?>
				</figcaption>
			<?php endif; ?>
		</figure>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) : ?>
		<?php echo $item->afterDisplayTitle; ?>
	<?php endif; ?>

	<?php // echo $item->beforeDisplayContent; ?>

	<?php if ($params->get('show_introtext', 1)) : ?>
		<?php echo $item->introtext; ?>
	<?php endif; ?>

	<?php // echo $item->afterDisplayContent; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
		<?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
	<?php endif; ?>
	</div>
</div>