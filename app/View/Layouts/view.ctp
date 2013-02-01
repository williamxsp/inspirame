<div class="layouts view">
<div class="row">
	<div class="span12">
		<h2><?php  echo h($layout['Layout']['name']); ?></h2>
		<strong>Postado por: </strong>
		<small><?php echo h($layout['User']['name']); ?></small>
		<strong>Em: </strong>
		<small><?php echo h($layout['Layout']['created'])?></small>
		<strong>Categorias:</strong>
	</div>
</div>
<div class="row">
	<div class="span12">
			<?php echo $this->Html->image('upload/'.$layout['Layout']['filename']);?>
	</div>
</div>
<strong>Categorias:</strong>

	<?php 
	foreach($layout['Category'] as $c)
	{	
		echo $this->Html->link($c['description'], array('controller'=>'categories', 'action' => 'view', $c['id']), array('class' => 'badge badge-info')) . " ";
	}
	?>
</div>
</div>
