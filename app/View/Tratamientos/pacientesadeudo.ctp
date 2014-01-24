
<div class="tratamientos index">
	<h2><?php echo __('Pacientes en Adeudo'); ?></h2>
	<pre><?php echo print_r($tratamientos,true);?></pre>

	<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th>Paciente</th>
			<th><?php echo $this->Paginator->sort('fechaTransaccion'); ?></th>
			<th><?php echo $this->Paginator->sort('costoTratamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('mensualidad'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tratamientos as $tratamiento): ?>
	<tr>
		
		<td><?php echo h($tratamiento['Paciente']['nombre']." ".$tratamiento['Paciente']['apellido_paterno']." ".$tratamiento['Paciente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['fechaTransaccion']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['costoTratamiento']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['mensualidad']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['categoria']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tratamiento['Tratamiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tratamiento['Tratamiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tratamiento['Tratamiento']['id']), null, __('Are you sure you want to delete # %s?', $tratamiento['Tratamiento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Tratamientos por Pagar'), array('action' => 'index'), array('class'=>'btn btn-default')); ?></li>
		<li><?php echo $this->Html->link(__('Pacientes en adeudo'), array('action' => 'pacientesadeudo'), array('class'=>'btn btn-default')); ?></li>
		
	</ul>
</div>
