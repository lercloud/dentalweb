<div class="abonos index">
	<h2><?php echo __('Abonos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamiento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaTransaccion'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($abonos as $abono): ?>
	<tr>
		<td><?php echo h($abono['Abono']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($abono['Tratamiento']['id'], array('controller' => 'tratamientos', 'action' => 'view', $abono['Tratamiento']['id'])); ?>
		</td>
		<td><?php echo h($abono['Abono']['fechaTransaccion']); ?>&nbsp;</td>
		<td><?php echo h($abono['Abono']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($abono['Abono']['created']); ?>&nbsp;</td>
		<td><?php echo h($abono['Abono']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $abono['Abono']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $abono['Abono']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $abono['Abono']['id']), null, __('Are you sure you want to delete # %s?', $abono['Abono']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Abono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
