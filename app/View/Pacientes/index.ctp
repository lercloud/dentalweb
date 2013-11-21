<div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('nextel'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['celular']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nextel']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['email']); ?>&nbsp;</td>
		<td class="actions ">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $paciente['Paciente']['id']), array('class'=>'')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $paciente['Paciente']['id']), array('class'=>'')); ?></li>
			<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $paciente['Paciente']['id']), array('class'=>'btn-danger', "style"=>"color:#FFF;"), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?></li>
		</ul>
		</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<ul class="paging pager">
	<?php
	echo "<li>";
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled previous'));
		echo "</li>";
		echo $this->Paginator->numbers(array('separator' => ''));
		echo "<li>";
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled next'));
		echo '</li>'
	?>
	</ul>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'agregar'), array('class'=>'btn btn-default')); ?></li>
		<li><?php echo $this->Html->link(__('List Anexos'), array('controller' => 'anexos', 'action' => 'index'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anexo'), array('controller' => 'anexos', 'action' => 'add'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List AntecedentesPatologicos'), array('controller' => 'antecedentesPatologicos', 'action' => 'index'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedentes Patologico'), array('controller' => 'antecedentesPatologicos', 'action' => 'add'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List EstadoCuenta'), array('controller' => 'estadoCuenta', 'action' => 'index'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Cuentum'), array('controller' => 'estadoCuenta', 'action' => 'add'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('List HistoriaMedicas'), array('controller' => 'historiaMedicas', 'action' => 'index'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historia Medica'), array('controller' => 'historiaMedicas', 'action' => 'add'), array('class'=>'btn btn-default')); ?> </li>
	</ul>
</div>
