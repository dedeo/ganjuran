<div class="jadwals index">
	<h2><?php echo __('Jadwals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama'); ?></th>
			<th><?php echo $this->Paginator->sort('tipe'); ?></th>
			<th><?php echo $this->Paginator->sort('hari'); ?></th>
			<th><?php echo $this->Paginator->sort('jam'); ?></th>
			<th><?php echo $this->Paginator->sort('bahasa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jadwals as $jadwal): ?>
	<tr>
		<td><?php echo h($jadwal['Jadwal']['id']); ?>&nbsp;</td>
		<td><?php echo h($jadwal['Jadwal']['nama']); ?>&nbsp;</td>
		<td><?php echo h($jadwal['Jadwal']['tipe']); ?>&nbsp;</td>
		<td><?php echo h($jadwal['Jadwal']['hari']); ?>&nbsp;</td>
		<td><?php echo h($jadwal['Jadwal']['jam']); ?>&nbsp;</td>
		<td><?php echo h($jadwal['Jadwal']['bahasa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jadwal['Jadwal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jadwal['Jadwal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jadwal['Jadwal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jadwal['Jadwal']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Jadwal'), array('action' => 'add')); ?></li>
	</ul>
</div>
