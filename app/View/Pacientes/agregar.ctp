<div class="pacientes form">
<?php echo $this->Form->create('Paciente', array("role"=>"form")); ?>

<legend><?php echo __('Agregar Paciente'); ?></legend>

	<ul class="nav nav-tabs">
  <li><a href="#DatosGenerales" data-toggle="tab">Datos Generales</a></li>
  <li><a href="#HistoriaMedica" data-toggle="tab">Historia Medica</a></li>
  <li><a href="#AntecedentesPatologicos" data-toggle="tab">Atecedentes Patologicos</a></li>
</ul>

<div class="tab-content">

	<div class="tab-pane active" id="DatosGenerales" >
	<fieldset>
		<legend><?php echo __('Datos Generales'); ?></legend>
	<?php

		echo $this->Form->label('User.fechaAlta', 'Fecha Alta', array("style"=>"clear:left;"));
		echo '<div style="clear:left;" ></div>';
		echo $this->Form->date('fechaAlta',array(
												
												'class'=>"col-md-4",
												"style"=>"clear:left;",
												'placeholder'=>"Fecha Alta"));
		echo '<div style="clear:left;" ></div>';

		echo $this->Form->input('sexo', array(	"type"=>"radio",
												"div"=>array("class"=>"col-md-4 form-group"),
												
												'placeholder'=>"Fecha Alta",
												'options'=>array('M'=>'Masculino', 'F'=>"Femenino")));

		echo '<div class="col-md-6">';
		echo $this->Form->label('User.fechaNacimiento', 'Fecha Nacimiento');
		echo '<div style="clear:left;" ></div>';
		echo $this->Form->date('fechaNacimiento',array(
												
												'class'=>"col-md-6",
												'placeholder'=>"Fecha Alta"));
		echo '</div>';

		echo $this->Form->input('id');
		echo $this->Form->input('nombre', array(
												"div"=>array("class"=>"col-md-4", "style"=>"clear:left;"),
												'class'=>"form-control",
												'placeholder'=>"Nombre(s)"));
		echo $this->Form->input('apellido_paterno', array(
												"div"=>array("class"=>"col-md-4"),
												'class'=>"form-control",
												'placeholder'=>"Apellido Paterno"));
		echo $this->Form->input('apellido_materno',array(
												"div"=>array("class"=>"col-md-4"),
												'class'=>"form-control",
												'placeholder'=>"Apellido Materno"));
		

		echo $this->Form->input('edad',array(
												"div"=>array("class"=>"col-md-2"),
												'class'=>"form-control",
												'placeholder'=>"Edad"));
		//echo $this->Form->radio('sexo', array("values"=>array("1"=>"Male", "2"=>"Female")));
		echo $this->Form->input('ocupacion',array(
												"div"=>array("class"=>"col-md-4"),
												'class'=>"form-control",
												'placeholder'=>"Ocupacion"));
		echo $this->Form->input('direccion',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control",
												'placeholder'=>"Direccion"));
		echo $this->Form->input('telefono',array(
												"div"=>array("class"=>"col-md-3"),
												'class'=>"form-control",
												'placeholder'=>"Telefono"));
		echo $this->Form->input('celular',array(
												"div"=>array("class"=>"col-md-3"),
												'class'=>"form-control",
												'placeholder'=>"Celular"));
		echo $this->Form->input('nextel',array(
												"div"=>array("class"=>"col-md-3"),
												'class'=>"form-control",
												'placeholder'=>"Nextel"));
		echo $this->Form->input('email',array(
												"div"=>array("class"=>"col-md-3"),
												'class'=>"form-control",
												'placeholder'=>"Email"));

		echo $this->Form->input('Anexo.menorEdad',array(
												"div"=>array("class"=>"col-md-3"),
												'class'=>"",
												'placeholder'=>"Menor Edad"));

		echo $this->Form->input('Anexo.tutorResponsable',array(
												"div"=>array("class"=>"col-md-6"),
												'class'=>"form-control",
												'placeholder'=>"Menor Edad"));




	?>
	</fieldset>
</div>

<div class="tab-pane" id="HistoriaMedica" >
<fieldset>
	ho
</fieldset>
</div>

<div class="tab-pane" id="AntecedentesPatologicos" >
<fieldset>
	<?php echo $this->Form->input('Patologia.Patologia', array("multiple"=>"checkbox", "hiddenField"=>true, "div"=>array("class"=>"col-md-12", "style"=>"margin-top:5px;"), 'class'=>"col-md-3", "label"=>false)); ?>
</fieldset>
</div>

</div>

<?php 

$options = array(
    'label' => 'Agregar Paciente',

        'class' => 'btn btn-success'

);
echo $this->Form->end($options);

?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Buscar Pacientes'), array('action' => 'index'), array('class'=>'btn btn-default')); ?></li>
		
	</ul>
</div>


