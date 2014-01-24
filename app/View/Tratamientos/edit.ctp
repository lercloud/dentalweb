<div class="tratamientos form">
<?php echo $this->Form->create('Tratamiento'); ?>
	<fieldset>
		<legend><?php echo __('Form Tratamiento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fechaTransaccion');
		echo $this->Form->input('costoTratamiento');
		echo $this->Form->input('mensualidad');
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tratamiento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tratamiento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('controller' => 'doctors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('controller' => 'doctors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abonos'), array('controller' => 'abonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abono'), array('controller' => 'abonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
