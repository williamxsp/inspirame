<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layouts'), array('controller' => 'layouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout'), array('controller' => 'layouts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Layouts'); ?></h3>
	<?php if (!empty($user['Layout'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Filesize'); ?></th>
		<th><?php echo __('Mimetype'); ?></th>
		<th><?php echo __('Views'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Layout'] as $layout): ?>
		<tr>
			<td><?php echo $layout['id']; ?></td>
			<td><?php echo $layout['user_id']; ?></td>
			<td><?php echo $layout['name']; ?></td>
			<td><?php echo $layout['filename']; ?></td>
			<td><?php echo $layout['filesize']; ?></td>
			<td><?php echo $layout['mimetype']; ?></td>
			<td><?php echo $layout['views']; ?></td>
			<td><?php echo $layout['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'layouts', 'action' => 'view', $layout['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'layouts', 'action' => 'edit', $layout['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'layouts', 'action' => 'delete', $layout['id']), null, __('Are you sure you want to delete # %s?', $layout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Layout'), array('controller' => 'layouts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
