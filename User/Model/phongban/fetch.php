<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM phongban ";
// if(isset($_POST["search"]["value"]))
// {
// 	$query .= 'WHERE Tenphongban LIKE "%'.$_POST["search"]["value"].'%" ';
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
	$sub_array = array();
	$sub_array[] = $row["PhongBanId"];
	$sub_array[] = $row["TenPB"];
	$sub_array[] = $row["SDT"];
	$sub_array[] = $row["DiaChi"];
	$sub_array[] = '<button type="button" disabled name="update" id="'.$row["PhongBanId"].'" class="btn btn-warning btn-xs update">Sửa</button>';
	$sub_array[] = '<button type="button" disabled name="delete" id="'.$row["PhongBanId"].'" class="btn btn-danger btn-xs delete">Xóa</button>';
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