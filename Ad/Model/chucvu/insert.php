<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{		
		$statement = $connection->prepare("
			INSERT INTO chucvu (TenChucVu) 
			VALUES (:tenchucvu_add)
		");
		$result = $statement->execute(
			array(
				':tenchucvu_add'	=>	$_POST["tenchucvu_add"]
			)
		);
		if(!empty($result))
		{
			echo 'Chức vụ đã được thêm';
		}
	}
	if($_POST["operation"] == "Edit")
	{		
		$statement = $connection->prepare(
			"UPDATE chucvu 
			SET TenChucVu = :tenchucvu_add 
			WHERE ChucVuId = :id
			"
		);
		$result = $statement->execute(
			array(
				':tenchucvu_add'	=>	$_POST["tenchucvu_add"],
				':id'			=>	$_POST["chucvu_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Chức vụ đã được sửa';
		}
	}
}

?>