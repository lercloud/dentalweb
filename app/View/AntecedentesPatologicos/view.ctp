<div class="antecedentesPatologicos view">
<h2><?php  echo __('Antecedentes Patologico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($antecedentesPatologico['AntecedentesPatologico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patologia'); ?></dt>
		<dd>
			<?php echo h($antecedentesPatologico['AntecedentesPatologico']['patologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($antecedentesPatologico['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $antecedentesPatologico['Paciente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Antecedentes Patologico'), array('action' => 'edit', $antecedentesPatologico['AntecedentesPatologico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Antecedentes Patologico'), array('action' => 'delete', $antecedentesPatologico['AntecedentesPatologico']['id']), null, __('Are you sure you want to delete # %s?', $antecedentesPatologico['AntecedentesPatologico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List AntecedentesPatologicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
