<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'employee_data');

    if(isset($_POST['delete']))
    {
        $Id = $_POST['unique_id'];

        $query = "DELETE FROM users WHERE unique_id='$Id'";
        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            echo "<script>alert('Data Deleted Successfully..!!');
             window.location.href = 'managemem.php';
            </script>";

        }
        else
        {
            echo "<script>alert('Data not deleted,please try again..!!');
            window.location.href = 'deleteuser.php';
            </script>";
        }

    }
?>



