<?php
// select nhanvien
$connection = new PDO("mysql:host=localhost;dbname=bai3", "root", "");
    
		$query0 = "SELECT * FROM nhanvien WHERE Id = '".$_POST["id"]."'";
		$statement0 = $connection->prepare($query0);
		$statement0->execute();
		$result0 = $statement0->fetchAll();
if($result0[0]['Password']==$_POST["passs"]){

    $statement = $connection->prepare(
        "UPDATE nhanvien
        SET Password=:pass
        WHERE Id = :id
        "
    );
    $result = $statement->execute(
        array(
            ':pass' => $_POST["pass_edit"],
            ':id' => $_POST["id"]
        )
    );
    
    if(!empty($result))
    {
        echo 'Mật khẩu đã được sửa';
    }
}
else{
    echo 'Sai mật khẩu';
}
		
?>