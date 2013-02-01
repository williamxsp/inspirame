<?php if(Authcomponent::user('id') && Authcomponent::user('role') == 'admin'): ?>
	<div class="row">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="dropdown">
						<?php echo $this->Html->link("Usuários<b class='caret'></b>", "#", array('class'=>'dropdown-toggle', 'data-toggle' => 'dropdown', 'escape' => false)) ?>
						<ul class="dropdown-menu">
							<li>
								<?php echo $this->Html->link("Usuários", "/") ?>
							</li>
						</ul>
					</li>
					<li>
						<?php echo $this->Html->link("Home", "/"); ?>
					</li>
					<li>
						<?php echo $this->Html->link("Home", "/"); ?>
					</li>
					<li>
						<?php echo $this->Html->link("Home", "/"); ?>
					</li>
					<li>
						<?php echo $this->Html->link("Home", "/"); ?>
					</li>
				</ul>
				<?php 
					echo $this->Form->create("Layout", array('class' => 'navbar-search pull-right', 'action'=>'/search'));
					echo $this->Form->input("titulo", array('label' => false, 'placeholder' => "Buscar"));
					echo $this->Form->end();
				 ?>
			</div>
		</div>
	</div>

	<?php elseif(Authcomponent::user('id') && Authcomponent::user('role')== 'usuario'):?>
		<div class="row">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<?php 
					echo $this->Form->create("Layout", array('class' => 'navbar-search pull-right', 'action'=>'/search'));
					echo $this->Form->input("titulo", array('label' => false, 'placeholder' => "Buscar"));
					echo $this->Form->end();
				 ?>
			</div>
		</div>
	</div>
	<?php endif; ?>