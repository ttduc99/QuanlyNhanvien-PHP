<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["phongban_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM phongban 
		WHERE PhongBanId = '".$_POST["phongban_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["phongbanId"] = $row["PhongBanId"];		
		$output["Tenphongban"] = $row["TenPB"];
		$output["Diachiphongban"] = $row["DiaChi"];		
		$output["Sdtphongban"] = $row["SDT"];		
	}
	echo json_encode($output);
}
?>