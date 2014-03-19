<div class="laborders index">
	<h2><?php echo __('Ordenes'); ?></h2>
	<table class="table" cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('laboratory_id'); ?></th>

			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('payments'); ?></th>
			<th><?php echo $this->Paginator->sort('dateSend'); ?></th>
			<th><?php echo $this->Paginator->sort('dateReceived'); ?></th>

			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($laborders as $laborder): ?>
	<tr>

		<td><?php echo h($laborder['Paciente']["fullName"]); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laborder['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $laborder['Laboratory']['id'])); ?>
		</td>
		<td><?php echo h($laborder['Laborder']['description']); ?>&nbsp;</td>
		<td><?php echo h($laborder['Laborder']['cost']); ?>&nbsp;</td>
		<td><?php echo h($laborder['Laborder']['payments']); ?>&nbsp;</td>
		<td><?php echo h($laborder['Laborder']['dateSend']); ?>&nbsp;</td>
		<td><?php echo h($laborder['Laborder']['dateReceived']); ?>&nbsp;</td>
		

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laborder['Laborder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laborder['Laborder']['id'])); ?>
			<?php echo $this->Html->link(__('Abonar'), array('action' => 'add', "controller"=>"orderpayments", $laborder['Laborder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laborder['Laborder']['id']), null, __('Are you sure you want to delete # %s?', $laborder['Laborder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Orden'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Laboratorios'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Laboratorio'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
	</ul>
</div>
