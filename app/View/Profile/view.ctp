<div class="profiles view">
<h2><?php echo __('Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['profile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Buat'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['tgl_buat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Ubah'); ?></dt>
		<dd>
			<?php echo h($profile['Profile']['tgl_ubah']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), array(), __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add')); ?> </li>
	</ul>
</div>
