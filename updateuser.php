<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateuser</title>
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
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'employee_data');

    $Id = $_POST['unique_id'];

    $query = "SELECT * FROM users WHERE unique_id='$Id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    <div class="container">
        <h1>Update Member</h1>
        <form action="" method="POST" >
            <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
            <input type="hidden" name="unique_id" value="<?php echo $row['unique_id'] ?>">
            <input type="text" placeholder="Employee ID" name="emp_id" value="<?php echo $row['emp_id'] ?>" required>
            <input type="text" placeholder="Username" name="fname" value="<?php echo $row['fname'] ?>" required>
            <input type="text" placeholder="Surname" name="sname" value="<?php echo $row['sname'] ?>" required>
            <input type="text" placeholder="Role" name="role" value="<?php echo $row['role'] ?>" required>
            <input type="email" placeholder="E-mail" name="email" value="<?php echo $row['email'] ?>" required>
            <input type="text" placeholder="Joining Date" name="joining_date" value="<?php echo $row['joining_date'] ?>" required>
            <input type="text" placeholder="Gender" name="gender" value="<?php echo $row['gender'] ?>" required>
            <input type="text" placeholder="Address" name="address1" value="<?php echo $row['address1'] ?>" required>
            <input type="tel" placeholder="Mobile Number" name="mobileno" value="<?php echo $row['mobileno'] ?>" required>
            <input type="password" placeholder="Password" name="password" value="<?php echo $row['password'] ?>" required>
            <button type="submit" name="update" class="Add_btn" >Update data</button>
        </form>
        <?php
            if(isset($_POST['update']))
            {
                $Emp_id = $_POST['emp_id'];
                $Username = $_POST['fname'];
                $Surname = $_POST['sname'];
                $Role = $_POST['role'];
                $email = $_POST['email'];
                $Joning_date = $_POST['joining_date'];
                $Gender = $_POST['gender'];
                $Address = $_POST['address1'];
                $Mobileno = $_POST['mobileno'];
                $Password = $_POST['password'];
                $Image = $_POST['img'];
               

                $query = "UPDATE users SET emp_id = '$Emp_id',fname = '$Username', sname = '$Surname', role = '$Role', email = '$email', joining_date = '$Joining_date',gender='$Gender',address1='$Address', mobileno='$Mobileno', password = '$Password', img = '$Image' WHERE unique_id='$Id'";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo "<script>alert('Updated Successfully..!!');
                    window.location.href = 'managemem.php';
                    </script>";
                }
                else
                {
                    echo "<script>alert('Not updated...Please try again.!!');
                    window.location.href = 'updateuser.php';
                    </script>";
                }
            }

        ?>
    </div>

            <?php
        }
    }
    else
    {
        echo'<script> alert("No Record Found"); </script>';
    }
    ?>
    
</body>
</html>