<?php
	$data = $this->request->data['Jadwal'];
	echo $this->Form->create('Jadwal',
			array(
				'action'=>'add',
				'prefix'=>'admin',
				'inputDefaults'=>array(
								'label'=>false,
								'class'=>'form-control', 
								'required'=>false)
				// 'type'=> 'file'
				)); ?>
	<?php echo $this->request->data['Jadwal']['id']; ?>
	<div class="form-group">
		<label for="exampleInputEmail1">Nama Misa</label>
		<?php echo $this->Form->input('nama'); ?>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Tipe Misa</label>
		<?php echo $this->Form->input('tipe', array('options'=>$tipeMisa, 'selected'=>$data['tipe'])); ?>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Hari</label>
		<div>
		<?php foreach ($namaHari as $key) { ?>
				<label class="checkbox-inline">
		 		<?php echo $this->Form->checkbox('hari.', array('value'=>$key,'hiddenField' => false)).$key; ?>
				</label>
		<?php } ?>
		</div> 
	</div>
	<div class="form-group">
		<!-- <label for="exampleInputEmail1">Pukul</label> -->
		<?php echo $this->Form->input('jam', array('class'=>'', 'label'=>'Pukul : ')); ?>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Bahasa yang digunakan</label>
		<?php echo $this->Form->input('bahasa', array('options'=>$bahasa)); ?>
	</div>
	<?php echo $this->Form->end(__('Submit')); ?>