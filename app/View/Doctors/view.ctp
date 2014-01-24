<div class="doctors view">
<h2><?php  echo __('Doctor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($doctor['Doctor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doctor'), array('action' => 'edit', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doctor'), array('action' => 'delete', $doctor['Doctor']['id']), null, __('Are you sure you want to delete # %s?', $doctor['Doctor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doctors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doctor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Tratamientos'); ?></h3>
	<?php if (!empty($doctor['Tratamiento'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['descripcion']; ?>
&nbsp;</dd>
		<dt><?php echo __('FechaTransaccion'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['fechaTransaccion']; ?>
&nbsp;</dd>
		<dt><?php echo __('CostoTratamiento'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['costoTratamiento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Mensualidad'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['mensualidad']; ?>
&nbsp;</dd>
		<dt><?php echo __('Doctor Id'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['doctor_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['categoria']; ?>
&nbsp;</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
	<?php echo $doctor['Tratamiento']['modified']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Tratamiento'), array('controller' => 'tratamientos', 'action' => 'edit', $doctor['Tratamiento']['id'])); ?></li>
			</ul>
		</div>
	</div>
	