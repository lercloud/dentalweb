
<div class="appointments index">

	<div id="searchStatus" style="width:100px;  visibility:hidden" class=" progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>

<div style="margin-top:10px; margin-bottom:10px;" class="col-md-12" >
<?php 

echo $this->Form->input("branch_id", array("label"=>__("Branch").": ",
											"class"=>"select2",
											"style"=>"width:200px;",
											"id"=>"searchByBranchIdField",
											"div"=>array("class"=>"cold-md6", "style"=>"display:inline-block;")));
echo $this->Form->button(__("Search By Branch"), array("type"=>"button",
											 	"id"=>"searchByBranch",
											 	"class"=>"btn btn-success",
											 	"style"=>"display:inline-block"));


?>
</div>

<div style="margin-top:10px; margin-bottom:10px;" class="col-md-12" >
<?php 

echo $this->Form->input("doctor_id", array("label"=>__("Doctor").": ",
											"class"=>"select2",
											"style"=>"width:200px;",
											"id"=>"searchByDoctorIdField",
											"div"=>array("class"=>"cold-md6", "style"=>"display:inline-block;")));
echo $this->Form->button(__("Search By Doctor"), array("type"=>"button",
											 	"id"=>"searchByDoctor",
											 	"class"=>"btn btn-success ",
											 	"style"=>"display:inline-block"));


?>
</div>


<div id='calendar'></div>




</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Ver Razones de citas'), array('controller' => 'appointmentTypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Razon de Cita'), array('controller' => 'appointmentTypes', 'action' => 'add')); ?> </li>
	</ul>
</div>



<!-- Modal -->
<div class="modal fade" id="addAppointmentModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo __("Add an appointment"); ?></h4>

        <div id="searchStatusAddAppointment" style="width:100px;  visibility:hidden" class=" progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>

      </div>
      <div class="modal-body">
        <fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
		//echo $this->Form->input('id');
		echo $this->Form->input('paciente_id',array(
						"div"=>array("class"=>"col-md-6"),
						'class'=>"select2",
						"id"=>"addAppoinmentPacienteIdField",
						'placeholder'=>__("Pacient")));

		echo $this->Form->input('doctor_id',array(
						"div"=>array("class"=>"col-md-6"),
						'class'=>"select2",
						"id"=>"addAppoinmentDoctorIdField",
						'placeholder'=>__("Doctor")));

		echo $this->Form->input('branch_id',array(
						"div"=>array("class"=>"col-md-6"),
						'class'=>"form-control",
						"id"=>"addAppoinmentBranchIdField",
						'placeholder'=>__("Branch")));

		echo $this->Form->input('appointment_types_id',array(
						"div"=>array("class"=>"col-md-6"),
						'class'=>"form-control",
						"label"=>"Razon Cita",
						"id"=>"addAppoinmentAppointmentTypeIdField",
						'placeholder'=>__("Razon Cita")));
		echo '<br>';
		echo '<div class="col-md-12" style="clear:both;" >';
		echo $this->Form->label(__("Date"));
		echo $this->Form->input('date',array(
						"type"=>"date",
						"div"=>array("class"=>"", "style"=>"clear:both;"),
						'class'=>"form-control",
						"label"=>false,
						"style"=>"width:30%; display:inline-block;",
						"id"=>"addAppoinmentDateField",
						'placeholder'=>__("Date")));
		echo '</div>';

		echo '<div class="col-md-12" style="clear:both;" >';
		echo $this->Form->label(__("Begin Time"));
		echo $this->Form->input('time',array(
						"type"=>"time",
						"timeFormat"=>"24",
						'interval' => 15,
						"div"=>array("class"=>"", "style"=>"clear:both;"),
						'class'=>"form-control",
						"label"=>false,
						"style"=>"width:30%; display:inline-block;",
						"id"=>"addAppoinmentBeginTimeField",
						'placeholder'=>__("Begin Time")));
		echo '</div>';

		echo '<div class="col-md-12" style="clear:both;" >';
		echo $this->Form->label(__("End Time"));
		echo $this->Form->input('time',array(
						"type"=>"time",
						"timeFormat"=>"24",
						'interval' => 15,
						"div"=>array("class"=>"", "style"=>"clear:both;"),
						'class'=>"form-control",
						"label"=>false,
						"style"=>"width:30%; display:inline-block;",
						"id"=>"addAppoinmentEndTimeField",
						'placeholder'=>__("End Time")));
		echo '</div>';
		
		echo $this->Form->button(__('Add Appoinment'),array(
						"type"=>"button",
						"id"=>"addAppoinment",
						'class'=>"form-control btn btn-success col-md-7"));


	?>
	</fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="retriveAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo __("Appointment Details"); ?></h4>

        <div id="searchStatusAddAppointment" style="width:100px;  visibility:hidden" class=" progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>

      </div>
      <div class="modal-body">
        <fieldset>
		<legend><?php echo __('Appointment Details'); ?></legend>

		<table class="table" >
			<tr><td><?php echo __("Pacient"); ?></td><td id="retriveAppointmentPacientField" ></td></tr>

			<tr><td><?php echo __("Doctor"); ?></td><td id="retriveAppointmentDoctorField" ></td></tr>

			<tr><td><?php echo __("Type"); ?></td><td id="retriveAppointmentTypeField" ></td></tr>

			<tr><td><?php echo __("Branch"); ?></td><td id="retriveAppointmentBranchField" ></td></tr>

			<tr><td><?php echo __("Date"); ?></td><td id="retriveAppointmentDateField" ></td></tr>

			<tr><td><?php echo __("Begin Time"); ?></td><td id="retriveAppointmentBeginTimeField" ></td></tr>

			<tr><td><?php echo __("End Time"); ?></td><td id="retriveAppointmentEndTimeField" ></td></tr>

		</table>

	
	</fieldset>
      </div>
      <div class="modal-footer">
      	<button style="float:left;" id="deleteAppointment" type="button" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>