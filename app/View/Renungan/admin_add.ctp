<?php
    $user = $this->Session->read('Auth.User');
?>

<div class="renungans form">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
			<h2><?php echo __('Tambah Renungan');  ?>
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

	<?php echo $this->Form->create('Renungan',
			array(
				'inputDefaults'=>array(
								'label'=>false,
								'class'=>'form-control', 
								'required'=>false),
				'type'=> 'file'
				)); 
	?>
	<!-- <fieldset> -->
		<!-- <legend><?php echo __('Tambah Renungan'); ?></legend> -->
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group ">
				    <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=>$user['id'])); ?>
				    <?php echo $this->Form->input('judul', array('placeholder'=>'Masukkan judul renungan disini')); ?>
				  </div>

				  <div class="form-group ">
				    <?php echo $this->Form->input('renungan', array('type'=>'textarea','id'=>'isiRenungan')); ?>
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

<?php
	echo $this->Html->script('tinymce/tinymce.min');
?>
<script type="text/javascript">
    tinymce.init({
        selector: "#isiRenungan",
        min_height: 200
    });
</script>