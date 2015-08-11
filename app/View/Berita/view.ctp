<?php
$this->Html->addCrumb('Berita', $this->html->url(array('controller'=>'berita', 'action'=>'index')));
$this->Html->addCrumb($berita['Berita']['judul']);
//debug($berita);
?>
<div class="renungans view">
<div class="row">
	<div class="col-lg-9">
		<div class="newsHeader">
			<h3 class="newsTitle"><?php echo $berita['Berita']['judul']; ?></h3>
			<h5 class="newsDate"><?php echo $this->MyText->localDate($berita['Berita']['tgl_buat']) ?></h5>
			<h5 class="newsAuthor">oleh: <?php echo $berita['User']['nama']; ?></h5>		
		</div>
		<div class="newsContent">
			<?php 
			if ($berita['Berita']['gambar']!='') {
				?>
				<div class="clearfix">
				<?php	echo $this->Html->image('Berita/'.$berita['Berita']['gambar'], array('class'=>'pull-left', 'width'=>'20%')); ?>
				</div>
				<?php
			}
			?>
			<?php echo $berita['Berita']['berita'] ?>	
		</div>		
	</div>
	<div class="col-lg-3">
		
	</div>
</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Renungan'), array('action' => 'edit', $berita['Berita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Renungan'), array('action' => 'delete', $berita['Berita']['id']), array(), __('Are you sure you want to delete # %s?', $berita['Berita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Renungans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renungan'), array('action' => 'add')); ?> </li>
	</ul>
</div> -->
<?php
	//echo $this->Html->script('jquery-2.1.3.min');
?>
<script type="text/javascript">
	//$(".newsContent p").addClass("pull-left");
</script>