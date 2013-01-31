<div class="layoutsCategories view">
<h2><?php  echo __('Layouts Category'); ?></h2>
	<dl>
		<dt><?php echo __('Layout'); ?></dt>
		<dd>
			<?php echo $this->Html->link($layoutsCategory['Layout']['name'], array('controller' => 'layouts', 'action' => 'view', $layoutsCategory['Layout']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($layoutsCategory['Category']['id'], array('controller' => 'categories', 'action' => 'view', $layoutsCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Layouts Category'), array('action' => 'edit', $layoutsCategory['LayoutsCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Layouts Category'), array('action' => 'delete', $layoutsCategory['LayoutsCategory']['id']), null, __('Are you sure you want to delete # %s?', $layoutsCategory['LayoutsCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Layouts Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layouts Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layouts'), array('controller' => 'layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout'), array('controller' => 'layouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
