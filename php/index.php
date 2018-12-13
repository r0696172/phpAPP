<h1>Docenten</h1> 

<?php
$db = new mysqli('localhost', 'test', 'test', 'docenten');

if($db->connect_errno > 0) {
   die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = 'SELECT * FROM docenten';

if($result = $db->query($sql)){
   while($row = $result->fetch_assoc()){
      echo $row['naam'] . ' ' . $row['voornaam'] . '<br />';
   }
}

$result->free();
$db->close();

<img src="img/pinguin.jpg">
