<?php

include 'data.php';

$dlte = $_GET['id'];

$sqli = "DELETE FROM data WHERE id = '$dlte'";

if ($conn->query($sqli)) 
{
	echo 'ok';
}
header('location:http://localhost/crud/index.php');

?>