<div class="anexos form">
<?php echo $this->Form->create('Anexo'); ?>
	<fieldset>
		<legend><?php echo __('Form Anexo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('recomendado');
		echo $this->Form->input('tratamientoPasado');
		echo $this->Form->input('fechaTratamiento');
		echo $this->Form->input('motivoVisita');
		echo $this->Form->input('menorEdad');
		echo $this->Form->input('paciente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Anexo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Anexo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
