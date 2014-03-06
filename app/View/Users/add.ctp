<div class="users form">
<?php echo $this->Form->create('User', array("class"=>"form-horizontal","role"=>"form")); ?>
	<fieldset>
		<legend><?php echo __('Form User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("User Role")));
		echo $this->Form->input('username',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Username")));
		echo $this->Form->input('password',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Password")));
		echo $this->Form->input('nombre',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Name")));
		echo $this->Form->input('apellidoPaterno',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("LastName")));
		echo $this->Form->input('apellidoMaterno',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Lastname2")));
		echo $this->Form->input('branch_id',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Branch")));
		echo $this->Form->input('correo',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Email")));
		echo $this->Form->input('telefono',array(
						"div"=>array("class"=>"col-md-7"),
						'class'=>"form-control",
						'placeholder'=>__("Phone")));

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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
