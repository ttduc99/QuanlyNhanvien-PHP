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
	//hopdong
	$hdid = (int)$row["HDLDId"];
	$query2 = "SELECT * FROM hopdong WHERE HDLDId = '$hdid'";
	$statement2 = $connection->prepare($query2);
	$statement2->execute();
	$result2 = $statement2->fetchAll(\PDO::FETCH_ASSOC);
	if($result2[0]["KetThuc"]>=date("Y-m-d")){
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
		//luong
		$luongid = (int)$row["LuongId"];
		$query4 = "SELECT * FROM luong WHERE LuongId = '$luongid'";
		$statement4 = $connection->prepare($query4);
		$statement4->execute();
		$result4 = $statement4->fetchAll(\PDO::FETCH_ASSOC);
		//tính lương
		$rsLuongGhichu= explode(";",$result4[0]['GhiChu']);
		$luong=$result4[0]['LuongCB']*$result4[0]['HeSoLuong'];
		$rsGhichu='';
		foreach($rsLuongGhichu as $ghichu){
			if(substr($ghichu, 0, 1)=="T"){
				if((int)explode(":",$ghichu)[1]!=''){
					$luong+=(int)explode(":",$ghichu)[1];
					$rsGhichu.=substr($ghichu, 1).'<br>';
				}
			}
			if(substr($ghichu, 0, 1)=="P"){
				if((int)explode(":",$ghichu)[1]!=''){
					$luong-=(int)explode(":",$ghichu)[1];
					$rsGhichu.=substr($ghichu, 1).'<br>';
				}
			}
		}		
		// trả kq
		$sub_array = array();
		$sub_array[] = $row["Id"];
		$sub_array[] = $row["Ho"].' '.$row["Ten"];
		$sub_array[] = $result1[0]['TenChucVu']."-".$result3[0]['TenPB'];
		$sub_array[] = $result4[0]['LuongCB'];
		$sub_array[] = $result4[0]['HeSoLuong'];
		$sub_array[] = $rsGhichu;
		$sub_array[] = $luong;
		$sub_array[] = '<button type="button" name="update" id="'.$row["LuongId"].'" class="btn btn-warning btn-xs update">Sửa</button>';
		$data[] = $sub_array;	
	}
}
$output = array(
 	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>