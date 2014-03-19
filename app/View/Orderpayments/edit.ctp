<div class="orderpayments form">
<?php echo $this->Form->create('Orderpayment'); ?>
	<fieldset>
		<legend><?php echo __('Form Orderpayment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('laborder_id', array("value"=>$labid));
		echo $this->Form->input('amount',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'label'=>"Cantidad",
						'placeholder'=>__("Cantidad")));
		echo $this->Form->input('description',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Description")));

		echo $this->Form->label('paymentDate', 'Fecha Transaccion', array("style"=>"clear:left;", "class"=>"col-md-7"));
		echo $this->Form->date('paymentDate',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Description")))
	?>
	</fieldset>
<?php
 $options = array(
    'label' => 'Editar Abono',

        'class' => 'col-md-7 btn btn-success',
        'style' => "margin-top:10px;"

);
echo $this->Form->end($options);
 ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Orderpayment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Orderpayment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Orderpayments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Laborders'), array('controller' => 'laborders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laborder'), array('controller' => 'laborders', 'action' => 'add')); ?> </li>
	</ul>
</div>
