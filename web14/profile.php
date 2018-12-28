<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single Blog</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header>
   <?php 
        require_once('structure/header.php');
        require_once('structure/connectDB.php');
    ?>
</header><!-- .site-header -->



         <?php  
            if(isset($_GET['id'])){
                 $sql = "SELECT * FROM member where Std_id = ".$_GET['id'] ;
                if($result=$conn->query($sql)){
                if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
        ?>
                    
                        <section class="wrapper style1">
                            <div class="inner">
                                <div class="flex flex-2">
                                     <div class="col col1">
                                        <div class="">
                                            <img src="<?php echo $row['image'] ?>" style="width: 100%;">
                                        </div>
                                         
                                    </div><!-- .col -->
                                    <div class="col col2">
                                        <a href="member.php"><h5 class="btn btn-success btn-sm" style="color: white;"><<ย้อนกลับ</h5></a>
                                        <h5> ชื่อ: <?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </h5>
                                        <h5> ชื่อเล่น: <?php echo $row['nickname']; ?>  </h5>
                                        <h5> ชื่อในคณะ: <?php echo $row['sname']; ?>  </h5>
                                        <h5> เบอร์โทรศัพท์: <?php echo $row['phonenumber']; ?> </h5>
                                        <h5> instragram:  <a href="<?php echo $row['ig']; ?>"><?php echo $row['ig']; ?></a> </h5>
                                        <h5> facebook:  <a href="<?php echo $row['facebook']; ?>"><?php echo $row['facebook']; ?></a> </h5>
                                        <h5> line:  <a href="<?php echo $row['line_id']; ?>"><?php echo $row['line_id']; ?></a> </h5>
                                         <h5> ที่อยู่: <?php echo $row['H_no']; ?> <?php echo $row['district']; ?>  <?php echo $row['amphur']; ?> <?php echo $row['province']; ?> <?php echo $row['post']; ?></h5>
                                         <a href="profile_edit.php?id=<?php echo $row['Std_id'];?>"> <button>แก้ไข</button></a>
                                    </div>
                                    
                                   
                                </div>
                                
                            </div>
                        </section>
                  
                   
                    
        <?php 
                            }
                        }
                    }
                }
        ?>

       
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>