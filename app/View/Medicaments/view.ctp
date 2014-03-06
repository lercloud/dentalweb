<div class="medicaments view">
<h2><?php  echo __('Medicament'); ?></h2>
	<table class="table" >
		<tr><td><?php echo __('Id'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['id']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Name'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['name']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Presentation'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['presentation']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Size'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['size']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Serving'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['serving']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('ActiveElement'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['activeElement']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Instructions'); ?></td>
		<td>
			<?php echo h($medicament['Medicament']['intructions']); ?>
			&nbsp;
		</td></tr>
		
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medicament'), array('action' => 'edit', $medicament['Medicament']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medicament'), array('action' => 'delete', $medicament['Medicament']['id']), null, __('Are you sure you want to delete # %s?', $medicament['Medicament']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicaments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicament'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Prescriptions'), array('controller' => 'prescriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prescription'), array('controller' => 'prescriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>

