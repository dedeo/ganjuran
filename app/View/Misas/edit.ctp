<div class="misas form">
<?php echo $this->Form->create('Misa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Misa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipe');
		echo $this->Form->input('hari');
		echo $this->Form->input('jam');
		echo $this->Form->input('bahasa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Misa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Misa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Misas'), array('action' => 'index')); ?></li>
	</ul>
</div>
