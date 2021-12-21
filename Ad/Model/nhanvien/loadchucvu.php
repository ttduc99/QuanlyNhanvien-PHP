<?php
	$connect = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
	$query = "SELECT * FROM chucvu";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();

	if($total_row > 0)
	{
		foreach($result as $row)
		{			
			$output .= '
						<option value="'.$row["ChucVuId"].'">'.$row["TenChucVu"].'</option>
			';
		}
	}
	else
	{
		$output .= '
						<option value="1">Tổng giám đốc</option>
						<option value="0">Chủ tịch</option>
		';
	}
	echo $output;
?>
