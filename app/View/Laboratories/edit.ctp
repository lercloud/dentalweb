<div class="laboratories form">
<?php echo $this->Form->create('Laboratory'); ?>
	<fieldset>
		<legend><?php echo __('Form Laboratory'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Name")));
		echo $this->Form->input('address',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Address")));
		echo $this->Form->input('phone',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Phone")));
		echo $this->Form->input('email',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Email")));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laboratory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laboratory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laboratories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Laborders'), array('controller' => 'laborders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laborder'), array('controller' => 'laborders', 'action' => 'add')); ?> </li>
	</ul>
</div>
