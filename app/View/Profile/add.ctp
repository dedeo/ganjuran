<div class="profiles form">
<?php echo $this->Form->create('Profile',array('inputDefaults'=>array('label'=>false,'class'=>'form-control'))); ?>
	<?php echo $this->Form->input('id',array('type'=>'hidden')) ?>
	<!-- <fieldset> -->
		<legend><?php echo __('Tambah Profile'); ?></legend>
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group form-group-lg">
				    <label>Profile</label>
				    <?php echo $this->Form->input('profile'); ?>
				  </div>
				  <div class="form-group form-group-lg">
				    <label>Text</label>
				    <?php echo $this->Form->input('text', array('type'=>'textarea','id'=>'profileText')); ?>
				  </div>
			</div>
			<div class="col-lg-4">
			<?php
				// echo $this->Form->input('penulis_id');
				echo $this->Form->input('tgl_buat');
				echo $this->Form->input('tgl_ubah');
				// echo $this->Form->input('page_id');
				// echo $this->Form->input('status');
			?>				
			</div>
		</div>
	<!-- </fieldset> -->
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<?php
	echo $this->Html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
    tinymce.init({
        selector: "#profileText",
        min_height: 200
    });
</script>