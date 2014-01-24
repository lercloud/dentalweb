<div class="historiaMedicas view">
<h2><?php  echo __('Historia Medica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historiaMedica['HistoriaMedica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padecimiento'); ?></dt>
		<dd>
			<?php echo h($historiaMedica['HistoriaMedica']['padecimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TratamientoMedico'); ?></dt>
		<dd>
			<?php echo h($historiaMedica['HistoriaMedica']['tratamientoMedico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($historiaMedica['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $historiaMedica['Paciente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historia Medica'), array('action' => 'edit', $historiaMedica['HistoriaMedica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historia Medica'), array('action' => 'delete', $historiaMedica['HistoriaMedica']['id']), null, __('Are you sure you want to delete # %s?', $historiaMedica['HistoriaMedica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List HistoriaMedicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historia Medica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
