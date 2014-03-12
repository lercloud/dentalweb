<div class="appointmentTypes form">
<?php echo $this->Form->create('AppointmentType'); ?>
	<fieldset>
		<legend><?php echo __('Form Appointment Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AppointmentTypes.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AppointmentTypes.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List AppointmentTypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointments'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
