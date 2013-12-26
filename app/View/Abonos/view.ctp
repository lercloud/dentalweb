<div class="abonos view">
<h2><?php  echo __('Abono'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($abono['Abono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($abono['Tratamiento']['id'], array('controller' => 'tratamientos', 'action' => 'view', $abono['Tratamiento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaTransaccion'); ?></dt>
		<dd>
			<?php echo h($abono['Abono']['fechaTransaccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($abono['Abono']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($abono['Abono']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($abono['Abono']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Abono'), array('action' => 'edit', $abono['Abono']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Abono'), array('action' => 'delete', $abono['Abono']['id']), null, __('Are you sure you want to delete # %s?', $abono['Abono']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Abonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
