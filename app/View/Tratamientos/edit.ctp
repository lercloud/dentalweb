<div class="tratamientos form">
<?php echo $this->Form->create('Tratamiento'); ?>
	<fieldset>
		<legend><?php echo __('Tratamiento'); ?></legend>



	<?php

		echo '<div style="clear:both;" >';
		echo 'Paciente: <br>';
		echo $paciente['Paciente']['nombre']." ".$paciente['Paciente']['apellido_paterno']." ".$paciente['Paciente']['apellido_materno'];
		echo '</div>';

		




		echo $this->Form->input('doctor_id', array(
												"div"=>array("class"=>"col-md-7"),
												'class'=>"form-control",
												'placeholder'=>"Doctor"));
		
		if($this->Session->read("Auth.User.group_id")>=3){
			?>
			<div class="col-md-5">

				<?php echo $this->Form->input('User.password', array(
												"div"=>array("class"=>"col-md-12"),
												'class'=>"form-control",
												"label"=>"Introduce password de administrador",
												"required"=>true,
												
												'placeholder'=>"Password"));

												?>

			</div>


			<?php
		}

		echo $this->Form->input('id');

		echo $this->Form->input('categoria',array("options"=>array("brakets"=>"Ortodoncia", "otros"=>"Odontologia Integral"), 'class'=>"form-control",
												"style"=>"clear:both;", "div"=>"col-md-7"));

		

		echo '<div style="clear:both;" ></div>';
		echo $this->Form->label('fechaTransaccion', 'Fecha Transaccion', array("style"=>"clear:left;", "class"=>"col-md-7"));
		echo $this->Form->date('fechaTransaccion',array(
												
												'class'=>"col-md-4",
												"style"=>"clear:left;",
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
