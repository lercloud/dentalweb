<div class="medicaments form">
<?php echo $this->Form->create('Medicament'); ?>
	<fieldset>
		<legend><?php echo __('Edit Medicament'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Name")));
		echo $this->Form->input('presentation',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Presentation")));
		echo $this->Form->input('size',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Size")));
		echo $this->Form->input('serving',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Serving")));
		echo $this->Form->input('activeElement',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Active Element")));
		echo $this->Form->input('intructions',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Intructions")));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Medicament.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Medicament.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medicaments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Prescriptions'), array('controller' => 'prescriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prescription'), array('controller' => 'prescriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
