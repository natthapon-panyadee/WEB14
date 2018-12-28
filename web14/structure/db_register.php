<?php
	// require_once '/connectDB.php';

    require_once('connectDB.php'); // This is line 38

	if (isset($_POST['inputUsername'])){
		
		$inputUsername = $_POST['inputUsername'];
		$inputPassword = $_POST['inputPassword'];
		$inputCfPassword = $_POST['inputCfPassword'];
		
		
		$sql = "INSERT INTO tb_user ( user_name,user_pass) VALUES ( '$inputUsername', '$inputPassword')";
		echo $sql;
		if($conn->query($sql)){
			echo "สมัครสมาชิกสำเร็จ";
		}else{
			echo "สมัครสมาชิกผิดพลาด";
		}
		
	}

?>