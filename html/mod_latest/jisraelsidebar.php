<?php
/**
 * @package     JIsrael Template package
 * @subpackage  Templates.jisrael
 * @copyright   Copyright (C) 2005 - 2013 J-Guru.com, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since       3.0
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');
?>
<div class="row-striped">
	<?php if (count($list)) : ?>
		<?php foreach ($list as $i => $item) : ?>
			<div class="row-fluid">
				<div class="span12">
					
					<?php if ($item->checked_out) : ?>
						<?php echo JHtml::_('jgrid.checkedout', $i, $item->editor, $item->checked_out_time); ?>
					<?php endif; ?>
					<i class="icon-pencil"></i> 
					<strong class="row-title">
						<?php if ($item->link) : ?>
							<a href="<?php echo $item->link; ?>">
								<?php echo htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8');?></a>
						<?php else : ?>
							<?php echo htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8'); ?>
						<?php endif; ?>
					</strong>

					<!-- <small title="<?php echo JHtml::tooltipText('MOD_LATEST_CREATED_BY'); ?>">
						<?php // echo $item->author_name;?>
					</small> -->
					<?php //echo JHtml::_('jgrid.published', $item->state, $i, '', false); ?>
				</div>
				
			</div>
		<?php endforeach; ?>
	<?php else : ?>
		<div class="row-fluid">
			<div class="span12">
				<div class="alert"><?php echo JText::_('MOD_LATEST_NO_MATCHING_RESULTS');?></div>
			</div>
		</div>
	<?php endif; ?>
</div>
