<?php
    $user = $this->Session->read('Auth.User');
?>

<div class="beritas form">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
			<h2><?php echo __('Tambah Berita');  ?>
			</h2>				
			</div>
		</div>

	</div>
    <div class="row">
        <div class="col-lg-12">
        <div id="message">
        <?php echo $this->Session->flash(); ?>
        </div>
        </div>
    </div>

	<?php echo $this->Form->create('Berita',
			array(
				'inputDefaults'=>array(
								'label'=>false,
								'class'=>'form-control', 
								'required'=>false),
				'type'=> 'file'
				)); 
	?>
	<!-- <fieldset> -->
		<!-- <legend><?php echo __('Tambah Berita'); ?></legend> -->
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group ">
				    <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=>$user['id'])); ?>
				    <?php echo $this->Form->input('judul', array('placeholder'=>'Masukkan judul berita disini')); ?>
				  </div>

				  <div class="form-group ">
				    <?php echo $this->Form->input('berita', array('type'=>'textarea','id'=>'isiBerita')); ?>
				  </div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">Gambar</div>
					<div class="panel-body">
						<?php echo $this->Form->input('gambar', array('type'=>'file')) ?>
						<!-- 						
						<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
						  Upload gambar
						</button>						
						-->					</div>
				</div>							
				<div class="panel panel-default">
					<div class="panel-heading">Publikasi</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><strong>Penulis : </strong><?php echo $user['nama']; ?></li>
							<li><strong>Status : </strong><?php echo $this->Form->input('status', array('options'=>$status)); ?></li>
						</ul>
					<div class="form-group pull-right">
						<?php

						echo $this->Html->link('Batal', array('action'=>'index'), array('class' => 'btn btn-warning'));
						echo $this->Form->button('Simpan', array('class' => 'btn btn-primary'));
						?>
					</div>
<!-- 					<div class="form-group">
					<?php 
						echo $this->Form->input('penulis_id',$penulis);
						echo $this->Form->input('tgl_buat');
						// echo $this->Form->input('tgl_ubah');
						echo $this->Form->input('page_id');
						echo $this->Form->input('status');
						?>				
						</div>
 -->					</div>
				</div>
			</div>
		</div>
	<!-- </fieldset> -->
<?php echo $this->Form->end(); ?>
</div>

<!-- modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Upload gambar</h4>
      </div>
      <div class="modal-body">
      <?php echo $this->Form->file('pilih gambar'); ?>
      <?php echo $this->Upload->edit('Berita', $this->Form->fields['id']); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
	echo $this->Html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
    tinymce.init({
        selector: "#isiBerita",
        min_height: 200
    });
</script>