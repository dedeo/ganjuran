<div class="beritas index">
	<h2><?php echo __('Beritas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('judul'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('berita'); ?></th> -->
			<th><?php echo $this->Paginator->sort('penulis_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tgl_buat'); ?></th>
			<th><?php echo $this->Paginator->sort('tgl_ubah'); ?></th>
			<th><?php echo $this->Paginator->sort('page_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($beritas as $berita): ?>
	<tr>
		<td><?php echo h($berita['Berita']['id']); ?>&nbsp;</td>
		<td><?php echo h($berita['Berita']['judul']); ?>&nbsp;</td>
		<!-- <td><?php echo h($berita['Berita']['berita']); ?>&nbsp;</td> -->
		<td><?php echo h($berita['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($berita['Berita']['tgl_buat']); ?>&nbsp;</td>
		<td><?php echo h($berita['Berita']['tgl_ubah']); ?>&nbsp;</td>
		<td><?php echo h($berita['Berita']['page_id']); ?>&nbsp;</td>
		<td><?php echo h($berita['Berita']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $berita['Berita']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $berita['Berita']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $berita['Berita']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $berita['Berita']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Berita'), array('action' => 'add')); ?></li>
	</ul>
</div>
