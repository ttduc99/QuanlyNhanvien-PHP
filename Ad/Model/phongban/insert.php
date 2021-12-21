<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{		
		$statement = $connection->prepare("
			INSERT INTO phongban (TenPB,SDT,DiaChi) 
			VALUES (:tenphongban_add, :sdtphongban_add, :diachiphongban_add)
		");
		$result = $statement->execute(
			array(
				':tenphongban_add'	=>	$_POST["tenphongban_add"],
				':sdtphongban_add'	=>	$_POST["sdtphongban_add"],
				':diachiphongban_add'	=>	$_POST["diachiphongban_add"]
			)
		);
		if(!empty($result))
		{
			echo 'Phòng Ban đã được thêm';
		}
	}
	if($_POST["operation"] == "Edit")
	{		
		$statement = $connection->prepare(
			"UPDATE phongban 
			SET TenPB = :tenphongban_add, SDT =:sdtphongban_add, DiaChi= :diachiphongban_add
			WHERE phongbanId = :id
			"
		);
		$result = $statement->execute(
			array(
				':tenphongban_add'	=>	$_POST["tenphongban_add"],
				':sdtphongban_add'	=>	$_POST["sdtphongban_add"],
				':diachiphongban_add'	=>	$_POST["diachiphongban_add"],
				':id'			=>	$_POST["phongban_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Phòng Ban đã được sửa';
		}
	}
}

?>