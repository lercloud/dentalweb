<div class="antecedentesPatologicos form">
<?php echo $this->Form->create('AntecedentesPatologico'); ?>
	<fieldset>
		<legend><?php echo __('Form Antecedentes Patologico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('patologia');
		echo $this->Form->input('paciente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AntecedentesPatologico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AntecedentesPatologico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List AntecedentesPatologicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
