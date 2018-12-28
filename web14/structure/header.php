<?php 
    session_start();
 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="member.php">WEB14</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="member.php">MEMBER <span class="sr-only">(current)</span></a>
          </li>
         
         
        </ul>
        <div class="nav navbar-right">
        <a href="add_member.php"><button style="float: right; margin-left: 30px; " class="btn btn-primary">ADD MEMBER</button></a>
        </div>
         <?php 
            require_once('connectDB.php');
            if(isset($_SESSION['user'])){
              $user = $_SESSION['user'];
                $sql = "SELECT * FROM tb_user WHERE user_id = '$user'";
                if($result=$conn->query($sql)){
                if($result->num_rows>0){
                 while($row = $result->fetch_assoc()){
           ?>
          <div class="nav-item " style="margin-left: 50px;">
            ขณะนี้ ::  <?php echo $row['user_name']; ?> :: กำลังใช้งาน
          </div>
           <div style="margin-left: 30px;" ><a href="structure/logout.php" class="btn btn-danger btn-sm" style="color: white;">ออกจากระบบ</a></div>
          <?php 
                  }
                }
              }
            }
           ?>

      </div>
    </nav>

