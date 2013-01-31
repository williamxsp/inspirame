<?php $linhas = array_chunk($layouts, 4); ?>
<div class="layouts index span12">
	<div class="row">
		<?php echo $this->Html->link(__('New Layout'), array('action' => 'add'), array('class'=>"btn btn-success span2 offset10")); ?>
	</div>

	<?php foreach($linhas as $layouts):?>
		<div class="row">
		<?php foreach($layouts as $l):?>
			<div class="span3 layout">
				<h3><?php echo $l['Layout']['name'];?></h3>

				<?php
					$imagem = $this->Html->image('/img/upload/thumbs/'.$l['Layout']['filename']);
					echo $this->Html->link($imagem, '/img/upload/'.$l['Layout']['filename'], array('rel' => 'lightbox', 'escape' => false));
				?>

				<p>
					<strong>Publicado em:</strong> <small><?php echo $l['Layout']['created'];?></small>
				</p>
				<p>
				<strong>Por:</strong> <small><?php echo $l['User']['name'];?></small>
				</p>
				<p>
				<strong>Categorias:</strong>
				<?php 
					foreach($l['Category'] as $c)
					{	
						echo $this->Html->link($c['description'], array('controller'=>'categories', 'action' => 'view', $c['id']), array('class' => 'badge badge-info')) . " ";
					}
				?>
			</p>

			</div>
		<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
	</div>

	<div class="pagination">
		<ul>
				<li><?php echo $this->Paginator->prev(); ?></li>
				<?php echo $this->Paginator->first(3);?>
				<li><?php echo $this->Paginator->next();?></li>
		</ul>
	</div>
</div>

<script type="text/javascript">

</script>


