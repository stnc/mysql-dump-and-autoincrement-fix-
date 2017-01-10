<?php
if (! defined ( 'DS' )) {
	define ( 'DS', DIRECTORY_SEPARATOR );
}
if (! defined ( 'CRLF' )) {
	define ( 'CRLF', PHP_EOL );
}
function first_array_value($value) {
	return ($value [0] ['Field']);
}
function run($param=false) {
	if ($param == 'run') {
		include ("Config.php");
		include ("DatabaseInterface.php");
		include ("Database.php");
		
		$db = new STNC\Database ();
		
		$excluding_tables = array("wp_woocommerce_shipping_zone_methods", "wp_term_relationships");
		
		$q = "SHOW FULL TABLES";
		$array_expression = $db->rows ( $q );
		echo 'Auto increment running';
		foreach ( $array_expression as $value ) {
			$colonName = $value ['Tables_in_'.DB_NAME];
		//	echo "\n";
		if (!in_array($colonName, $excluding_tables)) {
			$firstArray = first_array_value ( $db->rows ( 'SHOW COLUMNS FROM ' . $colonName ) );
			$sql = "ALTER TABLE " . $colonName . " MODIFY COLUMN " . $firstArray . "  int(11) NOT NULL AUTO_INCREMENT FIRST;";
			$db->querys ( $sql );
		}}
	} else {
		die ( "unknown params" );
	}
}

function test1($param) {
	echo $param.' test1';
}

function test2($param) {
	echo $param.' test2';
}

function test3($param) {
	echo $param .' test3';
}


for($i = 0; $i < count ( $argv ); $i ++) {

	if ($argv [$i] == '-s') {
		$param = $argv [$i + 1];
		run ( $param );
	} else if ($argv [$i] == '-d') {
		$param = $argv [$i + 1];
		test1 ( $param );
	} else if ($argv [$i] == '-f') {
		$param = $argv [$i + 1];
		test2 ( $param );
	} else if ($argv [$i] == '--override') {
	
		test3 ( 'override dan gelen  ' );
	}
}

if ($argc < 2) {
	$file = basename ( __FILE__ );
	print "STNC Autoincrement Generator" . CRLF;
	print "Usage: php -f $file -- -s komut \n [--override -d output_dir -f output_filename]" . CRLF;
	//or //D:\xampp\php\php.exe -f index.php -- -d selman
	exit ();
}
