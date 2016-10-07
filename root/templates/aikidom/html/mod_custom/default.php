<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_custom
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>


<div class="custom<?php echo $moduleclass_sfx ?>">
	<?php if ($params->get('backgroundimage')): ?>
		<img src="<?php echo $params->get('backgroundimage');?>" class="bg-img"/>
	<?php endif;?>
	<div class="custom-inner"><?php echo $module->content;?></div>
</div>