<div class="medicamentos form">
<?php echo $this->Form->create('Medicamento'); ?>
	<fieldset>
		<legend><?php echo __('Form Medicamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		
		<li><?php echo $this->Html->link(__('Lista de medicamentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
