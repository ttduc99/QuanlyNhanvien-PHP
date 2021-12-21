<?php

$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include("function.php");

if(isset($_POST["nhanvien_id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM nhanvien WHERE Id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["nhanvien_id"]
		)
	);

	$statement1 = $connection->prepare(
		"DELETE FROM hopdong WHERE HDLDId = :id"
	);
	$result1 = $statement1->execute(
		array(
			':id'	=>	$_POST["nhanvien_id"]
		)
	);
	if(!empty($result))
	{
		echo 'Nhân viên đã được xóa';
	}
}
?>