use 
cmd.exe or linux terminal run 
write to 
<pre>php -f index.php -- -s run
</pre>
<pre>
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
  </pre>
  <br>
<pre>		
fetch method for single row selecting records from a database
$q = " SELECT * FROM users";
		$array_expression = $db->rows ( $q );
		foreach ( $array_expression as $value ) {
			echo $value ['name'];
    }
  </pre>
  <br>
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

<pre>   
update method    
 $data = array(
	       'name' => "john",
	       'lastname' => "carter",
	       'status' => 1,
	       'age' =>25 ,
	          );

	         $where = array(
	           'user_id' => 1
	          );
	         
	         $this-> update('users', $data, $where);   
    
</pre>


<pre>   
delete method    
 $where = array(
	          'user_id' => 1
	           );
$db->delete("users", $where); 
</pre>
