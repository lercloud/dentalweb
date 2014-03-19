<div class="laborders view">
<h2><?php  echo __('Laborder'); ?></h2>
	<table class="table" >

		<tr><td><?php echo __('Paciente Id'); ?></td>
		<td>
			<?php echo h($laborder['Paciente']['fullName']); ?>
			&nbsp;
		</td></tr>
				<tr><td><?php echo __('Laboratory'); ?></td>
		<td>
			<?php echo $this->Html->link($laborder['Laboratory']['name'], array('controller' => 'laboratories', 'action' => 'view', $laborder['Laboratory']['id'])); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Description'); ?></td>
		<td>
			<?php echo h($laborder['Laborder']['description']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('Cost'); ?></td>
		<td>
			<?php echo h($laborder['Laborder']['cost']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('DateSend'); ?></td>
		<td>
			<?php echo h($laborder['Laborder']['dateSend']); ?>
			&nbsp;
		</td></tr>
		<tr><td><?php echo __('DateReceived'); ?></td>
		<td>
			<?php echo h($laborder['Laborder']['dateReceived']); ?>
			&nbsp;
		</td></tr>

	</table>

	<div class="related">
	<h3><?php echo __('Pagos Realizados'); ?></h3>
	<?php if (!empty($laborder['Orderpayment'])): ?>
	<table class="table" cellpadding = "0" cellspacing = "0">
	<tr>

		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('PaymentDate'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($laborder['Orderpayment'] as $orderpayment): ?>
		<tr>

			<td><?php echo $orderpayment['amount']; ?></td>
			<td><?php echo $orderpayment['description']; ?></td>
			<td><?php echo $orderpayment['paymentDate']; ?></td>
			<td class="actions">

				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderpayments', 'action' => 'edit', $orderpayment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderpayments', 'action' => 'delete', $orderpayment['id']), null, __('Are you sure you want to delete # %s?', $orderpayment['id'])); ?>
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


		<li><?php echo $this->Html->link(__('Ver Ordenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Orden'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Laboratorios'), array('controller' => 'laboratories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Laboratorio'), array('controller' => 'laboratories', 'action' => 'add')); ?> </li>

	</ul>
</div>

