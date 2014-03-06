<div class="prescriptions view">
<h2><?php  echo __('Prescription'); ?></h2>
	<table class="table" >
		<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($prescription['Prescription']['id']); ?>
			&nbsp;
		</td></tr>
			<tr><td><?php echo __('Pacient'); ?></td>
			<td>
				<?php echo h($prescription['Paciente']['fullName']); ?>
				&nbsp;
			</td>
		</tr>
		<tr><td><?php echo __('Created'); ?></td>
		<td>
			<?php echo h($prescription['Prescription']['created']); ?>
			&nbsp;
		</td></tr>

	</table>

	<div class="related">
	<h3><?php echo __('Related Medicaments'); ?></h3>
	<?php if (!empty($prescription['Medicament'])): ?>
	<table class="table" cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Presentation'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Serving'); ?></th>
		<th><?php echo __('ActiveElement'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($prescription['Medicament'] as $medicament): ?>
		<tr>
			<td><?php echo $medicament['name']; ?></td>
			<td><?php echo $medicament['presentation']; ?></td>
			<td><?php echo $medicament['size']; ?></td>
			<td><?php echo $medicament['serving']; ?></td>
			<td><?php echo $medicament['activeElement']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'medicaments', 'action' => 'view', $medicament['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'medicaments', 'action' => 'edit', $medicament['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'medicaments', 'action' => 'delete', $medicament['id']), null, __('Are you sure you want to delete # %s?', $medicament['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Edit Prescription'), array('action' => 'edit', $prescription['Prescription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prescription'), array('action' => 'delete', $prescription['Prescription']['id']), null, __('Are you sure you want to delete # %s?', $prescription['Prescription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Prescriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prescription'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicaments'), array('controller' => 'medicaments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicament'), array('controller' => 'medicaments', 'action' => 'add')); ?> </li>
	</ul>
</div>

