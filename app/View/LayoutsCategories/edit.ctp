<div class="layoutsCategories form">
<?php echo $this->Form->create('LayoutsCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Layouts Category'); ?></legend>
	<?php
		echo $this->Form->input('layout_id');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LayoutsCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LayoutsCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Layouts Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Layouts'), array('controller' => 'layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout'), array('controller' => 'layouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
