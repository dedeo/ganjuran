<?php
$this->Html->addCrumb('Renungan', $this->html->url(array('controller'=>'renungan', 'action'=>'index')));
$this->Html->addCrumb('Edit');
?>
<div class="renungan form">
<?php echo $this->Form->create('Renungan',array('inputDefaults'=>array('label'=>false,'class'=>'form-control'))); ?>
	<!-- <fieldset> -->
		<legend><?php echo __('Edit Renungan'); ?></legend>
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group form-group-lg">
				    <label>Judul Renungan</label>
				    <?php echo $this->Form->input('judul'); ?>
				  </div>
				  <div class="form-group form-group-lg">
				    <label>Renungan</label>
				    <?php echo $this->Form->input('renungan', array('type'=>'textarea','id'=>'isiRenungan')); ?>
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

		<li><?php echo $this->Html->link(__('List Renungan'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php
	echo $this->Html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
    tinymce.init({
        selector: "#isiRenungan",
        min_height: 200
    });
</script>

<!-- <div class="renungans form">
<?php echo $this->Form->create('Renungan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Renungan'); ?></legend>
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
</div> -->