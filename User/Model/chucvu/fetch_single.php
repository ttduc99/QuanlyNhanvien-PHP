<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["chucvu_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM chucvu 
		WHERE ChucVuId = '".$_POST["chucvu_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["ChucVuId"] = $row["ChucVuId"];		
		$output["TenChucVu"] = $row["TenChucVu"];		
	}
	echo json_encode($output);
}
?>