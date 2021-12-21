<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM nhanvien ";
// if(isset($_POST["search"]["value"]))
// {
// 	$query .= 'WHERE TenChucVu LIKE "%'.$_POST["search"]["value"].'%" ';
// }
// if(isset($_POST["order"]))
// {
// 	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
// }
// else
// {
// 	$query .= 'ORDER BY id DESC ';
// }
// if($_POST["length"] != -1)
// {
// 	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
// }
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{	
	
	//chucvu
	$roleid = (int)$row["ChucVuId"];
	$query1 = "SELECT * FROM chucvu WHERE ChucVuId = '$roleid'";
	$statement1 = $connection->prepare($query1);
	$statement1->execute();
	$result1 = $statement1->fetchAll(\PDO::FETCH_ASSOC);
		//phongban
		$phongban = (int)$row["PhongBanId"];
		$query3 = "SELECT * FROM phongban WHERE PhongBanId = '$phongban'";
		$statement3 = $connection->prepare($query3);
		$statement3->execute();
		$result3 = $statement3->fetchAll(\PDO::FETCH_ASSOC);
	//hopdong
	$hdshow="";
	$hdid = (int)$row["HDLDId"];
	$query2 = "SELECT * FROM hopdong WHERE HDLDId = '$hdid'";
	$statement2 = $connection->prepare($query2);
	$statement2->execute();
	$result2 = $statement2->fetchAll(\PDO::FETCH_ASSOC);
	// if($result2[0]["KetThuc"]>=date("Y-m-d")){
	// 	$hdshow="Còn hợp đồng tới: ".$result2[0]["KetThuc"];
	// }
	// else{
	// 	$hdshow="Hết hạn hợp đồng";
	// }


	$sub_array = array();
	$sub_array[] = $row["Id"];
	$sub_array[] = $row["Ho"].' '.$row["Ten"];
	$sub_array[] = $result1[0]['TenChucVu'];
	$sub_array[] = $result3[0]['TenPB'];
	$sub_array[] = $result2[0]["BatDau"];
	$sub_array[] = $result2[0]["KetThuc"];
	$sub_array[] = '<button type="button" disabled name="update" id="'.$row["HDLDId"].'" class="btn btn-warning btn-xs update">Sửa</button>';
	$data[] = $sub_array;
}
$output = array(
 	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>