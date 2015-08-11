<div class="jadwals view">
<h2><?php echo __('Jadwal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipe'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['tipe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hari'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['hari']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['jam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bahasa'); ?></dt>
		<dd>
			<?php echo h($jadwal['Jadwal']['bahasa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jadwal'), array('action' => 'edit', $jadwal['Jadwal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jadwal'), array('action' => 'delete', $jadwal['Jadwal']['id']), array(), __('Are you sure you want to delete # %s?', $jadwal['Jadwal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jadwals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jadwal'), array('action' => 'add')); ?> </li>
	</ul>
</div>
