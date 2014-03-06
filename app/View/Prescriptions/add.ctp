<div class="prescriptions form">
<?php echo $this->Form->create('Prescription'); ?>
	<fieldset>
		<legend><?php echo __('Add Prescription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('paciente_id',array(
						"options"=>$pacientes,
						"label"=>array("style"=>"float:left; clear:both;"),
						"div"=>array("class"=>"col-md-7"),
						'class'=>"col-md-7 select2",
						'placeholder'=>__("Paciente")));
		echo $this->Form->input('Medicament', array(
						"div"=>array("class"=>"col-md-7"),
						"label"=>array("style"=>"float:left; clear:both;"),
						'class'=>"col-md-7 select2",
						'placeholder'=>__("Select Medicament")));
	?>
	</fieldset>
<?php 
$options = array(
    'label' => 'Registrar',
        'class' => 'btn btn-success col-md-6',
);
echo $this->Form->end($options); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prescription.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Prescription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Prescriptions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Medicaments'), array('controller' => 'medicaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicament'), array('controller' => 'medicaments', 'action' => 'add')); ?> </li>
	</ul>
</div>

