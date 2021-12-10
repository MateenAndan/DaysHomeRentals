<?php 
session_start();
if(isset($_SESSION["email"])){
  // header('C:\xampp\htdocs\DaysHomeRentals\index.php');
}

include("lnavbar.php");
include("landlord-config.php");

 ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<br>
<br>
<br>
<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Landlord Login</h3><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Your password" name="password" required>
    </div>
    <div class="form-group">
      <a href="forgot-password-owner.php">Lost your Password ? </a> 
    </div>
    <center><input type="submit" id="submit" name="landlord_login" class="btn btn-primary btn-block" value="Login"></center>
  </form>
</div>