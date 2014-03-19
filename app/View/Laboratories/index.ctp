<div class="laboratories index">
	<h2><?php echo __('Laboratories'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo __("Saldo Pendiente"); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($laboratories as $laboratory): ?>
	<tr>
		<td><?php echo h($laboratory['Laboratory']['name']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['phone']); ?>&nbsp;</td>
		<td><?php echo h($laboratory['Laboratory']['email']); ?>&nbsp;</td>
		<td><?php echo h("$"." ".$laboratory['Laboratory']['pendingToPay']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laboratory['Laboratory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laboratory['Laboratory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laboratory['Laboratory']['id']), null, __('Are you sure you want to delete # %s?', $laboratory['Laboratory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Laboratorio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ordenes Enviadas'), array('controller' => 'laborders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Enviar Nueva Orden'), array('controller' => 'laborders', 'action' => 'add')); ?> </li>
	</ul>
</div>
