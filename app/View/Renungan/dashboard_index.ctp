<div class="renungans index">
	<h2><?php echo __('Renungans'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('judul'); ?></th>
			<th><?php echo $this->Paginator->sort('renungan'); ?></th>
			<th><?php echo $this->Paginator->sort('tgl_buat'); ?></th>
			<th><?php echo $this->Paginator->sort('penulis'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($renungans as $renungan): ?>
	<tr>
		<td><?php echo h($renungan['Renungan']['id']); ?>&nbsp;</td>
		<td><?php echo h($renungan['Renungan']['judul']); ?>&nbsp;</td>
		<td><?php echo h($renungan['Renungan']['renungan']); ?>&nbsp;</td>
		<td><?php echo h($renungan['Renungan']['tgl_buat']); ?>&nbsp;</td>
		<td><?php echo h($renungan['Renungan']['penulis']); ?>&nbsp;</td>
		<td><?php echo h($renungan['Renungan']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $renungan['Renungan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $renungan['Renungan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $renungan['Renungan']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $renungan['Renungan']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Renungan'), array('action' => 'add')); ?></li>
	</ul>
</div>
