<div class="estadoCuenta view">
<h2><?php  echo __('Estado Cuentum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaTransaccion'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['fechaTransaccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('OtrosTratamientos'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['otrosTratamientos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamiento'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['tratamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doctor'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['doctor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PacienteCuenta'); ?></dt>
		<dd>
			<?php echo h($estadoCuentum['EstadoCuentum']['pacienteCuenta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paciente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estadoCuentum['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $estadoCuentum['Paciente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado Cuentum'), array('action' => 'edit', $estadoCuentum['EstadoCuentum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado Cuentum'), array('action' => 'delete', $estadoCuentum['EstadoCuentum']['id']), null, __('Are you sure you want to delete # %s?', $estadoCuentum['EstadoCuentum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List EstadoCuenta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
