<?php
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
include('function.php');
if(isset($_POST["operation"]))
{	
	if($_POST["operation"] == "Edit")
	{	
		$ghichu='';
		$luongcoban=$_POST["luongcoban"];
		$hesoluong=$_POST["hesoluong"];

		$ghichu = 'T'.$_POST["phucap_ghichu1"].':'.$_POST["phucap_tien1"].';T'.$_POST["phucap_ghichu2"].':'.$_POST["phucap_tien2"].
		';T'.$_POST["phucap_ghichu3"].':'.$_POST["phucap_tien3"].';T'.$_POST["phucap_ghichu4"].':'.$_POST["phucap_tien4"].
		';P'.$_POST["phat_ghichu1"].':'.$_POST["phat_tien1"].';P'.$_POST["phat_ghichu2"].':'.$_POST["phat_tien2"].
		';P'.$_POST["phat_ghichu3"].':'.$_POST["phat_tien3"].';P'.$_POST["phat_ghichu4"].':'.$_POST["phat_tien4"];
		$statement = $connection->prepare(
			"UPDATE luong
			SET LuongCB=:lcb, HeSoLuong=:hsl, GhiChu=:ghichu
			WHERE LuongId = :id
			"
		);
		$result = $statement->execute(
			array(
				':id'	=> 	$_POST["luong_id"],
				':lcb' =>	$luongcoban,
				':ghichu' =>	$ghichu,
				':hsl' => 	$hesoluong				
			)
		);

		if(!empty($result))
		{
			echo "Đã sửa xong";
		}
	}
}

?>