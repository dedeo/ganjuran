<div class="renungans view">
<h2><?php echo __('Renungan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Judul'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['judul']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Renungan'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['renungan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Buat'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['tgl_buat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Penulis'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['penulis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($renungan['Renungan']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Renungan'), array('action' => 'edit', $renungan['Renungan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Renungan'), array('action' => 'delete', $renungan['Renungan']['id']), array(), __('Are you sure you want to delete # %s?', $renungan['Renungan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Renungans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renungan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
