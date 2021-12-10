<?php 

include("lnavbar.php");

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<br>
<br>
<br>
<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Update Landlord</h3><br>
  <form method="POST" action="landlord-config.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="pname">Full Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter Your Full Name" name="pname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password1">Password:</label>
      <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password" required>
    </div>
    <div class="form-group">
      <label for="password2">Confirm Password:</label>
      <input type="password" class="form-control" id="password2" placeholder="Enter Password Again" required>
    </div>
    <div class="form-group">
      <label for="phone_no">Phone Number/Contact:</label>
      <input type="text" class="form-control" id="phone_no" placeholder="Enter Your Phone Number" name="contact" required>
    </div>
    <br>
    <center><button id="submit" name="landlord_update" class="btn btn-primary btn-block" onclick="return Validate()">Update</button></center><br>
    <br><br>
  </form>
</div>


<script type="text/javascript">
  function Validate() {
    var password = document.getElementById("password1").value;
    var confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }
</script>
