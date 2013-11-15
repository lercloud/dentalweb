<div class="antecedentesPatologicos index">
	<h2><?php echo __('AntecedentesPatologicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('patologia'); ?></th>
			<th><?php echo $this->Paginator->sort('paciente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($antecedentesPatologicos as $antecedentesPatologico): ?>
	<tr>
		<td><?php echo h($antecedentesPatologico['AntecedentesPatologico']['id']); ?>&nbsp;</td>
		<td><?php echo h($antecedentesPatologico['AntecedentesPatologico']['patologia']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($antecedentesPatologico['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $antecedentesPatologico['Paciente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $antecedentesPatologico['AntecedentesPatologico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $antecedentesPatologico['AntecedentesPatologico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $antecedentesPatologico['AntecedentesPatologico']['id']), null, __('Are you sure you want to delete # %s?', $antecedentesPatologico['AntecedentesPatologico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
