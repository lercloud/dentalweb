<div class="pacientes index">
	<h2><?php echo __('Corte Dia'); ?></h2>

<?php
echo $this->Form->create("Tratamiento", array("url"=>$this->Html->url(array("controller"=>"tratamientos", "action"=>"cortedia"),true)));

echo $this->Form->date("date");
echo $this->Form->end(array("class"=>"btn btn-default","label"=>"Consultar Fecha"));


?>


<h1>Abonos</h1>
<table class="table table-striped">
<tr> <th>Fecha</th><th>Paciente</th><th>Categoria - Descripcion</th><th>Metodo Pago</th><th>Abonado</th> <tr>
<?php
$total = 0;
foreach($abonos as $abono ){
?>

<tr>
<td><?php echo $abono["Abono"]["fechaTransaccion"]; ?></td>
<td><?php echo $abono["Tratamiento"]["Paciente"]["nombre"]." ".$abono["Tratamiento"]["Paciente"]["apellido_paterno"]." ".$abono["Tratamiento"]["Paciente"]["apellido_materno"]; ?></td>
<td><?php echo ucfirst($abono["Tratamiento"]["categoria"])." ".$abono["Tratamiento"]["descripcion"]; ?></td>
<td><?php echo $abono["Abono"]["metodoPago"]; ?></td>
<td><?php echo $abono["Abono"]["cantidad"]; ?></td>
</tr>

<?php
$total += $abono["Abono"]["cantidad"];
}
?>
</table>

<div class="abonosTotales success" >Total Abonos del dia: $ <?php echo $total; ?> </div>

<button class="hidden-print" onclick="myFunction()">Imprimir Reporte</button>

<script>
function myFunction()
{
window.print();
}
</script>



</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Tratamientos por Pagar'), array('action' => 'index'), array('class'=>'btn btn-default')); ?></li>
		<li><?php echo $this->Html->link(__('Corte del dia'), array('action' => 'cortedia'), array('class'=>'btn btn-default')); ?></li>
		
		
	</ul>
</div>
