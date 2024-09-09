<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: Welcome.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>TecheBears HRMS</header>
      <form action="#" method="POST" enctype="" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="register.php" style="color: green;">Signup now</a></div>
      <div class="link">Don't Remember Password? <a href="php/userlogin.php" style="color: green;">Forget Pass</a></div>
    </section>
  </div>

  


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
