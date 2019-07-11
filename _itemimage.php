<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$images	= json_decode($item->images);
$charcount = 100;

?>

<div class="card text-dark justify-content-center">
	<?php if ($params->get('img_intro_full') !== 'none' && !empty($item->imageSrc)) : ?>	

	<img class="card-img img-fluid" src="<?php echo $item->imageSrc; ?>" alt="<?php echo $item->imageAlt; ?>">
    <?php endif; ?>
	<div class="card-img-overlay p-5">
		<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
		<a href="<?php echo $item->link; ?>">				
		<?php endif; ?>
			<div class="wbc-layer-trans-06 p-5 ">
				<?php if ($params->get('item_title')) : ?>
					<?php $item_heading = $params->get('item_heading', 'h4'); ?>
					<<?php echo $item_heading; ?> class="text-dark card-title wbc-title<?php echo $params->get('moduleclass_sfx'); ?>">
						 <?php echo $item->title; ?>
					</<?php echo $item_heading; ?>>
				<?php endif; ?>
				<div class="card-content text-dark">
					<?php if (!$params->get('intro_only')) : ?>
					<?php echo $item->afterDisplayTitle; ?>
					<?php endif; ?>

					<?php echo $item->beforeDisplayContent; ?>

					<?php if ($params->get('show_introtext', 1)) : ?>
						<?php if ( $item->readmore != 0 ) : ?>
							<?php echo $item->introtext; ?>
							<?php else :  
									$introtext = strip_tags($item->introtext);
									if(strlen($introtext) > $charcount) {
										$introtext = $introtext." ";
										$introtext = substr($introtext,0,$charcount);
										$introtext = substr($introtext,0,strrpos($introtext,' '));
										if($charcount != 0) {
										$introtext = $introtext."...";
										}
									}
									echo $introtext; ?>						
							<?php endif; ?>
						<?php endif; ?>
								
					<?php echo $item->afterDisplayContent; ?>

					<?php if (isset($item->link) && $params->get('readmore')) : ?>
						<?php echo '<div class="float-right"><a class="btn btn-outline-secondary" href="' . $item->link . '">' . $item->linkText . '</a></div>'; ?>
					<?php endif; ?>
				</div>
			</div>											
		<?php if ($item->link !== '' && $params->get('link_titles')) : ?>
		</a>
		<?php endif ?>
	</div>
	

</div>

