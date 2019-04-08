<html>
    <head>
        
    </head>
    <body>

<form action="php_databases.php" method="post">
Name : <input type="text" name="Name"> <br/>
Surname : <input type="text" name="Surname"> <br/>
E-mail : <input type="text" name="Email">	 <br/>
	<input type="submit" name="envoi" value="Filter friends">
</form>


<?php

	class MyDB extends SQLite3 {
    	function __construct() {
       		$this->open('friends.db');
    	}
 	}

 	$db = new MyDB();
 	if(!$db) {
    	echo $db->lastErrorMsg();
    	exit();
 	} 

 	echo "<h2>My friends</h2>";

 	$sql = "select * from friend";
 	$ret = $db->query($sql);
 	while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            echo $row['name']." ";
    		echo $row['surname']." [";
    		echo $row['email']."]<br/>";
 	}

 $db->close();

?>
    </body>
</html>