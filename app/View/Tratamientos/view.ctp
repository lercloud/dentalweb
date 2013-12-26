<div class="tratamientos view">
<h2><?php  echo __('Tratamiento'); ?></h2>
	<table class="table table-bordered table-responsive table-striped" >
				<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($tratamiento['Tratamiento']['id']); ?>
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
		<tr class="alert alert-danger success" ><td><?php echo __('Saldo a Pagar:'); ?></td>
		<td>$ 
			<?php 
			$abonado = 0;
			foreach ($tratamiento['Abono'] as $abono){

				$abonado += $abono['cantidad'];

			}

			echo ($tratamiento['Tratamiento']['costoTratamiento']-$abonado);

			 ?>
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

<div class="related">
	<h3><?php echo __('Abonos Realizados'); ?></h3>
	<?php if (!empty($tratamiento['Abono'])): ?>
	<table class="table table-responsive table-hover" cellpadding = "0" cellspacing = "0">
	</tr>
<tr>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('FechaTransaccion'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Metodo Pago'); ?></th>

	</tr>
	<?php
		$i = 0;
		foreach ($tratamiento['Abono'] as $abono): ?>
		</tr>
		<tr>
			<td><?php echo $abono['cantidad']; ?></td>
			<td><?php echo $abono['fechaTransaccion']; ?></td>
			<td><?php echo $abono['descripcion']; ?></td>
			<td><?php echo $abono['metodoPago']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>


</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Abonar'), array('controller' => 'abonos', 'action' => 'add', $tratamiento['Tratamiento']['id'])); ?> </li>
	</ul>
</div>

