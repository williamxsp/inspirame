<?php if(Authcomponent::user('id')): ?>
	<div>
Olá <?php echo Authcomponent::user('name'); ?>
</div>
<div>
<?php echo $this->Html->link('Logout',array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn btn-inverse')); ?>
</div>
<?php else: ?>
	<div>
Olá Visitante
</div>
<div>
<?php echo $this->Html->link('Login',array('controller' => 'users', 'action' => 'login'), array('class' => 'btn btn-success')); ?>
</div>
<?php endif; ?>