<?php 
	require_once('connectDB.php');

	if (isset($_POST['Std_id'])>0){
		$Std_id = $_POST['Std_id'];
		$inputName = $_POST['inputName'];
		$inputsurname = $_POST['inputsurname'];
		$inputnick = $_POST['inputnick'];
		$phonenumber = $_POST['inputnum'];
		$inputig = $_POST['inputig'];
		$inputface = $_POST['inputface'];
		$inputline = $_POST['inputline'];
		$sname = $_POST['inputsname'];

		$inputno = $_POST['inputno'];
		$inputdt = $_POST['inputdt'];
		$inputamp = $_POST['inputamp'];
		$inputpv = $_POST['inputpv'];
		$inputpost = $_POST['inputpost'];
		
		
		
		$sql = " UPDATE member  SET fname = '$inputName', lname = '$inputsurname', nickname = '$inputnick', phonenumber = '$phonenumber' , ig = '$inputig', facebook = '$inputface' , line_id = '$inputline', H_no = '$inputno' , district = '$inputdt' , amphur = '$inputamp', province = '$inputpv' , post = '$inputpost', sname = '$sname' WHERE Std_id = '$Std_id' ";
		// echo $sql;
		if($conn->query($sql)){
			echo "แก้ไขสำเร็จ";
		}
		
	}else{
			echo "แก้ไขผิดพลาด";
		}
	

 ?>