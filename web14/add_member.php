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
		<a href="member.php"><h5 class="btn btn-success btn-sm"><<ย้อนกลับ</h5></a>
		
			<div class="card border-primary mb-3" >

				  	<div class="card-header text-center"><h1>เพิ่มข้อมูล</h1></div>
				  	<div class="card-body text-primary">
				  		<div class="row">
				  			
				  				
							    	<div class="form-group col-12">
							    		<label for="exampleInputEmail1">รหัสนักศึกษา</label>
							    		<input type="text" class="form-control" id="Std_id"  placeholder="ex 13590xxx">
							    	</div>
									  <div class="form-group col-6">
									    <label for="exampleInputEmail1">ชื่อ</label>
									    <input type="text" class="form-control" id="inputName" placeholder="ชื่อ"> 
									  </div>
									  <div class="form-group col-6">
									    <label for="exampleInputPassword1">นามสกุล</label>
									    <input type="text" class="form-control" id="inputsurname" placeholder="นามสกุล">
									  </div>
									   <div class="form-group col-6">
									    <label for="exampleInputPassword1">ชื่อเล่น</label>
									    <input type="text" class="form-control" id="inputnick" placeholder="ชื่อเล่น">
									  </div>
									  <div class="form-group col-6">
									    <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
									    <input type="text" class="form-control" id="inputnum" placeholder="08xxxxxxxx">
									  </div>
								
							
                               <div class="col-6">
                               		<div class="form-group ">
									    <label for="exampleInputPassword1">ชื่อในคณะ</label>
									    <input type="text" class="form-control" id="inputsname" placeholder="ชื่อในคณะ">
									  </div>
									<div class="form-group ">
										<label for="exampleInputPassword1">instragram</label>
										<input type="text" class="form-control" id="inputig" placeholder="https://www.instagram.com/xxxxx">
									</div>
									<div class="form-group ">
										<label for="exampleInputPassword1">facebook</label>
										<input type="text" class="form-control" id="inputface" placeholder="https://www.facebook.com/xxxxxx">
									</div>
									<div class="form-group ">
										<label for="exampleInputPassword1">line</label>
										<input type="text" class="form-control" id="inputline" placeholder="line id">
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
							    <input type="text" class="form-control" id="inputno"  >
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">ตำบล/แขวง</label>
							    <input type="text" class="form-control" id="inputdt"  ">
							  </div>
							   <div class="form-group col-4">
							    <label for="exampleInputPassword1">อำเภอ/เขต</label>
							    <input type="text" class="form-control" id="inputamp"  ">
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">จังหวัด</label>
							    <input type="text" class="form-control" id="inputpv"  ">
							  </div>
							  <div class="form-group col-4">
							    <label for="exampleInputPassword1">รหัสไปรษณีย์</label>
							    <input type="text" class="form-control" id="inputpost"  ">
							  </div>
						</div>
		  			</div>
		  			 <button type="submit" class="btn btn-primary" id="btn-edit">ADD MEMBER</button>
			</div>
		
	</div>



</body>
<script type="text/javascript">
	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script type="text/javascript">
	  $('#btn-edit').on('click',function(){
	   var name = $('#inputName').val();
	   var surname = $('#inputsurname').val();
	   var nick = $('#inputnick').val();
	   var phonenumber = $('#inputnum').val();
	   var ig = $('#inputig').val();
	   var facebook =  $('#inputface').val();
	   var line =  $('#inputline').val();
	   var img =  $('#inputimg').val();
	   var sname =  $('#inputsname').val();

	   

	   var no =  $('#inputno').val();
	   var dis =  $('#inputdt').val();
	   var amp =  $('#inputamp').val();
	   var pro =  $('#inputpv').val();
	   var post =  $('#inputpost').val();

	   var id =  $('#Std_id').val();


	   var formData = new FormData();

	   		formData.append('inputName',name);
		 	formData.append('inputsurname',surname);
		 	formData.append('inputnick',nick);
		 	formData.append('inputnum',phonenumber);
		 	formData.append('inputig',ig);
		 	formData.append('inputface',facebook);
		 	formData.append('inputline',line);
		 	formData.append('inputimg',img);
		 	formData.append('inputsname',sname);

		 	formData.append('inputno',no);
		 	formData.append('inputdt',dis);
		 	formData.append('inputamp',amp);
		 	formData.append('inputpv',pro);
		 	formData.append('inputpost',post);

		 	formData.append('Std_id',id);

		 	if($('input#uploadfile')[0].files[0]){
		 		formData.append('uploadfile', $('input#uploadfile')[0].files[0]);
		 		formData.append('iuploadfile',1);
		 	}else{
		 		formData.append('iuploadfile',0);
		 	}

	   
	  $.ajax({
	        type: "POST",
	        mimeTypes:"multipart/form-data",
	        url: "structure/db_addmember.php",
	        contentType: false,
    		processData: false,
	        data: formData,
	        success: function(data) {
	         alert(data);
	    window.location.href = "member.php";
	        },
	        
	       });



	 });


 </script>
</html>	