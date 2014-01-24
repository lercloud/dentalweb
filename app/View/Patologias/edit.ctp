<div class="patologias form">
<?php echo $this->Form->create('Patologia'); ?>
	<fieldset>
		<legend><?php echo __('Form Patologium'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Patologia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Patologia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('action' => 'index')); ?></li>
	</ul>
</div>
