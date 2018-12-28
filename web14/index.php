<!-- register.html -->
<!DOCTYPE html>
<html>
 <?php 
 	require_once('structure/head.php');
  ?>
  <head>
  	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </head>
<body>

	<div class="container">
		<div class="col-4 offset-4">
			<div class="form-wrap mt-5">
				
				<div class="row mt-4 shadow-lg pt-4 pb-4" >
					<div class="col-12 text-center">
						<h4><strong>สมัครสมาชิก</strong></h4>
					</div>
					<div class="col-12">
						<div id="loginwithemail">
							
							<div class="form-group mt-4">
								<label for="inputFullName">ชื่อผู้ใช้งาน</label>
								<input type="text" class="form-control bg-light" id="inputUsername" placeholder="ชื่อผู้ใช้งาน">
							</div>
							<div class="form-group">
								<label for="inputPassword">รหัสผ่าน</label>
								<input type="password" class="form-control bg-light" id="inputPassword" placeholder="••••••••">
							</div>
							<div class="form-group">
								<label for="inputCfPassword">ยืนยันรหัสผ่าน</label>
								<input type="password" class="form-control bg-light" id="inputCfPassword" placeholder="••••••••">
								
							</div>
							
							<div class="text-center mt-4 mb-4">
								<button type="submit" id="btn-register" class="btn btn-danger rounded pl-4 pr-4" style="background-color: #2f3638 !important; border-color: #76b6c2">
									สมัครสมาชิก
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center mt-4 mb-65">
					<div class="col-12">
						มีบัญชีอยู่แล้ว ? <a href="login.php" class="text-danger" style="color: #76b6c2 !important;">เข้าสู่ระบบ</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript"> 
		$('#btn-register').on('click',function(){

			
			var user = $('#inputUsername').val();
			var password = $('#inputPassword').val();
			var conpass = $('#inputCfPassword').val();
			
			$.ajax({
				type: "POST",
				url: "structure/db_register.php",
				data: {
					
					'inputUsername': user,
					'inputPassword': password,
					'inputCfPassword': conpass
				},
				success: function(data) {
					alert(data);
         			window.location.href = "login.php";
		      },
		  });
		});
		
	 </script>
</body>