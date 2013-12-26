<div class="abonos form">
<?php echo $this->Form->create('Abono'); ?>
	<fieldset>
		<legend><?php echo __('Form Abono'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tratamiento_id');
		echo $this->Form->input('fechaTransaccion');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Abono.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Abono.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Abonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
