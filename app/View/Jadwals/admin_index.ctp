<div class="jadwals index">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
					<h2><?php 
						echo __('Jadwal Misa'); 
						// echo $this->Html->link(__('Tambah Jadwal Misa'), array('action' => 'add'),array('class'=>'btn btn-success')); ?>
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
    <!-- /.row -->
	<div class="row">
		<div class="col-lg-8">
		<?php
		foreach ($jadwals as $key => $values) { ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo "Misa ".ucwords($key);?></h3>
				</div>
				<div class="panel-body">
				<table cellpadding="0" cellspacing="0" class="table">
					<thead>
						<tr>
							<th>Nama</th><th>Hari</th><th>Waktu</th><th>Bahasa</th><th class="actions">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($values as $val) { ?>
						<tr>
							<td><?php echo $val['nama']; ?></td>
							<td><?php echo $val['hari']; ?></td>
							<td><?php echo $val['jam']; ?></td>
							<td><?php echo $val['bahasa']; ?></td>
							<td class="actions">
							<?php
							echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>',
								array('action' => '#'), 
								array(
									'data-toggle'=>"modal",
									'data-target'=>"#editModal",
									'escape'=>false,
									'id'=>$val['id'],
									'onClick'=>'doEdit(this)'));

							echo $this->Form->postLink(
								$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove text-danger')),
						        array('action' => 'delete', $val['id']),
							    array('escape'=>false),
								__('Anda yakin ingin menghapus data # %s?', $val['id'])
								);
							?>								
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		<?php }
		?>
		</div>
		<div class="col-lg-4">
	        <div class="panel panel-success">
				<div class="panel-heading">
				<h3 class="panel-title">Tambah Jadwal Misa</h3>
				</div>
				<div class="panel-body">
					<?php echo $this->Form->create('Jadwal',
								array(
									'action'=>'add',
									'prefix'=>'admin',
									'inputDefaults'=>array(
													'label'=>false,
													'class'=>'form-control', 
													'required'=>false),
									'type'=> 'file'
									)); ?>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Misa</label>
							<?php echo $this->Form->input('nama'); ?>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Tipe Misa</label>
							<?php echo $this->Form->input('tipe', array('options'=>$tipeMisa)); ?>
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
				</div>        	
	        </div>			
		</div>
	</div>
</div>

<!-- modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Jadwal Misa</h4>
      </div>
      <div class="modal-body" id="modalContent">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
xmlhttp=new XMLHttpRequest();

function doEdit(ed){
	console.log(ed.getAttribute('id'));
	var id = ed.getAttribute('id');
	xmlhttp.open("POST","jadwals/ajaxedit/"+id,false);
	xmlhttp.send();
	console.log(xmlhttp.responseText);
 	document.getElementById("modalContent").innerHTML=xmlhttp.responseText;
}
</script>


