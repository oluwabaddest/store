<?php

     define("DBNAME", "store");
     define("DBUSER", "root");
     define("DBPASS", "adam");
    
     try{

     	$conn = new PDO ("mysql:localhost=localhost;dbname=".DBNAME, DBUSER, DBPASS);

     	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);


     }catch(PDOException $err) {
     	echo $err->getMessage();
     }

?>