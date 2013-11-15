<div class="pacientes view">
<h2><?php  echo __('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAlta'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fechaAlta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupacion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['ocupacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nextel'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nextel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paciente'), array('action' => 'edit', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('controller' => 'anexos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('controller' => 'anexos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List AntecedentesPatologicos'), array('controller' => 'antecedentesPatologicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('controller' => 'antecedentesPatologicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List EstadoCuenta'), array('controller' => 'estadoCuenta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('controller' => 'estadoCuenta', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List HistoriaMedicas'), array('controller' => 'historiaMedicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historia Medica'), array('controller' => 'historiaMedicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Anexos'); ?></h3>
	<?php if (!empty($paciente['Anexo'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Recomendado'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['recomendado']; ?>
&nbsp;</dd>
		<dt><?php echo __('TratamientoPasado'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['tratamientoPasado']; ?>
&nbsp;</dd>
		<dt><?php echo __('FechaTratamiento'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['fechaTratamiento']; ?>
&nbsp;</dd>
		<dt><?php echo __('MotivoVisita'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['motivoVisita']; ?>
&nbsp;</dd>
		<dt><?php echo __('MenorEdad'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['menorEdad']; ?>
&nbsp;</dd>
		<dt><?php echo __('Paciente Id'); ?></dt>
		<dd>
	<?php echo $paciente['Anexo']['paciente_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Anexo'), array('controller' => 'anexos', 'action' => 'edit', $paciente['Anexo']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related AntecedentesPatologicos'); ?></h3>
	<?php if (!empty($paciente['AntecedentesPatologico'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Patologia'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['AntecedentesPatologico'] as $antecedentesPatologico): ?>
		<tr>
			<td><?php echo $antecedentesPatologico['id']; ?></td>
			<td><?php echo $antecedentesPatologico['patologia']; ?></td>
			<td><?php echo $antecedentesPatologico['paciente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'antecedentesPatologicos', 'action' => 'view', $antecedentesPatologico['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'antecedentesPatologicos', 'action' => 'edit', $antecedentesPatologico['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'antecedentesPatologicos', 'action' => 'delete', $antecedentesPatologico['id']), null, __('Are you sure you want to delete # %s?', $antecedentesPatologico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('controller' => 'antecedentesPatologicos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related EstadoCuenta'); ?></h3>
	<?php if (!empty($paciente['EstadoCuentum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('FechaTransaccion'); ?></th>
		<th><?php echo __('OtrosTratamientos'); ?></th>
		<th><?php echo __('Tratamiento'); ?></th>
		<th><?php echo __('Doctor'); ?></th>
		<th><?php echo __('PacienteCuenta'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['EstadoCuentum'] as $estadoCuentum): ?>
		<tr>
			<td><?php echo $estadoCuentum['id']; ?></td>
			<td><?php echo $estadoCuentum['fechaTransaccion']; ?></td>
			<td><?php echo $estadoCuentum['otrosTratamientos']; ?></td>
			<td><?php echo $estadoCuentum['tratamiento']; ?></td>
			<td><?php echo $estadoCuentum['doctor']; ?></td>
			<td><?php echo $estadoCuentum['pacienteCuenta']; ?></td>
			<td><?php echo $estadoCuentum['paciente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estadoCuenta', 'action' => 'view', $estadoCuentum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estadoCuenta', 'action' => 'edit', $estadoCuentum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estadoCuenta', 'action' => 'delete', $estadoCuentum['id']), null, __('Are you sure you want to delete # %s?', $estadoCuentum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('controller' => 'estadoCuenta', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related HistoriaMedicas'); ?></h3>
	<?php if (!empty($paciente['HistoriaMedica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Padecimiento'); ?></th>
		<th><?php echo __('TratamientoMedico'); ?></th>
		<th><?php echo __('Paciente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['HistoriaMedica'] as $historiaMedica): ?>
		<tr>
			<td><?php echo $historiaMedica['id']; ?></td>
			<td><?php echo $historiaMedica['padecimiento']; ?></td>
			<td><?php echo $historiaMedica['tratamientoMedico']; ?></td>
			<td><?php echo $historiaMedica['paciente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'historiaMedicas', 'action' => 'view', $historiaMedica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'historiaMedicas', 'action' => 'edit', $historiaMedica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'historiaMedicas', 'action' => 'delete', $historiaMedica['id']), null, __('Are you sure you want to delete # %s?', $historiaMedica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Historia Medica'), array('controller' => 'historiaMedicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
