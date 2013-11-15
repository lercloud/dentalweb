<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Form Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('fechaAlta');
		echo $this->Form->input('edad');
		echo $this->Form->input('sexo');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('nextel');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('controller' => 'anexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('controller' => 'anexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List AntecedentesPatologicos'), array('controller' => 'antecedentesPatologicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('controller' => 'antecedentesPatologicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List EstadoCuenta'), array('controller' => 'estadoCuenta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('controller' => 'estadoCuenta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List HistoriaMedicas'), array('controller' => 'historiaMedicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historia Medica'), array('controller' => 'historiaMedicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
