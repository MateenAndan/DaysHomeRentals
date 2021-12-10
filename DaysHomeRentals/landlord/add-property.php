<?php 
session_start();
if(!isset($_SESSION["email"])){
 header("location:lhomepage.php");
}

include("lnavbar.php");
// include("addproperty-config.php");
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
  
  <center><h3>Add Property</h3></center>
  <form method="POST" action="addproperty-config.php" enctype="  multipart/form-data">
    <div class="form-group">
      <label for="location">Location:</label>
      <input type="text" class="form-control" id="location" placeholder="Enter Location of Property" name="location">
    </div>
    <div class="form-group">
      <label for="houseNo">HouseNo:</label>
      <input type="text" class="form-control" id="houseNo" placeholder="Enter the House Number" name="houseNo">
    </div>
    <div class="form-group">
     <label for="category">Category:</label>
     <select class="form-control" name="category">
        <option value="">--Select Property Type--</option>
        <option value="House">House</option>
        <option value="Apartment">Apartment</option>
      </select>
    </div>                      
    <div class="form-group">
      <label for="rooms">Total No. of Rooms:</label>
      <input type="number" class="form-control" id="rooms" placeholder="Enter Number of Rooms" name="rooms">
    </div>
    <div class="form-group">
      <label for="bathrooms">No. of Bathrooms:</label>
      <input type="number" class="form-control" id="bathrooms" placeholder="Enter Number of Bathrooms" name="bathrooms">
    </div>
    <div class="form-group">
     <label for="kitchen">Kitchen:</label>
     <select class="form-control" name="kitchen">
        <option value="">--Select whether there is a Kitchen--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div> 
    <div class="form-group">
     <label for="lroom">Living Room:</label>
     <select class="form-control" name="lroom">
        <option value="">--Select whether there is a living room--</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div> 
    
    <div class="form-group">
      <label for="pdescription">Full Description:</label>
      <textarea type="comment" class="form-control" id="pdescription" placeholder="Property Description" name="pdescription"></textarea>
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="price" class="form-control" id="price" placeholder="Enter Price (GHC)" name="price">
    </div>

    <input name="lat" type="text" id="lat" hidden>
    <input name="lng" type="text" id="lng" hidden>
    <br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property" name="addProperty">
    </div>
  </form>
  <br><br>
</div>

<script>
  $(function () {
    let headerElem = $('header');
    let logo = $('#logo');
    let navMenu = $('#nav-menu');
    let navToggle = $('#nav-toggle');

    $(document).scroll(() => {
      let scrollTop = $(document).scrollTop();

      if (scrollTop > 0) {
        navMenu.addClass('is-sticky');
        logo.css('color', '#000');
        headerElem.css('background', '#fff');
        navToggle.css('border-color', '#000');
        navToggle.find('.strip').css('background-color', '#000');
      } else {
        navMenu.removeClass('is-sticky');
        logo.css('color', '#000');
        headerElem.css('background', 'transparent');
        navToggle.css('bordre-color', '#fff');
        navToggle.find('.strip').css('background-color', '#fff');
      }

      headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
    });

    $(document).trigger('scroll');
  });
</script>   