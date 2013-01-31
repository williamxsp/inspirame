<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('login');
		echo $this->Form->input('password');
		echo $this->Form->input('name');
		echo $this->Form->select('role', array('admin' => 'Administrador', 'usuario'=> 'Úsuário'), array('default' => 'usuario'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Layouts'), array('controller' => 'layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout'), array('controller' => 'layouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
