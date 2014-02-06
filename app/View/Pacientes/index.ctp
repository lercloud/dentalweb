

<div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
<?php 
echo $this->Form->input("buscarPaciente",array(
												"div"=>array("class"=>"col-md-6","style"=>"margin-bottom:5px;"),
												'class'=>"form-control",
												'placeholder'=>"Paciente"))
?><div id="searchStatus" style="width:100px;  visibility:hidden" class=" progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
	<div id="pacienteSearchResult" >
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('nextel'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		
		<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['celular']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nextel']); ?>&nbsp;</td>
		<td class="actions ">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    Operaciones <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $paciente['Paciente']['id']), array('class'=>'')); ?></li>
			<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $paciente['Paciente']['id']), array('class'=>'')); ?></li>
			<li><?php echo $this->Html->link(__('Nuevo Tratamiento'), array('controller'=>'tratamientos', 'action' => 'add', $paciente['Paciente']['id']), array('class'=>'')); ?></li>
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
</div><!-- End paciente search result -->
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'agregar'), array('class'=>'btn btn-default')); ?></li>
		
	</ul>
</div>
