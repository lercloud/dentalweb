<div class="estadoCuenta index">
	<h2><?php echo __('EstadoCuenta'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaTransaccion'); ?></th>
			<th><?php echo $this->Paginator->sort('otrosTratamientos'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('doctor'); ?></th>
			<th><?php echo $this->Paginator->sort('pacienteCuenta'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoCuenta as $estadoCuentum): ?>
	<tr>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['id']); ?>&nbsp;</td>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['fechaTransaccion']); ?>&nbsp;</td>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['otrosTratamientos']); ?>&nbsp;</td>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['tratamiento']); ?>&nbsp;</td>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['doctor']); ?>&nbsp;</td>
		<td><?php echo h($estadoCuentum['EstadoCuentum']['pacienteCuenta']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estadoCuentum['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $estadoCuentum['Paciente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estadoCuentum['EstadoCuentum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estadoCuentum['EstadoCuentum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estadoCuentum['EstadoCuentum']['id']), null, __('Are you sure you want to delete # %s?', $estadoCuentum['EstadoCuentum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
