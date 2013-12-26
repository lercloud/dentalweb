<div class="pacientes index">
	<h2><?php echo __('Pacientes -- Tratamientos'); ?></h2>
	
<?php 
echo $this->Form->input("buscarPacienteTratamiento",array(
												"div"=>array("class"=>"col-md-6","style"=>"margin-bottom:5px;"),
												'class'=>"form-control",
												'placeholder'=>"Paciente"))
?><div id="searchStatus" style="width:100px;  visibility:hidden" class=" progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
	<div id="tratamientoSearchResult" >
	<table cellpadding="0" cellspacing="0" class="table table-hover">
	<tr>
			
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th>Saldo</th>

	</tr>
	<?php $contador = 0; foreach ($pacientes as $paciente): ?>
	<tr data-toggle="modal" data-target="#myModal<?php echo $contador; ?>" style="cursor:pointer;" >
		
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido_materno']); ?>&nbsp;</td>
		<td>$ <?php 
		//Saldo

		$saldo_global = 0;

		foreach($paciente['Tratamiento'] as $tratamiento){
			if ($tratamiento['liquidado']!=1) {
				$saldo_global += $tratamiento['costoTratamiento'];
				foreach ($tratamiento['Abono'] as $abono) {
					
					$saldo_global -= $abono['cantidad'];

				}


			}
		}

		echo $saldo_global;

		 ?>&nbsp;</td>
		
	</tr>
<?php

$contador++;
 endforeach; ?>
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

<?php 
$contador=0;
foreach ($pacientes as $paciente){
?>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $contador; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:960px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $paciente['Paciente']['nombre']." ".$paciente['Paciente']['apellido_paterno']." ".$paciente['Paciente']['apellido_materno'] ; ?></h4>
      </div>
      <div class="modal-body">


        <h3><?php  echo __('Lista de Tratamientos'); ?></h3>
<div style="display:inline-block" >


<table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
	<tr>
			<th>Categoria</th>
			<th>Descripcion</th>
			<th>Fecha</th>
			<th>Costo</th>
			<th>Mensualidad</th>
			<th>Abonado</th>
			<th>Saldo</th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($paciente['Tratamiento'] as $tratamiento):

	if($tratamiento['liquidado']!=1){
	 ?>
	<tr>
		<td><?php echo h($tratamiento['categoria']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['fechaTransaccion']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['costoTratamiento']); ?>&nbsp;</td>
		<td><?php echo h($tratamiento['mensualidad']); ?>&nbsp;</td>

		<td><?php $abonado =0.0; foreach($tratamiento['Abono'] as $abono){
			$abonado += $abono['cantidad'];

		} echo $abonado; ?></td>

		<td>$ <?php echo ($tratamiento['costoTratamiento']-$abonado); ?>&nbsp;</td>

		
		

		<td class="actions">

			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', 'controller'=>"tratamientos", $tratamiento['id'])); ?>
			<?php echo $this->Html->link(__('Abonar'), array('action' => 'add', 'controller'=>"abonos", $tratamiento['id'])); ?>

		</td>
	</tr>
<?php } //End if liquidado
 endforeach; ?>
	</table>
      </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<?php
	$contador++;
}

?>

</div><!-- End paciente search result -->
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tratamientos por Pagar'), array('action' => 'index'), array('class'=>'btn btn-default')); ?></li>
		
		
	</ul>
</div>
