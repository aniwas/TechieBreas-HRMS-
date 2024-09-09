<?php 
  session_start();
  if(isset($_SESSION['unique_id']))
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Techienears HRMS</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="sname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
            <label>Employee id</label>
            <input type="text" name="emp_id" placeholder="Enter employee id" required>
        </div>
        <div class="field input">
            <label>Select joining date</label>
            <input type="date" name="joining_date" placeholder="Last name" required>
        </div>
        <div class="field input1" style="display:inline;">
             <label>Select Your Gender:<br>
             <input type="radio" name="gender" value="Male" required> Male
             <input type="radio" name="gender" value="Female"> Female
             <input type="radio" name="gender" value="Other"> Other
             </label>
        </div>
        <div class="field input">
          <label>Address</label>
          <input type="text" name="address1" placeholder="Enter your address" required>
        </div>
        <div class="field input">
          <label>Mobile NO </label>
          <input type="tel" name="mobileno" placeholder="Enter mobile number" required>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php" style="color: green">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
