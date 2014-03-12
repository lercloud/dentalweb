<div class="appointments form">
<?php echo $this->Form->create('Appointments'); ?>
	<fieldset>
		<legend><?php echo __('Form Appointment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('paciente_id');
		echo $this->Form->input('doctor_id');
		echo $this->Form->input('appointment_types_id');
		echo $this->Form->input('date');
		echo $this->Form->input('time');
		echo $this->Form->input('duration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Appointments.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Appointments.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List AppointmentTypes'), array('controller' => 'appointmentTypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Types'), array('controller' => 'appointmentTypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
