<div class="patologias index">
	<h2><?php echo __('Patologias'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>

			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patologias as $patologia): ?>
	<tr>
		<td><?php echo h($patologia['Patologia']['id']); ?>&nbsp;</td>
		<td><?php echo h($patologia['Patologia']['descripcion']); ?>&nbsp;</td>

		<td class="actions">
			<ul>
			<li><?php echo $this->Html->link(__('View'), array('action' => 'view', $patologia['Patologia']['id'])); ?>/<li>
			<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patologia['Patologia']['id'])); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patologia['Patologia']['id']), null, __('Are you sure you want to delete # %s?', $patologia['Patologia']['id'])); ?></li>
		</ul>
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

	//$this->Html->link("string", aregloDireccion, arregloAtributos);


		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Patologia'), array('action' => 'add'), array("class"=>"btn btn-default", "id"=>"nicole")); ?></li>


	</ul>
</div>
