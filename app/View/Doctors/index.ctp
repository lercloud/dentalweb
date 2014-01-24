<div class="doctors index">
	<h2><?php echo __('Doctores'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doctors as $doctor): ?>
	<tr>
		<td><?php echo h($doctor['Doctor']['nombre']); ?>&nbsp;</td>
		
		<td class="actions">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    Operaciones <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Ver Datos'), array('action' => 'view', $doctor['Doctor']['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Editar Datos'), array('action' => 'edit', $doctor['Doctor']['id'])); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?></li>
		</ul>
		</div>
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
		<li><?php echo $this->Html->link(__('Agregar Doctor'), array('action' => 'add'), array('class'=>'btn btn-default')); ?></li>
		
	</ul>
</div>
