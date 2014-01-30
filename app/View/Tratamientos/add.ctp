<div class="tratamientos form">
<?php echo $this->Form->create('Tratamiento'); ?>
	<fieldset>
		<legend><?php echo __('Form Tratamiento'); ?></legend>



	<?php

		echo '<div style="clear:both;" >';
		echo 'Paciente: <br>';
		echo $paciente['Paciente']['nombre']." ".$paciente['Paciente']['apellido_paterno']." ".$paciente['Paciente']['apellido_materno'];
		echo '</div>';



		echo $this->Form->input('doctor_id', array(
												"div"=>array("class"=>"col-md-7"),
												'class'=>"form-control",
												
												'placeholder'=>"Doctor"));
		
		echo $this->Form->input('id');

		echo $this->Form->input('categoria',array("options"=>array("brakets"=>"Ortodoncia", "otros"=>"Odontologia Integral"), 'class'=>"form-control",
												"style"=>"clear:both;", "div"=>"col-md-7"));

		

		echo '<div style="clear:both;" ></div>';
		echo $this->Form->label('fechaTransaccion', 'Fecha Transaccion', array("style"=>"clear:left;", "class"=>"col-md-7"));
		echo $this->Form->date('fechaTransaccion',array(
												
												'class'=>"col-md-4",
												"style"=>"clear:left;",
												'required'=>true,
												'placeholder'=>"Fecha Transaccion"));
		echo '<div style="clear:left;" ></div>';

		echo $this->Form->input('costoTratamiento', array(
												"div"=>array("class"=>"col-md-7"),
												'class'=>"form-control",
												'placeholder'=>"Costo"));
		echo $this->Form->input('mensualidad', array(
												"div"=>array("class"=>"col-md-7"),
												'class'=>"form-control",
												'placeholder'=>"Mensualidad"));
		
		echo $this->Form->input('descripcion', array(
												"div"=>array("class"=>"col-md-7"),
												'class'=>"form-control",
												'placeholder'=>"Notas"));
		
	?>
	</fieldset>
<?php
 $options = array(
    'label' => 'Agregar Tratamiento',

        'class' => 'btn btn-success',
        'style' => "margin-top:10px;"

);
echo $this->Form->end($options);
 ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Regresar a Pacientes'), array('action' => 'index', 'controller'=>'pacientes'), array('class'=>'btn btn-default')); ?></li>

	</ul>
</div>
