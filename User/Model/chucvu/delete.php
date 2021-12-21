<?php

$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include("function.php");

if(isset($_POST["chucvu_id"]))
{
	$statement = $connection->prepare(
		"DELETE FROM chucvu WHERE ChucVuId = :chucvu_id"
	);
	$result = $statement->execute(
		array(
			':chucvu_id'	=>	$_POST["chucvu_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Chức vụ đã được xóa';
	}
}
?>