<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:lhomepage.php");
}
include('tnavbar.php');
include('../landlord/addproperty-config.php');
// include('landlord-config.php');
// include('config\config.php');
?>
<link href="../styles.css" type="text/css" rel="Stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<br>
<br>
<br>

<div class="container">
  <?php 
  $u_email = $_SESSION['email'];
  $sql= "SELECT * FROM addProperty LIMIT 1";
  $result=mysqli_query($db,$sql);


  // $sql="SELECT * from addProperty where PropertyId='$PropertyId'";
  // $result=mysqli_query($db,$sql);

  if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){
      $PropertyId = $rows['PropertyId'];

     ?>
     <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <center><h3 style="font-weight: bold; text-align: center;">Listed Properties</h3></center>
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
                <h6 class="mb-0">Location:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['location']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">House Number:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['houseNo']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Category:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['category']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Rooms:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['rooms']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Bathrooms:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['bathrooms']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Kitchen:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['kitchen']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Living Room:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['lroom']; ?>
              </div>
            </div>
            
            <hr><div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Description:</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['pdescription']; ?>
              </div>
            </div>
            <hr><div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Price(GHC):</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                <?php echo $rows['price']; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-12">
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

<script>
    $(function () {
      let headerElem = $('header');
      let logo = $('#logo');
      let navMenu = $('#nav-menu');
      let navToggle = $('#nav-toggle');

      $('#properties-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<a href="#" class="slick-arrow slick-prev">previous</a>',
        nextArrow: '<a href="#" class="slick-arrow slick-next">next</a>',
        responsive: [
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 530,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          }
        }
        ]
      });

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
          logo.css('color', '##000');
          headerElem.css('background', 'transparent');
          navToggle.css('bordre-color', '#fff');
          navToggle.find('.strip').css('background-color', '#fff');
        }

        headerElem.css(scrollTop >= 200 ? {'padding': '0.5rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
      });

      $(document).trigger('scroll');
    });
function Validate() {
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'addproperty-config.php',
        data =  {'property_delete': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
  }

</script>   