<?php
function login($userid, $password) {
	include("Mysql.php");
	if(isset($_COOKIE["type"]))
	{
		header("location:index.php");
	}

	$message = '';

	if(isset($_POST["login"])){
		if(empty($userid) || empty($password))
		{
			$message = "<div class='alert alert-danger'>Không được để trống</div>";
		}
		else
		{
			$query = "SELECT * FROM nhanvien WHERE Id = '$userid'";
			$statement = $connect->prepare($query);
			$statement->execute();
			if($statement->rowCount()>0){
				$result = $statement->fetchAll(\PDO::FETCH_ASSOC);
				if($result[0]['Password']==$password){
					$roleID= $result[0]['ChucVuId'];					
					// $query2 = "SELECT * FROM chucvu WHERE ChucVuId = '$roleID'";
					// $statement2 = $connect->prepare($query2);
					// $statement2->execute();
					// $result2 = $statement2->fetchAll(\PDO::FETCH_ASSOC);
					$roleId = $result[0]['ChucVuId'];
					setcookie("Role",$roleId , time() + (86400 * 30), "/"); // 86400 = 1 ngay
					$name = $result[0]['Ho']. " " .$result[0]['Ten'];
					setcookie("Name",$name , time() + (86400 * 30), "/"); // 86400 = 1 ngay
					header("location:index.php");
				}
				else{
					$message = "<div class='alert alert-danger'>Sai tài khoản hoặc mật khẩu</div>";
				}
			}	
			else{
				$message = "<div class='alert alert-danger'>Sai tài khoản hoặc mật khẩu</div>";
			}		
		}
	}
	echo $message;
}
?>