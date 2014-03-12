<div class="appointments view">
<h2><?php  echo __('Appointment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente Id'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['paciente_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor Id'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['doctor_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Appointment Types Id'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['appointment_types_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($appointments['Appointments']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment'), array('action' => 'edit', $appointments['Appointments']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment'), array('action' => 'delete', $appointments['Appointments']['id']), null, __('Are you sure you want to delete # %s?', $appointments['Appointments']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List AppointmentTypes'), array('controller' => 'appointmentTypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Types'), array('controller' => 'appointmentTypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
