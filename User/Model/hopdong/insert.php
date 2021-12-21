<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["operation"]))
{	
	if($_POST["operation"] == "Edit")
	{	
		// select nhanvien
		// $query0 = "SELECT * FROM nhanvien WHERE Id = '".$_POST["nhanvien_id"]."'";
		// $statement0 = $connection->prepare($query0);
		// $statement0->execute();
		// $result0 = $statement0->fetchAll();
		// $hdldid=$result0[0]['HDLDId'];
		
		// data
		$start = date("Y-m-d", strtotime($_POST["dateStart_add"]));
		$end =  date("Y-m-d", strtotime($_POST["dateEnd_add"]));

		$statement1 = $connection->prepare(
			"UPDATE hopdong
			SET BatDau=:batdau,KetThuc=:ketthuc
			WHERE HDLDId = :id
			"
		);
		$result1 = $statement1->execute(
			array(
				':id'	=> 	$_POST["hdld_id"],
				':batdau' =>	$start,
				':ketthuc' => 	$end				
			)
		);

		if(!empty($result1))
		{
			echo 'Nhân viên đã được sửa';
		}
	}
}

?>