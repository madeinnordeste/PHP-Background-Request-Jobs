<?php 

$url = isset($argv[1]) ? $argv[1] : FALSE;

$counter = isset($argv[2]) ? (int)$argv[2] : 10;
if( $counter > 60 ){
	$counter = 60;
}

$div = '----------------------';
date_default_timezone_set('America/Sao_Paulo');

if( !$url ){
	
	echo $div."\n";
	echo "ERROR: URL not Found\n";
	echo $div."\n";
	echo "Correct Use:\n";
	echo "\tphp ".__FILE__." http://www.YOURUL.com [counter]\n";
	echo "Examples:\n";
	echo "\tphp ".__FILE__." http://www.YOURUL.com\n";
	echo "\tphp ".__FILE__." http://www.YOURUL.com 20";

}else{

	for($i=1;$i<=$counter;$i++){

		echo str_pad($i, 2, "0", STR_PAD_LEFT)." - ";
		echo date('Y-m-d h:i:s', time()); 
		echo " - GET:".$url." - ";

		$content = @file_get_contents($url);

		$status = "SUCCESS";
		if( $content === FALSE){
			$status = "ERROR";	
		}else{
			//echo "\n\n".$content."\n\n";
		}
		echo $status."\n";

		$sleep = ceil(60 / $counter);
		sleep($sleep);

	}

}


 ?>