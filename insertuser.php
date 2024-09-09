<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: managemem.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <style>
        .Add_btn{
    padding: 5px;
    background: #0B87A6;
    text-decoration: none;
    /* float: right; */
    margin-top: -1px;
    margin-right: 2px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    transition: 0.5s;
    transition-property: background;
  }
  
  .Add_btn:hover{
    background: #19B3D3;
  }
  .container{
    background:#b7f7d7;
    width: 550px;
    height: 620px;
    margin-top: 90px;
    margin-left: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    /* margin: auto; */
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
    overflow: hidden;
}
.container form{
    max-width: 400px;
    padding: 0 70px;
    position: absolute;
    top: 100px;
    transition: transform 1s;
}
form input{
    width: 100%;
    height: 40px;
    margin-top: 0px;
    margin-bottom: 10px;
    padding: 0 10px;
    border: 1px solid #ccc;
}
  
  
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Member</h1>
        <form action="insertfile.php" method="POST" >
            <input type="text" placeholder="Username" name="fname" required>
            <input type="text" placeholder="Surname" name="sname" required>
            <input type="text" placeholder="Employee Id" name="emp_id" required>
            <input type="text" placeholder="E-mail" name="email" required>
            <input type="date" placeholder="Joining Date" name="joining_date" required>
            <input type="text" placeholder="Gender" name="gender" required>
            <input type="text" placeholder="Address" name="address1" required>
            <input type="tel" placeholder="Mobile Number" name="mobileno" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="file" placeholder="Upload user image" name="img" required>
            <button type="submit" class="Add_btn" >Save data</button>
        </form>
    </div>
</body>
</html>


