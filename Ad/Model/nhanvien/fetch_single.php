<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["nhanvien_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM nhanvien 
		WHERE Id = '".$_POST["nhanvien_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	$hdld=$result[0]["HDLDId"];
	$statement1 = $connection->prepare(
		"SELECT * FROM hopdong 
		WHERE HDLDId = '".$hdld."' 
		LIMIT 1"
	);
	$statement1->execute();
	$result1 = $statement1->fetchAll();

	foreach($result as $row)
	{
		$output["Id"] = $row["Id"];		
		$output["Ho"] = $row["Ho"];		
		$output["Ten"] = $row["Ten"];		
		$output["SoDienThoai"] = $row["SoDienThoai"];		
		$output["GioiTinh"] = $row["GioiTinh"];		
		$output["DiaChi"] = $row["DiaChi"];		
		$output["ChucVuId"] = $row["ChucVuId"];		
		$output["PhongBanId"] = $row["PhongBanId"];		
		$output["NgaySinh"]	= $row["NgaySinh"];				
		$output["hdstart"]	= $result1[0]["BatDau"];				
		$output["hdend"]	= $result1[0]["KetThuc"];	
		$output["hdld"]	= $row["HDLDId"];											
	}
	echo json_encode($output);
}
?>