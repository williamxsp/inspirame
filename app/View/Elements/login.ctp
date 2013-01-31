<?php if (AuthComponent::user('id')): ?>
  <?php echo $this->Html->link(AuthComponent::user('name'), array(
  'controller' => 'users', 'action' => 'edit', AuthComponent::user('id'))); ?>
<?php else: ?>
  <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')) ?>
<?php endif ?>
