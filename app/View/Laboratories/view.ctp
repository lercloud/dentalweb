<div class="laboratories view">
<h2><?php  echo __('Laboratory'); ?></h2>
	<table class="table" >
		<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($laboratory['Laboratory']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($laboratory['Laboratory']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Address'); ?></td>
		<td>
			<?php echo h($laboratory['Laboratory']['address']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Phone'); ?></td>
		<td>
			<?php echo h($laboratory['Laboratory']['phone']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Email'); ?></td>
		<td>
			<?php echo h($laboratory['Laboratory']['email']); ?>
			&nbsp;
		</td></tr>
	</table>


	<div class="related">
	<h3><?php echo __('Ordenes Relacionadas'); ?></h3>
	<?php if (!empty($laboratory['Laborder'])): ?>
	<table class="table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Paciente'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('DateSend'); ?></th>
		<th><?php echo __('DateReceived'); ?></th>

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($laboratory['Laborder'] as $laborder): ?>
		<tr>
			<td><?php echo $laborder['Paciente']["fullName"]; ?></td>
			<td><?php echo $laborder['description']; ?></td>
			<td><?php echo $laborder['cost']; ?></td>
			<td><?php echo $laborder['dateSend']; ?></td>
			<td><?php echo $laborder['dateReceived']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'laborders', 'action' => 'view', $laborder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'laborders', 'action' => 'edit', $laborder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'laborders', 'action' => 'delete', $laborder['id']), null, __('Are you sure you want to delete # %s?', $laborder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>


</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
		<li><?php echo $this->Html->link(__('Ver Laboratorios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Ordenes'), array('controller' => 'laborders', 'action' => 'index')); ?> </li>
	</ul>
</div>

