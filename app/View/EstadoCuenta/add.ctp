<div class="estadoCuenta form">
<?php echo $this->Form->create('EstadoCuentum'); ?>
	<fieldset>
		<legend><?php echo __('Form Estado Cuentum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fechaTransaccion');
		echo $this->Form->input('otrosTratamientos');
		echo $this->Form->input('tratamiento');
		echo $this->Form->input('doctor');
		echo $this->Form->input('pacienteCuenta');
		echo $this->Form->input('paciente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstadoCuentum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstadoCuentum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List EstadoCuenta'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
