<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{			
		$ngaysinh = date("Y-m-d", strtotime($_POST["birthday_add"]));
		$gioitinh=(int)$_POST["gioitinh_add"];

		//them hopdong
		$start = date("Y-m-d", strtotime($_POST["dateStart_add"]));
		$end =  date("Y-m-d", strtotime($_POST["dateEnd_add"]));
		$query2 = "INSERT INTO hopdong (BatDau, KetThuc) VALUES ('".$start."', '".$end."')";
		$statement2 = $connection->prepare($query2);
		$statement2->execute();

		//select hop dong
		$query0 = "SELECT * FROM hopdong ORDER BY HDLDId DESC LIMIT 1";
		$statement0 = $connection->prepare($query0);
		$statement0->execute();
		$result0 = $statement0->fetchAll();
		$hdldid=$result0[0]['HDLDId'];
		
		//them luong
		$luongcb=0;
		$hesol=0;
		$query5 = "INSERT INTO luong (LuongCB, HeSoLuong, GhiChu) VALUES ('.$luongcb.', '.$hesol.','')";
		$statement5 = $connection->prepare($query5);
		$statement5->execute();

		// select luong
		$query6 = "SELECT * FROM luong ORDER BY LuongId DESC LIMIT 1";
		$statement6 = $connection->prepare($query6);
		$statement6->execute();
		$result6 = $statement6->fetchAll();
		$luongid=$result6[0]['LuongId'];

		//sinh id
		$id="";
		if($hdldid>100){
			$id= (string)$_POST["chucvu_add"]."".(string)$_POST["phongban_add"]."".(string)$hdldid;
		}
		else if($hdldid>=10&&$hdldid<100){
			$id= (string)$_POST["chucvu_add"]."".(string)$_POST["phongban_add"]."0".(string)$hdldid;
		}
		else if($hdldid<10){
			$id= (string)$_POST["chucvu_add"]."".(string)$_POST["phongban_add"]."00".(string)$hdldid;
		}
		//them nhanvien
		$status=1;
	
		$statement = $connection->prepare("
			 INSERT INTO nhanvien (Id, Ho, Ten, NgaySinh, DiaChi, GioiTinh, SoDienThoai, ChucVuId, PhongBanId, HDLDId, LuongId,Password,Status) 
			VALUES (:id,:ho,:ten,:ngaysinh,:diachi,:gioitinh,:sdt,:chucvu,:phongban,:hdld,:luong,:pass,:status)
		");
		$result = $statement->execute(
			array(
				':id'	=>	$id,
				':ho' => $_POST["ho_add"],
				':ten' => $_POST["ten_add"],
				':ngaysinh' => $ngaysinh,
				':diachi' => $_POST["diachi_add"],
				':gioitinh' => $gioitinh,
				':sdt' => $_POST["sdt_add"],
				':chucvu' => (int)$_POST["chucvu_add"],
				':phongban' => (int)$_POST["phongban_add"],
				':hdld' => $hdldid,
				':luong' => $luongid,
				':pass' => $_POST["sdt_add"],
				':status' => $status
			)
		);
		if(!empty($result))
		{
			echo 'Nhân viên đã được thêm';
		}
	}
	if($_POST["operation"] == "Edit")
	{	
		// select nhanvien
		$query0 = "SELECT * FROM nhanvien WHERE Id = '".$_POST["nhanvien_id"]."'";
		$statement0 = $connection->prepare($query0);
		$statement0->execute();
		$result0 = $statement0->fetchAll();
		$hdldid=$result0[0]['HDLDId'];

		// data
		$ngaysinh = date("Y-m-d", strtotime($_POST["birthday_add"]));
		$start = date("Y-m-d", strtotime($_POST["dateStart_add"]));
		$end =  date("Y-m-d", strtotime($_POST["dateEnd_add"]));
		$gioitinh=(int)$_POST["gioitinh_add"];
		$status=1;

		$statement1 = $connection->prepare(
			"UPDATE hopdong
			SET BatDau=:batdau,KetThuc=:ketthuc
			WHERE HDLDId = :id
			"
		);
		$result1 = $statement1->execute(
			array(
				':id'	=> 	$hdldid,
				':batdau' =>	$start,
				':ketthuc' => 	$end				
			)
		);

		$statement = $connection->prepare(
			"UPDATE nhanvien
			SET Ho=:ho, Ten=:ten, NgaySinh=:ngaysinh, DiaChi=:diachi, GioiTinh=:gioitinh,
				SoDienThoai=:sdt, ChucVuId=:chucvu, PhongBanId=:phongban,
				Password=:pass,Status=:statuss
			WHERE Id = :id
			"
		);
		$result = $statement->execute(
			array(
				':ho' => $_POST["ho_add"],
				':ten' => $_POST["ten_add"],
				':ngaysinh' => $ngaysinh,
				':diachi' => $_POST["diachi_add"],
				':gioitinh' => $gioitinh,
				':sdt' => $_POST["sdt_add"],
				':chucvu' => (int)$_POST["chucvu_add"],
				':phongban' => (int)$_POST["phongban_add"],
				':pass' => $_POST["sdt_add"],
				':statuss' => (int)$status,
				':id'=>	$_POST["nhanvien_id"]
			)
		);
		
		if(!empty($result))
		{
			echo 'Nhân viên đã được sửa';
		}
	}
}

?>