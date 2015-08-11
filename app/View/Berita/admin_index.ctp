<div class="beritas index">
	<!-- <h2><?php echo __('Beritas'); ?></h2> -->
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
					<h2><?php 
						echo __('Berita'); 
						echo $this->Html->link(__('Tambah Berita Baru'), array('action' => 'add'),array('class'=>'btn btn-success')); ?>
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
		<div class="col-lg-12">	
			<table cellpadding="0" cellspacing="0" class="table">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('judul'); ?></th>
					<!-- <th><?php echo $this->Paginator->sort('berita'); ?></th> -->
					<th><?php echo $this->Paginator->sort('user'); ?></th>
					<!-- <th><?php echo $this->Paginator->sort('tgl_ubah'); ?></th> -->
					<!-- <th><?php echo $this->Paginator->sort('page_id'); ?></th> -->
					<th><?php echo $this->Paginator->sort('status'); ?></th>
					<th><?php echo $this->Paginator->sort('tgl_buat'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($beritas as $berita): ?>
			<tr>
				<td><?php echo h($berita['Berita']['id']); ?>&nbsp;</td>
				<td><?php echo h($berita['Berita']['judul']); ?>&nbsp;</td>
				<!-- <td><?php echo h($berita['Berita']['berita']); ?>&nbsp;</td> -->
				<td><?php echo h($berita['User']['nama']); ?>&nbsp;</td>
				<!-- <td><?php echo h($berita['Berita']['tgl_ubah']); ?>&nbsp;</td> -->
				<!-- <td><?php echo h($berita['Berita']['page_id']); ?>&nbsp;</td> -->
				<td><?php echo h($berita['Berita']['status']); ?>&nbsp;</td>
				<td><?php echo h($berita['Berita']['tgl_buat']); ?>&nbsp;</td>

				<td class="actions">
				<?php 
				// echo $this->Html->link('<i class="glyphicon glyphicon-file"></i>',
				// 	array('action' => 'view', $berita['Berita']['id']),
				// 	array('escape'=>false),
				// 	null,
				// 	array('class' => 'btn btn-mini', 'data-toggle'=>"tooltip",'data-placement'=>"left",'title'=>"Tooltip on left") 
				// 	);

				echo $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>',
					array('action' => 'edit', $berita['Berita']['id']), 
					array('escape'=>false));

				echo $this->Form->postLink(
					$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove text-danger')),
			        array('action' => 'delete', $berita['Berita']['id']),
				    array('escape'=>false),
					__('Anda yakin ingin menghapus data # %s?', $berita['Berita']['id'])
					// array('class' => 'text-danger')
					);				
				?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
		</div>
	</div>
	<p>
	<?php
	// echo $this->Paginator->counter(array(
	// 	'format' => __('Halaman {:page} dari {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	// ));
	echo $this->Paginator->counter(array(
		'format' => __('Halaman {:page} dari {:pages}, total data {:count}')));
	?>	
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>