<div class="renungans form">
<?php echo $this->Form->create('Renungan'); ?>
	<fieldset>
		<legend><?php echo __('Dashboard Edit Renungan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('judul');
		echo $this->Form->input('renungan');
		echo $this->Form->input('tgl_buat');
		echo $this->Form->input('penulis');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Renungan.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Renungan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Renungans'), array('action' => 'index')); ?></li>
	</ul>
</div>
