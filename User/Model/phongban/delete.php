<?php

$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include("function.php");

if(isset($_POST["phongban_id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM phongban WHERE phongbanId = :phongban_id"
	);
	$result = $statement->execute(
		array(
			':phongban_id'	=>	$_POST["phongban_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Phòng ban đã được xóa';
	}
}
?>