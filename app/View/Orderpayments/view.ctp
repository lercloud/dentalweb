<div class="orderpayments view">
<h2><?php  echo __('Orderpayment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laborder'); ?></dt>
		<dd>
			<?php echo $this->Html->link($orderpayment['Laborder']['id'], array('controller' => 'laborders', 'action' => 'view', $orderpayment['Laborder']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PaymentDate'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['paymentDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($orderpayment['Orderpayment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orderpayment'), array('action' => 'edit', $orderpayment['Orderpayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orderpayment'), array('action' => 'delete', $orderpayment['Orderpayment']['id']), null, __('Are you sure you want to delete # %s?', $orderpayment['Orderpayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderpayments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderpayment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laborders'), array('controller' => 'laborders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laborder'), array('controller' => 'laborders', 'action' => 'add')); ?> </li>
	</ul>
</div>
