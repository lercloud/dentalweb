<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Form Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		//echo $this->Form->date('fechaAlta');

		echo ' <div id="datetimepicker2" class="input-append">
                                    <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text" placeholder="Fecha de Registro"></input>
                                    <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                                        </i>
                                    </span>
                                </div>';



		echo $this->Form->input('edad');
		echo $this->Form->radio('sexo', array("values"=>array("1"=>"Male", "2"=>"Female")));
		echo $this->Form->input('ocupacion', array("dateFormat"=>""));
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('nextel');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Buscar Pacientes'), array('action' => 'index')); ?></li>
		
	</ul>
</div>

<script type="text/javascript">
            $(function() {
                $('#datetimepicker2').datetimepicker({
                    language: 'en',
                    pick12HourFormat: true
                });
            });
        </script>
