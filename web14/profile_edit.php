<!DOCTYPE html>
<html>

<head>
	<title>edit prfile</title>


	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="js/custom.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<header>
	
	<?php 
		require_once('structure/header.php');
	 ?>
</header>
<body>

	<div class="container" style="margin-top: 100px;">
		 <?php  
		 require_once('structure/connectDB.php');
            if(isset($_GET['id'])){
                 $sql = "SELECT * FROM member where Std_id = ".$_GET['id'] ;
                if($result=$conn->query($sql)){
                if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
        ?>
		<a href="member.php"><h5 class="btn btn-success btn-sm"><<ยกเลิก</h5></a>
			<div class="card border-primary mb-3" >
				  	<div class="card-header text-center"><h1>แก้ไขข้อมูล</h1></div>
				  	<div class="card-body text-primary">
				  		<div class="row">
					    <input type="hidden" id="Std_id" value="<?php echo $row['Std_id'] ?>">
							  <div class="form-group col-6">
							    <label for="exampleInputEmail1">ชื่อ</label>
							    <input type="text" class="form-control" id="inputName" value="<?php echo $row['fname'] ?>"> 
							  </div>
							  <div class="form-group col-6">
							    <label for="exampleInputPassword1">นามสกุล</label>
							    <input type="text" class="form-control" id="inputsurname" value="<?php echo $row['lname'] ?>">
							  </div>
							   <div class="form-group col-6">
							    <label for="exampleInputPassword1">ชื่อเล่น</label>
							    <input type="text" class="form-control" id="inputnick"  value="<?php echo $row['nickname'] ?>">
							  </div>
							  <div class="form-group col-6">
							    <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
							    <input type="text" class="form-control" id="inputnum"  value="<?php echo $row['phonenumber'] ?>">
							  </div>
							  <div class="col-6">
							  	 <div class="form-group ">
									    <label for="exampleInputPassword1">ชื่อในคณะ</label>
									    <input type="text" class="form-control" id="inputsname" value="<?php echo $row['sname'] ?>">
								  </div>
								  <div class="form-group ">
								    <label for="exampleInputPassword1">instragram</label>
								    <input type="text" class="form-control" id="inputig"  value="<?php echo $row['ig'] ?>">
								  </div>
								  <div class="form-group ">
								    <label for="exampleInputPassword1">facebook</label>
								    <input type="text" class="form-control" id="inputface"  value="<?php echo $row['facebook'] ?>">
								  </div>
								  <div class="form-group ">
								    <label for="exampleInputPassword1">line</label>
								    <input type="text" class="form-control" id="inputline"  value="<?php echo $row['line_id'] ?>">
								  </div>
							   </div>
							   <div class="col-6">
									<div class="">
										<div class="form-group">
											<label>รูป</label>
											<br>
											<input type="file" name="uploadfile" id="uploadfile" onchange="readURL(this);" accept="image/x-png,image/gif,image/jpeg"/>
											<br>
											<img id="blah" src="#" alt="your image" />
											
										</div>
									</div>
								</div>	
							  
							  
							
						</div>
		  			</div>
			</div>
			<div class="card border-primary mb-3" >
				  	
				  	<div class="card-body text-primary">
				  		<div class="row">
					    

							  <div class="form-group col-4">
							    <label for="exampleInputEmail1">บ้านเลขที่</label>
							    <input type="text" class="form-control" id="inputno"  value="<?php echo $row['H_no'] ?>">
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">ตำบล/แขวง</label>
							    <input type="text" class="form-control" id="inputdt"  value="<?php echo $row['district'] ?>">
							  </div>
							   <div class="form-group col-4">
							    <label for="exampleInputPassword1">อำเภอ/เขต</label>
							    <input type="text" class="form-control" id="inputamp"  value="<?php echo $row['amphur'] ?>">
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">จังหวัด</label>
							    <input type="text" class="form-control" id="inputpv"  value="<?php echo $row['province'] ?>">
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">รหัสไปรษณีย์</label>
							    <input type="text" class="form-control" id="inputpost"  value="<?php echo $row['post'] ?>">
							  </div>
						</div>
		  			</div>
		  			 <button type="submit" class="btn btn-primary" id="btn-edit">อัพเดท</button>
			</div>
		<?php 
						}
					}
				}
			}
		 ?>
	</div>



</body>


<script type="text/javascript">
	  $('#btn-edit').on('click',function(){
	   var name = $('#inputName').val();
	   var surname = $('#inputsurname').val();
	   var nick = $('#inputnick').val();
	   var phonenumber = $('#inputnum').val();
	   var ig = $('#inputig').val();
	   var facebook =  $('#inputface').val();
	   var line =  $('#inputline').val();
	   var sname =  $('#inputsname').val();

	   

	   var no =  $('#inputno').val();
	   var dis =  $('#inputdt').val();
	   var amp =  $('#inputamp').val();
	   var pro =  $('#inputpv').val();
	   var post =  $('#inputpost').val();

	   var id =  $('#Std_id').val();

	   
	  $.ajax({
	        type: "POST",
	        url: "structure/db_updateprofile.php",
	        data: {
	        'inputName': name,
		    'inputsurname': surname,
		    'inputnick': nick,
		    'inputnum': phonenumber,
		    'inputig': ig,
		    'inputface': facebook,
		    'inputline': line,
		    'inputsname': sname,

		    'inputno': no,
		    'inputdt': dis,
		    'inputamp': amp,
		    'inputpv': pro,
		    'inputpost': post,

		    'Std_id' : id
		    
	        },
	        success: function(data) {
	         alert(data);
	   		window.location.href = "index.php";
	        },
	        
	       });



	 });


 </script>
</html>