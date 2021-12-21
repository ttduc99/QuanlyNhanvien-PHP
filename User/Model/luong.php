<?php
include("Mysql.php");

$query = "SELECT * FROM luong";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
                    <tr>
                      <th>Lương cơ bản</th>
                      <th>Hệ số lương</th>
                      <th>Phụ cấp</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>

';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="30%">'.$row["LuongCB"].'</td>
			<td width="30%">'.$row["HeSoLuong"].'</td>
			<td width="20%">'.$row["PhuCap"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["LuongId"].'">Edit</button>
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["LuongId"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>
