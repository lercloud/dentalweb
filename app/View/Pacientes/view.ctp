
<style>

.pacientes .col-md-4{

padding-right: 0px;
padding-left: 0px;
}

</style>

<div class="pacientes view">
<h2><?php  echo __('Paciente'); ?></h2>
	<div style="display:inline-block" >
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Nombre'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['nombre']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Apellido Paterno'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['apellido_paterno']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Apellido Materno'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['apellido_materno']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('FechaAlta'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['fechaAlta']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Edad'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['edad']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Sexo'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['sexo']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Ocupacion'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['ocupacion']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Direccion'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['direccion']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Telefono'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['telefono']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Celular'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['celular']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Nextel'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['nextel']); ?>
			</div>
		</div>
		<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo __('Email'); ?>
		
			</div><div class="panel-body"><?php echo h($paciente['Paciente']['email']); ?>
			</div>
		</div>
	</div>

<h2><?php  echo __('Patologias'); ?></h2>

<ul class="col-md-12" >
<?php 
if(count($paciente["Patologia"])<=0){
	echo "No tiene patologias";
}else
foreach($paciente["Patologia"] as $patologia){ ?>

<li class="col-md-3" ><?php echo $patologia["descripcion"]; ?></li>

<?php } ?>

</ul>

<div style="clear:both"></div>

<h2><?php  echo __('Antecedentes Medicos'); ?></h2>
<div style="display:inline-block" >
<?php

foreach($paciente["HistoriaMedica"] as $historiaMedica)
{
	?>
<div class="campo col-md-4 panel panel-default" ><div class="panel-heading"><h3 class="panel-title"><?php echo $historiaMedica["padecimiento"]; ?>
		
			</div><div class="panel-body"><?php echo h($historiaMedica["tratamientoMedico"]); ?>
			</div>
		</div>


	<?php
}

?>
</div>

<div style="clear:both"></div>

<h2><?php  echo __('Lista de Tratamientos'); ?></h2>
<div style="display:inline-block" >


<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('fechaTransaccion'); ?></th>
			<th><?php echo $this->Paginator->sort('costoTratamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('mensualidad'); ?></th>
			<th>Abonado</th>
			<th><?php echo $this->Paginator->sort('liquidado'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tratamientos as $tratamiento): ?>
	<tr>
		
		<td><?php echo h($tratamiento['Tratamiento']['fechaTransaccion']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['costoTratamiento']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['mensualidad']); ?>&nbsp;</td>

		<td><?php $abonado =0.0; foreach($tratamiento['Abono'] as $abono){
			$abonado += $abono['cantidad'];

		} echo $abonado; ?></td>

		<td><?php if($tratamiento['Tratamiento']['liquidado']) echo 'Liquidado'; else echo 'Adeudo' ?>&nbsp;</td>
		<td><?php echo h($tratamiento['Tratamiento']['categoria']); ?>&nbsp;</td>

		<td class="actions">

			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', 'controller'=>"tratamientos", $tratamiento['Tratamiento']['id'])); ?>
			<?php echo $this->Html->link(__('Abonar'), array('action' => 'add', 'controller'=>"abonos", $tratamiento['Tratamiento']['id'])); ?>

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
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>


</div>

<div style="clear:both"></div>

</div>
<div class="actions">
	<div class="panel-heading"><h3 class="panel-title"><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Paciente'), array('action' => 'edit', $paciente['Paciente']['id']), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), array('class'=>'btn btn-default'), __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Buscar Pacientes'), array('action' => 'index'), array('class'=>'btn btn-default')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Paciente'), array('action' => 'agregar'), array('class'=>'btn btn-default')); ?> </li>
		
	</ul>
</div>
	
</div>
