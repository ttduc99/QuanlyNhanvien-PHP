<?php
// select nhanvien
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
    
		$query0 = "SELECT * FROM nhanvien WHERE Id = '".$_POST["nhanvien_idd"]."'";
		$statement0 = $connection->prepare($query0);
		$statement0->execute();
		$result0 = $statement0->fetchAll();
if($result0[0]['Password']==$_POST["pass"]){
    $gioitinh=(int)$_POST["gioitinh_add"];
    $ngaysinh = date("Y-m-d", strtotime($_POST["birthday_add"]));

    $statement = $connection->prepare(
        "UPDATE nhanvien
        SET Ho=:ho, Ten=:ten, NgaySinh=:ngaysinh, DiaChi=:diachi, GioiTinh=:gioitinh,
            SoDienThoai=:sdt
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
            ':id'=>	$_POST["nhanvien_idd"]
        )
    );
    
    if(!empty($result))
    {
        echo 'Thông tin đã được sửa';
    }
}
else{
    echo 'Sai mật khẩu';
}
		
?>