<div class="branches view">
<h2><?php  echo __('Branch'); ?></h2>
	<table class="table" >
		<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($branch['Branch']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($branch['Branch']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($branch['Branch']['address']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($branch['Branch']['created']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Modified'); ?></td>
		<td>
			<?php echo h($branch['Branch']['modified']); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branch'), array('action' => 'edit', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branch'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
	
	