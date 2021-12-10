<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:lhomepage.php");
}
include('tnavbar.php');
include('../landlord/addproperty-config.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="styles.css" type="text/css" rel="Stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95dc93da07.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<br>
<br>
<br>
<div class="container">
  <!-- <center><h3>Add Property</h3></center> -->
  
  <center><h3>Book Property</h3></center>
  <form method="POST" action="reservation-config.php" enctype="  multipart/form-data">
    <div class="form-group">
      <label for="date_in">Date In:</label>
      <input type="date" class="form-control" id="date_in" name="date_in" required>
    </div>
    <div class="form-group">
      <label for="date_out">Date Out:</label>
      <input type="date" class="form-control" id="date_out" name="date_out" required>
    </div>
    <input name="lat" type="text" id="lat" hidden>
    <input name="lng" type="text" id="lng" hidden>
    <br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Book Property" name="reservation">
    </div>
  </form>
  <br><br>
</div>


