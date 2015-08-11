<div class="misas view">
<h2><?php echo __('Misa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($misa['Misa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipe'); ?></dt>
		<dd>
			<?php echo h($misa['Misa']['tipe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hari'); ?></dt>
		<dd>
			<?php echo h($misa['Misa']['hari']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jam'); ?></dt>
		<dd>
			<?php echo h($misa['Misa']['jam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bahasa'); ?></dt>
		<dd>
			<?php echo h($misa['Misa']['bahasa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Misa'), array('action' => 'edit', $misa['Misa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Misa'), array('action' => 'delete', $misa['Misa']['id']), array(), __('Are you sure you want to delete # %s?', $misa['Misa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Misas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Misa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
