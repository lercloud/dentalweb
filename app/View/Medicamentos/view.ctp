<div class="patologias view">
<h2><?php  echo __('Patologium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['descripcion']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patologium'), array('action' => 'edit', $medicamento['Medicamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patologium'), array('action' => 'delete', $medicamento['Medicamento']['id']), null, __('Are you sure you want to delete # %s?', $medicamento['Medicamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
