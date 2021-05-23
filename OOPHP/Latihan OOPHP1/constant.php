<?php

// define ('NAMA', 'NUR KHOMALASARI');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// class Coba{
// 	const NAMA = 'MALA';
// }
// echo Coba::NAMA;


//echo __File__;




// function coba(){
// 	return __FUNCTION__;
// }
//  echo coba();
 

 class coba{
 	public $kelas = __CLASS__;
 }

$obj = new Coba;
echo $obj->kelas;




?>