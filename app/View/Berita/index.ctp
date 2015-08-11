<?php

App::uses('String', 'Utility');
$this->Html->addCrumb('Berita', '');

?>
<div class="beritas index">
	<h2><?php echo __('Index Berita'); ?></h2>

<?php

	//debug($beritas);
?>

	<table cellpadding="0" cellspacing="0">
 <?php foreach ($beritas as $berita): ?>
	<tr>
		<h4 class="newsTitle">
		<?php echo $this->Html->link($berita['Berita']['judul'], array('controller'=>'berita', 'action'=>'view', $berita['Berita']['id'])) ?>
		</h4>
	<h5><?php echo $this->MyText->localDate($berita['Berita']['tgl_buat']).', oleh: '.$berita['User']['nama']; ?></h5>
	<?php 
		echo String::truncate(
			$berita['Berita']['berita'],
			500,
			array(
				'ellipsis' => '...',
				'exact' => false
				)
		); 
	?>
	</tr>
<?php endforeach; ?>
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
