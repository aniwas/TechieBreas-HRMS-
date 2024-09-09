<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $unique = $_POST['unique_id'];
    $Emp_id = $_POST['emp_id'];
    $Username = $_POST['fname'];
    $Surname = $_POST['sname'];
    $email = $_POST['email'];
    $Joning_date = $_POST['joining_date'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address1'];
    $Mobileno = $_POST['mobileno'];
    $Password = $_POST['password'];
    $Image  = $_POST['img'];
}

// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "employee_data";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successfull

if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    // submitting to database
    
    $sql = "INSERT INTO `users` ( `unique_id`,`emp_id`, `fname`, `sname`, `email`, `joining_date`, `gender`, `address1`, `mobileno`, `password`, `img`) VALUES ( '$unique','$Emp_id', '$Username', '$Surname', '$email', '$Joining_date', '$Gender', '$Address', '$Mobileno', '$Password', '$Image')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Member added Successfully..!!');
        window.location.href = 'managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Not Saved...Please try again.!!');
        window.location.href = 'insertuser.php';
        </script>";
        
    }
}
?>