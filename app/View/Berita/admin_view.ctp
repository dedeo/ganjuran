<div class="beritas view">
<h2><?php echo __('Berita'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Judul'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['judul']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Berita'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['berita']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Penulis Id'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['penulis_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Buat'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['tgl_buat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tgl Ubah'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['tgl_ubah']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page Id'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['page_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($berita['Berita']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Berita'), array('action' => 'edit', $berita['Berita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Berita'), array('action' => 'delete', $berita['Berita']['id']), array(), __('Are you sure you want to delete # %s?', $berita['Berita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beritas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Berita'), array('action' => 'add')); ?> </li>
	</ul>
</div>
