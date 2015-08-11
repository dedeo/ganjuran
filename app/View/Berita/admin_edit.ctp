<?php
    $user = $this->Session->read('Auth.User');
    $data = $this->request->data;
?>

<div class="beritas form">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
					<h2><?php 
						echo 'Edit Berita'; 
						echo $this->Html->link(__('Buat berita baru'), array('action' => 'add'),array('class'=>'btn btn-success'));
						// echo $this->Html->link(__('Kembali'), array('action' => 'index'),array('class'=>'btn btn-default')); 
						?>
					</h2>				
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
				'type'=> 'file',
				'name' => 'EditForm'
				)); 
			echo $this->Form->hidden('Extra.original_data');
			//debug($data);
	?>
	<!-- <fieldset> -->
		<!-- <legend><?php echo __('Tambah Berita'); ?></legend> -->
		<div class="row">
			<div class="col-lg-8">
				  <div class="form-group ">
				    <?php echo $this->Form->input('user_id', array('type'=>'hidden', 'value'=>$user['id'])); ?>
				    <?php echo $this->Form->input('judul',array('onChange'=>'updateElm(this)')); ?>
				  </div>

				  <div class="form-group ">
				    <?php echo $this->Form->input('berita', array(
				    							'type'=>'textarea',
				    							'id'=>'isiBerita', 
				    							//'onChange'=>'updateElm(this)'
				    							)
				    						); 
				    ?>
				  </div>
			</div>
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading">Publikasi</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><strong>Penulis : </strong><?php echo $user['nama']; ?></li>
							<li><strong>Tgl buat : </strong><?php echo $data['Berita']['tgl_buat']; ?></li>
							<li><strong>Tgl update : </strong><?php echo $data['Berita']['tgl_ubah']; ?></li>
							<li><strong>Status : </strong><?php echo $this->Form->input('status', 
								array(
									'options'=>$status,
									'default'=>$data['Berita']['status'],
									'onChange'=>'updateElm(this)'
									)
								); ?>
							</li>
						</ul>
					<div class="form-group pull-right">
						<?php

						echo $this->Html->link('Batal', array('action'=>'index'), array('class' => 'btn btn-warning'));
						echo $this->Form->button('Simpan', array(
															'onClick'=>'doSubmit()', 
															'type'=>null,
															'class' => 'btn btn-primary',
															'disabled'=>'disabled',
															'id'=>'btnSubmit'));
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
				<div class="panel panel-default">
					<div class="panel-heading">Gambar</div>
					<div class="panel-body">
						<?php 
						$gambar = $data['Berita']['gambar'];
						if($gambar!=''){ ?>
						<div class="thumbnail"><?php echo $this->Html->image('Berita/'.$gambar);?></div>
						<?php
						}else{
							echo '<p>Tidak ada gambar dalam berita ini</>';
						}
						// debug()
						echo $this->Form->hidden('Berita.gambar'); 
						echo $this->Form->input('updateGambar', array('type'=>'file','onChange'=>'updateElm(this)')) ?>
						<!-- 						
						<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
						  Upload gambar
						</button>						
						-->					
					</div>
				</div>							
			</div>
		</div>
	<!-- </fieldset> -->
	<!-- <?php echo $this->Form->input('updated',array('type'=>'hidden','id'=>'updated'))?> -->
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
	var allInputs = document.getElementsByTagName("input");
    var elements = [];

    console.log(allInputs);

    tinymce.init({
        selector: "#isiBerita",
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        min_height: 400,
		onchange_callback : "updateElm(this)",
	    setup: function(editor) {
	        editor.on('change', function(e) {
	        	elements['isiBerita']='data[Berita][isiBerita]';
	        	//updateElm(e.get(editorId).getElement());
	            //console.log('change event', e.content);
	        });
	    }
    });

    //var n = 0;
	
	function updateElm(val) {
		elements[val.getAttribute('id')] = val.getAttribute('name');
		if(elements){
			$('#btnSubmit').removeAttr('disabled');

			// document.getElementById("updated").value = elements.join();
			//$('#updated').val(elements);
		}
	    //alert("The input value has changed. The new value is: " + val.getAttribute('name'));
	    //n++;
	    console.log(elements);
	}

	function doSubmit(){
		document.EditForm.submit();
	}

</script>