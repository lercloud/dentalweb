<div class="appointmentTypes form">
<?php echo $this->Form->create('AppointmentType'); ?>
	<fieldset>
		<legend><?php echo __('Form Appointment Type'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>


		<li><?php echo $this->Html->link(__('Ver Razones Citas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Razon Cita'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>

	</ul>
</div>
