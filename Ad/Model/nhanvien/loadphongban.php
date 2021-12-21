<?php
	$connect = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
	$query = "SELECT * FROM phongban";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();

	if($total_row > 0)
	{
		foreach($result as $row)
		{			
			$output .= '
						<option value="'.$row["PhongBanId"].'">'.$row["TenPB"].'</option>
			';
		}
	}
	else
	{
		$output .= '
						<option value="0">Quản trị</option>
						<option value="1">Phòng Sale</option>
						<option value="2">Phòng IT</option>
						<option value="3">Phòng Tạp vụ</option>
		';
	}
	echo $output;
?>
