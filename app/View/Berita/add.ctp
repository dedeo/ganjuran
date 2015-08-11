<div class="beritas form">
<?php echo $this->Form->create('Berita',array('inputDefaults'=>array('label'=>false,'class'=>'form-control'))); ?>
	<!-- <fieldset> -->
		<legend><?php echo __('Tambah Berita'); ?></legend>
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group form-group-lg">
				    <label>Judul Berita</label>
				    <?php echo $this->Form->input('judul'); ?>
				  </div>
				  <div class="form-group form-group-lg">
				    <label>Isi berita</label>
				    <?php echo $this->Form->input('berita', array('type'=>'textarea','id'=>'isiBerita')); ?>
				  </div>
			</div>
			<div class="col-lg-4">
			<?php
				echo $this->Form->input('penulis_id');
				echo $this->Form->input('tgl_buat');
				echo $this->Form->input('tgl_ubah');
				echo $this->Form->input('page_id');
				echo $this->Form->input('status');
			?>				
			</div>
		</div>
	<!-- </fieldset> -->
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Beritas'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php
	echo $this->Html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
    tinymce.init({
        selector: "#isiBerita",
        min_height: 200
    });
</script>