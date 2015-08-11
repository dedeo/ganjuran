<?php
App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class MyTextHelper extends AppHelper {
	public $hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
	public $bulan = array(	'01' => 'Januari',
							'02' => 'Februari',
							'03' => 'Maret',
							'04' => 'April',
							'05' => 'Mei',
							'06' => 'Juni',
							'07' => 'Juli',
							'08' => 'Agustus',
							'09' => 'September',
							'10' => 'Oktober',
							'11' => 'November',
							'12' => 'Desember');

	function localDate($datetime){
		//2015-07-26 23:24:17
		$dateArr = explode(" ", $datetime);
		$date = explode("-",$dateArr[0]);
		$time = $dateArr[1];

		$tgl = $date[2].' '.$this->bulan[$date[1]].' '.$date[0];
		return $tgl;
	}
}