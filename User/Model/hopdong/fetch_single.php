<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["hdld_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM nhanvien 
		WHERE HDLDId = '".$_POST["hdld_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	
	$hdld=$result[0]["HDLDId"];
	$statement1 = $connection->prepare(
		"SELECT * FROM hopdong 
		WHERE HDLDId = '".$_POST["hdld_id"]."'
		LIMIT 1"
	);
	$statement1->execute();
	$result1 = $statement1->fetchAll();

	foreach($result as $row)
	{
		//chucvu
		$roleid = (int)$row["ChucVuId"];
		$query2 = "SELECT * FROM chucvu WHERE ChucVuId = '$roleid'";
		$statement2 = $connection->prepare($query2);
		$statement2->execute();
		$result2 = $statement2->fetchAll(\PDO::FETCH_ASSOC);
		//phongban
		$phongban = (int)$row["PhongBanId"];
		$query3 = "SELECT * FROM phongban WHERE PhongBanId = '$phongban'";
		$statement3 = $connection->prepare($query3);
		$statement3->execute();
		$result3 = $statement3->fetchAll(\PDO::FETCH_ASSOC);

		$output["Id"] = $row["Id"];		
		$output["Ten"] = $row["Ho"]." ".$row["Ten"];		
		$output["ChucVu"] = $result2[0]["TenChucVu"];		
		$output["PhongBan"] = $result3[0]["TenPB"];	
		$output["hdstart"]	= $result1[0]["BatDau"];				
		$output["hdend"]	= $result1[0]["KetThuc"];	
		$output["hdld"]	= $row["HDLDId"];											
	}
	echo json_encode($output);
}
?>