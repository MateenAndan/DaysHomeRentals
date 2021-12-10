<?php 
session_start();
if(!isset($_SESSION["email"])){
  header('location: ../index.php');
}
include('tnavbar.php');
include('tenant-config.php');
// include('config\config.php');
?>
<link href="styles.css" type="text/css" rel="Stylesheet" />
<br>
<br>
<br>

<div class="container">
  <?php 
        // include("config.php");
  $email= $_SESSION['email'];

  $sql="SELECT * from tenant where email='$email'";
  $result=mysqli_query($db,$sql);

  if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){

     ?>
     <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <center><h3 style="font-weight: bold; text-align: center;">Tenant Profile</h3></center>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['pname']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['email']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Contact:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['contact']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Contact:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['nationality']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <button class="rounded" onclick="document.location='booked.php'" style = "float: right;">View Booked Properties</button>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

  </div>
</div>
<?php }} ?>

<style>
  body{
    /*margin-top:20px;*/
    color: #1a202c;
    text-align: left;
    background-color: white;    
  }
  .main-body {
    padding: 15px;
  }
  .card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
  }

  .card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
  }

  .gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
  }

  .gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
  }
  .mb-3, .my-3 {
    margin-bottom: 1rem!important;
  }

  .bg-gray-300 {
    background-color: #e2e8f0;
  }
  .h-100 {
    height: 100%!important;
  }
  .shadow-none {
    box-shadow: none!important;
  }
</style>

