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
		<li><?php echo $this->Html->link(__('Editar Razon Cita'), array('action' => 'edit', $appointmentType['AppointmentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Razon Cita'), array('action' => 'delete', $appointmentType['AppointmentType']['id']), null, __('Seguro de Elminar razon: %s?', $appointmentType['AppointmentType']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Razones cita'), array('action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('Ver Calendario Citas'), array('controller' => 'appointments', 'action' => 'index')); ?> </li>

	</ul>
</div>
	
	