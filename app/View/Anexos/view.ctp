<div class="anexos view">
<h2><?php  echo __('Anexo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recomendado'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['recomendado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TratamientoPasado'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['tratamientoPasado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaTratamiento'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['fechaTratamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MotivoVisita'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['motivoVisita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MenorEdad'); ?></dt>
		<dd>
			<?php echo h($anexo['Anexo']['menorEdad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anexo['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $anexo['Paciente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anexo'), array('action' => 'edit', $anexo['Anexo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anexo'), array('action' => 'delete', $anexo['Anexo']['id']), null, __('Are you sure you want to delete # %s?', $anexo['Anexo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
