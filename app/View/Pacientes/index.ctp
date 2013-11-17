<div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('nextel'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['celular']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nextel']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'agregar')); ?></li>
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
