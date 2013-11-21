<div class="pacientes index">
	<h2><?php echo __('Migracion'); ?></h2>
	
	
	<?php
	

	echo '<pre>';
	echo print_r($pacientes,true);
	echo '</pre>';
	 ?>


</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Regresar'), array('action' => 'index')); ?></li>
		</ul>
</div>
