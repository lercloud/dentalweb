<div class="prescriptions index">
	<h2><?php echo __('Prescriptions'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo __("Pacient"); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prescriptions as $prescription): ?>
	<tr>
		<td><?php echo h($prescription['Prescription']['id']); ?>&nbsp;</td>
		<td><?php echo h($prescription['Paciente']['fullName']); ?>&nbsp;</td>
		<td><?php echo h($prescription['Prescription']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prescription['Prescription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prescription['Prescription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prescription['Prescription']['id']), null, __('Are you sure you want to delete # %s?', $prescription['Prescription']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Prescription'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Medicaments'), array('controller' => 'medicaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicament'), array('controller' => 'medicaments', 'action' => 'add')); ?> </li>
	</ul>
</div>
