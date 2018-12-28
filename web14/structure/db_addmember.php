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


		$uploadDirectory = "../images/images/";
		if($_POST['iuploadfile']==1){	

			$fileName = $_FILES['uploadfile']['name'];
			
			$tmp = explode('.', $fileName);
			$extension = end($tmp);
			$newfilename="k".date("m-d-y").date("h-i-sa").".".$extension;
			$fileTmpName  = $_FILES['uploadfile']['tmp_name'];
			$uploadPath = $uploadDirectory . basename($newfilename);
			move_uploaded_file($fileTmpName, $uploadPath);
			echo "result";
			
		}

	
		
		
		
		$sql = " INSERT INTO `member`(`Std_id`, `fname`, `lname`, `H_no`, `district`, `amphur`, `province`, `post`, `nickname`, `ig`, `facebook`, `line_id`, `phonenumber`,sname";
		if ($_POST['iuploadfile']==1) {
			$sql.= ",image2";
		}
		$sql.=")VALUES ('$Std_id','$inputName','$inputsurname','$inputno','$inputdt','$inputamp','$inputpv','$inputpost','$inputnick','$inputig','$inputface','$inputline','$phonenumber', '$sname' ";
		if ($_POST['iuploadfile']==1) {
			$sql.= ",'$newfilename'";
		}
		$sql.=")";
		// echo $sql;
		if($conn->query($sql)){
			echo "เพิ่มสมาชิกสำเร็จ";
		}
		
	}else{
			echo "แก้ไขผิดพลาด";
		}
	

 ?>