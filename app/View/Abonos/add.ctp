<?php

$abonado = 0;
				foreach ($tratamiento["Abono"] as $abono) {
					$abonado += $abono["cantidad"];
				}

?>
<div class="abonos form view">
<?php echo $this->Form->create('Abono'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Abono'); ?></legend>
		<div class="col-md-12 alert alert-warning" >Pendiente por pagar: $ <?php echo ($tratamiento['Tratamiento']['costoTratamiento']-$abonado); ?></div>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('tratamiento_id',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control", "value"=>$tratamiento['Tratamiento']['id']));
		echo $this->Form->input('cantidad',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control",
												'required'=>true
												));


		echo '<div class="col-md-6" >';
		echo $this->Form->label('fechaTransaccion', 'Fecha Trasaccion', array("style"=>"clear:left; float:left;",'attributes'=>array("required")));
		
		echo $this->Form->date('fechaTransaccion',array(
												
												'class'=>"col-md-4",
												"style"=>"clear:both;",
												'required'=>true,
												'required'=>true,
												'placeholder'=>"Fecha Alta"));
		echo '</div>';


		echo $this->Form->input('descripcion',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control"));

		echo $this->Form->input('metodoPago',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control", 'options'=>array("Efectivo"=>"Efectivo", "Cheque"=>"Cheque", "Tarjeta"=>"Tarjeta", "Dollar"=>"Dollar")));
	?>
	</fieldset>
<?php $options = array(
    'label' => 'Agregar Abono',

        'class' => 'btn btn-success',
        'style' => "margin-top:10px;"

);
echo $this->Form->end($options);?>

<h2><?php  echo __('Tratamiento'); ?></h2>

	<table class="table table-bordered table-responsive table-striped" >
				<tr><td>Pendiente por liquidar:</td>
		<td>
			$ <?php 

				echo ($tratamiento['Tratamiento']['costoTratamiento']-$abonado);

			 ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('Descripcion'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['descripcion']); ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('FechaTransaccion'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['fechaTransaccion']); ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('CostoTratamiento'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['costoTratamiento']); ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('Mensualidad'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['mensualidad']); ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('Doctor'); ?></td>
		<td>
			<?php echo $tratamiento['Doctor']['nombre']; ?>
			&nbsp;
		</td>
		</tr>
		<tr><td><?php echo __('Categoria'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['categoria']); ?>
			&nbsp;
		</td>
		</tr>
		
	</table>


</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		
	</ul>
</div>
