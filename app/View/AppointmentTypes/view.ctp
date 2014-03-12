<div class="appointmentTypes view">
<h2><?php  echo __('Appointment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointmentType['AppointmentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($appointmentType['AppointmentType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($appointmentType['AppointmentType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($appointmentType['AppointmentType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment Type'), array('action' => 'edit', $appointmentType['AppointmentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment Type'), array('action' => 'delete', $appointmentType['AppointmentType']['id']), null, __('Are you sure you want to delete # %s?', $appointmentType['AppointmentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List AppointmentTypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointments'), array('controller' => 'appointments', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Appointments'); ?></h3>
	<?php if (!empty($appointmentTypes['Appointments'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Paciente Id'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['paciente_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Doctor Id'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['doctor_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Appointment Types Id'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['appointment_types_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['time']; ?>
&nbsp;</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['duration']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $appointmentTypes['Appointments']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Appointments'), array('controller' => 'appointments', 'action' => 'edit', $appointmentTypes['Appointments']['id'])); ?></li>
			</ul>
		</div>
	</div>
	