<?php

function get_total_all_records()
{
    $connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
	$statement = $connection->prepare("SELECT * FROM phongban");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>