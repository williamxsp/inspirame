<div class="layouts form">
<?php echo $this->Form->create('Layout', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Layout'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Título', 'class' => 'span8'));
		echo $this->Form->input("filename", array('type' => 'file', 'label' => 'Imagem'));
		echo $this->Form->input('Category', array('label' => 'Categorias'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Enviar', 'class' => 'btn btn-primary')); ?>
</div>

