<div class="profiles view">
	<div class="newsHeader">
		<h3 class="newsTitle"><?php echo $profile['Profile']['profile']; ?></h3>
		<h5 class="newsDate"><?php echo $this->MyText->localDate($profile['Profile']['tgl_buat']) ?></h5>
		<!-- <h5 class="newsAuthor">oleh: <?php echo $berita['User']['first_name']; ?></h5>		 -->
	</div>
	<div class="newsContent">
		<?php 
		//echo $this->Text->autoParagraph($profile['Profile']['text']); 
		echo $profile['Profile']['text']; 
		?>	
	</div>
</div>