<div class="medicaments index">
	<h2><?php echo __('Medicaments'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('presentation'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('serving'); ?></th>
			<th><?php echo $this->Paginator->sort('activeElement'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($medicaments as $medicament): ?>
	<tr>

		<td><?php echo h($medicament['Medicament']['name']); ?>&nbsp;</td>
		<td><?php echo h($medicament['Medicament']['presentation']); ?>&nbsp;</td>
		<td><?php echo h($medicament['Medicament']['size']); ?>&nbsp;</td>
		<td><?php echo h($medicament['Medicament']['serving']); ?>&nbsp;</td>
		<td><?php echo h($medicament['Medicament']['activeElement']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $medicament['Medicament']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $medicament['Medicament']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $medicament['Medicament']['id']), null, __('Are you sure you want to delete # %s?', $medicament['Medicament']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Medicament'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Prescriptions'), array('controller' => 'prescriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prescription'), array('controller' => 'prescriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
