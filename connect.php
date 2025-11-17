<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="uniprjct";
try {
    $database = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$database->exec("set names utf8");
    
    }
catch(PDOException $e)
    {
		echo '<div class="alert alert-danger">
  <strong>Connection failed:</strong>'. $e->getMessage().
'</div>';
    }
?> 