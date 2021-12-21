<?php
// select nhanvien
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
    
		$query0 = "SELECT * FROM nhanvien WHERE Id = '".$_POST["user_id"]."'";
		$statement0 = $connection->prepare($query0);
		$statement0->execute();
        $result0 = $statement0->fetchAll();
        
        $query1 = "SELECT * FROM luong WHERE LuongId = '".$result0[0]['LuongId']."'";
		$statement1 = $connection->prepare($query1);
		$statement1->execute();
        $result1 = $statement1->fetchAll();

        $ghichu=$result1[0]['GhiChu'].'TSinh nhật:'.$_POST["tien"];
    $statement = $connection->prepare(
        "UPDATE luong
        SET GhiChu=:ghichu
        WHERE LuongId = :id
        "
    );
    $result = $statement->execute(
        array(
            ':ghichu' =>  $ghichu,
            ':id' => $result1[0]['LuongId']
        )
    );
    
    if(!empty($result))
    {
        echo 'Đã thưởng Sinh nhật';
    }

		
?>