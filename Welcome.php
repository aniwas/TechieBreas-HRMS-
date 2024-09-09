<?php
session_start();


if(!isset($_SESSION['unique_id'])){
    header("location: users.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome dashboard</title>
    <link rel="stylesheet" href="dashstyle.css">
    <script src="https://kit.fontawesome.com/2edfbc5391.js"crossorigin="anonymous"></script>
    <style>
      .far{
        color:#a7abde;
        padding-left: 30px;
        height: 100px;
        
      }
      .col-div-3 .box p{
        font-size: 25px;
        height: 100px;

      }
      .box .fas{
        color:#a7abde;
        position:relative;
        padding-top: 50px;
        height: 100px;
        

      }
      .box .fas .fa-home{
        color:#a7abde;
        padding-left: 50px;
        height: 100px;
      }
      .col-div-3{
        height: 20%;
        width: 33%;
        
      }
      .box{
        height: 75%;
      }
      .box:hover{
        height: 80%;
        border:5px solid yellowgreen;
      }
    </style>

</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Techie<span>Bears</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <?php 
            $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "employee_data";
      
      // creating connection
      
      $conn = mysqli_connect($servername, $username, $password, $database);

            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
        <img style="width:150px;height:150px;object-fit:cover;border-radius:150px;" src="php/images/<?php echo $row['img']; ?>" alt="">
        <h4> <?php echo $row['fname']. " " . $row['sname'] ?> </h4>
      </center>
      <a href="Welcome.php" class="active"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="noticebrd.php"><i class="fas fa-bullhorn"></i><span>Notice Board</span></a>
      <a href="complaint.php"><i class="fas fa-envelope-open-text"></i><span>Register Complaint</span></a>
      <a href="users.php"><i class="fas fa-comments"></i><span>Chat with collogues</span></a>
      <a href="userphoto.php"><i class="fas fa-camera-retro"></i><span>Photo Gallery</span></a>
      <a href="updateuser1.php"><i class="fas fa-camera-retro"></i><span>Update Credencials</span></a>
      <!-- <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end-->

    <div class="content"> 
      <h1>Welcome to Dashboard</h1>
      <?php 
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "employee_data";
      
      // creating connection
      
      $conn = mysqli_connect($servername, $username, $password, $database);

      $unique = $_SESSION['unique_id'];
      $sql = "SELECT * FROM users where unique_id='$unique'";
      $result = $conn->query($sql);
      if($result->num_rows >0){
          while($row = $result->fetch_assoc()){
      
      echo '<div class="col-div-3">
        <div class="box">
          <p>'.$row['fname']." ".$row['sname'].'<br><span>Your Username</span></p>
          <i class="far fa-user fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['emp_id'].'
      
     <br><span>Your employee id.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['email'].'
      
     <br><span>Your email id.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['joining_date'].'
      
     <br><span>Your joining date.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['gender'].'
      
     <br><span>Your gender.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['address1'].'
      
     <br><span>Your address.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>'.$row['mobileno'].'
      
     <br><span>Your mobileno.</span></p>
          <i class="fas fa-home fa-2x"></i>
        </div>
      </div>';
          }}else {
            echo "O records found !";
          }
          ?>
    
    </div>
    
</body>
</html>