<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["luong_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM nhanvien 
		WHERE LuongId = '".$_POST["luong_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	

	foreach($result as $row)
	{
		//chucvu
		$roleid = (int)$row["ChucVuId"];
		$query2 = "SELECT * FROM chucvu WHERE ChucVuId = '$roleid'";
		$statement2 = $connection->prepare($query2);
		$statement2->execute();
		$result2 = $statement2->fetchAll(\PDO::FETCH_ASSOC);
		//phongban
		$phongbanid = (int)$row["PhongBanId"];
		$query3 = "SELECT * FROM phongban WHERE PhongBanId = '$phongbanid'";
		$statement3 = $connection->prepare($query3);
		$statement3->execute();
		$result3 = $statement3->fetchAll(\PDO::FETCH_ASSOC);
		//luong
		$luongid = (int)$row["LuongId"];
		$query4 = "SELECT * FROM luong WHERE LuongId = '$luongid'";
		$statement4 = $connection->prepare($query4);
		$statement4->execute();
		$result4 = $statement4->fetchAll(\PDO::FETCH_ASSOC);
		//tinh luong
		$rsLuongGhichu= explode(";",$result4[0]['GhiChu']);
		$luong=$result4[0]['LuongCB']*$result4[0]['HeSoLuong'];
		$rsGhichu='';
		$soluongghichu=0;
		foreach($rsLuongGhichu as $ghichu){
			if(substr($ghichu, 0, 1)=="T"){
				$luong+=(int)explode(":",$ghichu)[1];
				$rsGhichu.=substr($ghichu, 1).'<br>';
			}
			if(substr($ghichu, 0, 1)=="P"){
				$luong-=(int)explode(":",$ghichu)[1];
				$rsGhichu.=substr($ghichu, 1).'<br>';
			}
			$soluongghichu++;
		}

		$output["Id"] = $row["Id"];		
		$output["Ten"] = $row["Ho"]." ".$row["Ten"];		
		$output["ChucVu"] = $result2[0]["TenChucVu"];		
		$output["PhongBan"] = $result3[0]["TenPB"];	
		$output["luongcoban"]	= $result4[0]['LuongCB'];				
		$output["hesoluong"]	= $result4[0]['HeSoLuong'];
		$output["phucap"]	= $result4[0]['GhiChu'];
		$output["soghichu"]	= $soluongghichu;
		$output["luong"]	= $luong;
		$output["ghichu"]	= $result4[0]['GhiChu'];

		
		// $output["Id"] = $row["Id"];		
		// $output["Ten"] = $row["Ho"]." ".$row["Ten"];		
		// $output["ChucVu"] = $result2[0]["TenChucVu"];		
		// $output["PhongBan"] = $result3[0]["TenPB"];	
		// $output["luongcoban"]	= '1';				
		// $output["hesoluong"]	= '1';		
		// $output["phucap"]	=  '1';		
	}
	echo json_encode($output);
}
?>