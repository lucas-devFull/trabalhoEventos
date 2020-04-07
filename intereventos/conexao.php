
<?php
function db_connect(){
	$PDO = new PDO('mysql:host='.DB_HOST. '; dbname='.DB_NAME.';charset=utf8',DB_USER, DB_PASS);
	return $PDO; 
}

function dataConvt($date){
	if(! strstr($date, '/')){
		//convertendo aqui de yyyy/mm/dd para dd/mm/yyyy
		sscanf($date, '%d-%d-%d', $y, $m, $d);
		return sprintf('%02/%02/%04', $d, $m, $y);
	}else{
		//vai que tem que ser convertido para os gringo ta aqui
		sscanf($date, '%d/%d/%d', $d, $m, $y);
		return sprintf('%04-%02-%02', $y, $m, $d);
	}
	return false;
}
//calculando a idades das criançada
function calculateAge($aniversario){
	$now= new DateTime();
	$diff = $now->diff(new DateTime($aniversario));
	return $diff->y;
}
function make_hash($str){
	return sha1(md5($str));
}
function isLoggedIn(){
	if ( !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
		return false;
	}
	return true;
}
?>