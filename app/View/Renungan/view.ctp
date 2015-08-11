<?php
$this->Html->addCrumb('Renungan', $this->html->url(array('controller'=>'renungan', 'action'=>'index')));
$this->Html->addCrumb($renungan['Renungan']['judul']);
?>
<div class="renungans view">
	<div class="newsHeader">
		<h3 class="newsTitle"><?php echo $renungan['Renungan']['judul']; ?></h3>
		<h5 class="newsDate"><?php echo $this->MyText->localDate($renungan['Renungan']['tgl_buat']) ?></h5>
		<h5 class="newsAuthor">oleh: <?php echo $renungan['User']['nama']; ?></h5>		
	</div>
	<div class="newsContent">
		<p><?php echo $renungan['Renungan']['renungan'] ?></p>	
	</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Renungan'), array('action' => 'edit', $renungan['Renungan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Renungan'), array('action' => 'delete', $renungan['Renungan']['id']), array(), __('Are you sure you want to delete # %s?', $renungan['Renungan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Renungans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renungan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
 -->