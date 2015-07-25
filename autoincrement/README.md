use 
cmd.exe or linux terminal run 
write to 
<pre>php -f index.php -- -s run
<br>
pdo class uses examples
open and create test.php

include ("Config.php");
include ("DatabaseInterface.php");
include ("Database.php");

		
$db = new STNC\Database ();
</pre>

<pre>
rows methods= method for multiple rows selecting records from a database 
$q = " SELECT * FROM users";
		$array_expression = $db->rows ( $q );
		foreach ( $array_expression as $value ) {
			echo $value ['name'];
    }

<pre>		
fetch method for single row selecting records from a database
$q = " SELECT * FROM users";
		$array_expression = $db->rows ( $q );
		foreach ( $array_expression as $value ) {
			echo $value ['name'];
    }
  </pre>
<pre>   
insert method    
 $data = array(
	       'name' => "john",
	       'lastname' => "carter",
	       'status' => 1,
	       'age' =>25 ,
	          );

	         $db->insert('users',$data );   
    
</pre>
