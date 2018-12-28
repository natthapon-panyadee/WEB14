<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB 14 MEMBER</title>

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
</head>
<body>
<header>
    <?php  
        require_once('structure/header.php');
    ?>
</header><!-- .site-header -->


<?php 
    require_once('structure/connectDB.php');
 ?>
    



<div class="outer-container home-page">
    <div class="container-fluid mt-4">
       
        <div class="row">
             <?php  

                 $sql = "SELECT * FROM member order by Std_id ";
                if($result=$conn->query($sql)){
                if($result->num_rows>0){
                 while($row = $result->fetch_assoc()){
        ?>
        
            <div class="col-12 col-md-6 col-lg-3 no-padding">
               
                <div class="portfolio-content " >
                     
                    <figure class="effect-bubba">
                       
                        <img src="
                        <?php  
                        if($row['image2']){
                            echo 'images/images/'.$row['image2'];
                            }else{
                                 echo $row['image'];
                                 }

                         ?>"

                         >
                         
                    </figure>
                    
                        <div class="entry-content flex flex-column align-items-center justify-content-center">
                            <a href="profile.php?id=<?php echo $row['Std_id'];?>">
                                <h3><a href="profile.php?id=<?php echo $row['Std_id'];?>"><?php echo $row['Std_id']; ?></a></h3>
                                <h5><a href="profile.php?id=<?php echo $row['Std_id'];?>"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></a></h5>

                                <div><a href="profile.php?id=<?php echo $row['Std_id'];?>">ckick to more</a></div>
                            </a>
                        </div><!-- .entry-content -->
                        
                </div>

                <!-- .portfolio-content -->
            </div>
            <!-- .col -->
            <?php 
                    }
                }
            }
            ?>
          

        </div><!-- .row -->
        
    </div><!-- .container-fluid -->
</div><!-- .outer-container -->




<!-- <div class="scroll-down flex flex-column justify-content-center align-items-center d-none d-lg-block">
    <span class="arrow-down flex justify-content-center align-items-center"><img src="images/arrow-down.png" alt="arrow"></span>
    <span class="scroll-text">Scroll Down</span>
</div> --><!-- .scroll-down -->

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>