<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * 
 * Override c.Oerter
 * Stand: 04/2019
 * Anzeige Beiträge als Veranstaltungen. Custom Field eventdatum muss angelegt werden.
 * Dies wird dann als Veranstaltungsdatum ausgegeben.
 * Layout Bootstrap 4
 *
 */

defined('_JEXEC') or die;
JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php'); 
$document = JFactory::getDocument();
$document->addStyleSheet('/media/mod_articles_news/css/wbc_events.css');
?>

<div class="wbcitemevents <?php echo $moduleclass_sfx; ?>">

<?php foreach ($list as $item) : ?>
		<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_itemevents'); ?>
<?php endforeach; ?>
	
</div>
