<div class="laborders form">
<?php echo $this->Form->create('Laborder'); ?>
	<fieldset>
		<legend><?php echo __('Form Laborder'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('laboratory_id',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Laboratory")));
		echo $this->Form->input('paciente_id',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Paciente")));
		echo $this->Form->input('description',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Description")));
		echo $this->Form->input('cost',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Cost")));

		echo $this->Form->label('dateSend', 'Fecha Envio', array("style"=>"clear:left;", "class"=>"col-md-7"));
		echo $this->Form->date('dateSend',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control col-md-7",
						"label"=>"Send",
						'placeholder'=>__("Send")));


		echo $this->Form->label('dateReceived', 'Fecha Recibido', array("style"=>"clear:left;", "class"=>"col-md-7"));
		echo $this->Form->date('dateReceived',array(
						"div"=>array("class"=>""),
						'class'=>"form-control",
						'placeholder'=>__("Received")));
	?>
	</fieldset>
<?php
 $options = array(
    'label' => 'Editar Orden',

        'class' => 'col-md-7 btn btn-success',
        'style' => "margin-top:10px;"

);
echo $this->Form->end($options);
 ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laborder.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laborder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laborders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laboratory'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderpayments'), array('controller' => 'orderpayments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderpayment'), array('controller' => 'orderpayments', 'action' => 'add')); ?> </li>
	</ul>
</div>
