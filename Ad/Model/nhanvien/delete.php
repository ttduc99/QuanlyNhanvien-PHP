<?php

$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include("function.php");

if(isset($_POST["nhanvien_id"]))
{
	$statement3 = $connection->prepare(
		"SELECT * FROM nhanvien 
		WHERE Id = '".$_POST["nhanvien_id"]."' 
		LIMIT 1"
	);
	$statement3->execute();
	$result3 = $statement3->fetchAll();
	$luong_id=$result3[0]["LuongId"];
	$hdld_id=$result3[0]["HDLDId"];

	$statement1 = $connection->prepare(
		"DELETE FROM hopdong WHERE HDLDId = :id"
	);
	$result1 = $statement1->execute(
		array(
			':id'	=>	$hdld_id
		)
	);

	$statement2 = $connection->prepare(
		"DELETE FROM luong WHERE LuongId = :id"
	);
	$result2 = $statement2->execute(
		array(
			':id'	=>	$luong_id
		)
	);

	$statement = $connection->prepare(
		"DELETE FROM nhanvien WHERE Id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=> $_POST["nhanvien_id"]
		)
	);

	if(!empty($result))
	{
		echo 'Nhân viên đã được xóa';
	}
}
?>