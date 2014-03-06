<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<table class="table" >
		<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Group Id'); ?></td>
		<td>
			<?php echo h($user['User']['group_id']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Username'); ?></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td></tr>
		
		
		<tr><td><?php echo __('Nombre'); ?></td>
		<td>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('ApellidoPaterno'); ?></td>
		<td>
			<?php echo h($user['User']['apellidoPaterno']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('ApellidoMaterno'); ?></td>
		<td>
			<?php echo h($user['User']['apellidoMaterno']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Correo'); ?></td>
		<td>
			<?php echo h($user['User']['correo']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Telefono'); ?></td>
		<td>
			<?php echo h($user['User']['telefono']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Branch'); ?></td>
		<td>
			<?php echo $this->Html->link($user['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $user['Branch']['id'])); ?>
			&nbsp;
		</td></tr>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
