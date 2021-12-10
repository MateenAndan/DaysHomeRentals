<?php 
session_start();
if(isset($_SESSION["email"])){
  header('index.php');
}
include("navbar.php");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="split-screen">

        <div class = "left">
            
            <section class = "copy">
                <h1>Log In</h1>            
            </section>
        </div>  
        <div class ="right">
            <div class="col-md-12 sign-up" style="text-align: center;">
                <h3 style="font-weight: bold;">How do you want to Login?</h3>
                <p>If you want to login as a tenant click on the "Tenant Login" button, otherwise click on the "Landord Login" button.</p>
                <button type="submit" class="btn btn-primary btn-circle btn-sm"  onclick="window.location.href='tenant/tenant-login.php'" style="width:200px;">Tenant Login</button>
                <button type="submit" class="btn btn-primary btn-circle btn-sm"  onclick="window.location.href='landlord/landlord-login.php'" style="width:200px;">Landlord Login</button>
                
            </div>

        </div>
    </div>
</body>


<style>
    h1{
        font-size: 2.25rem;
        font-weight: 700;
        color: black;
    }

    h2{
        font-size: 2.25rem;
        font-weight: 700;
    }

    .split-screen{
        display: flex;
    }

    .left{
        height: 200px;
    }
    .left, .right{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .left{
        background: url(images/madd.jpg);
        background-size: cover;        
    }
    
}
.left .copy{
    color: white;
    text-align: center;
}
.left p {
    font-weight: 400;
}

.btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 51px;
            font-size: 12px;
            text-align: center;
}

@media screen and (min-width: 900px){
    .split-screen {
        flex-direction: row;
        height: 100vh;
    }
    .left,
    .right{
        display: flex;
        width: 50%;
        height: auto;
    }
}

</style>








<!-- <section class="container-fluid sign-in-form-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 sign-up" style="text-align: center;">
                <h3 style="font-weight: bold;">How do you want to Login?</h3>
                <p>If you want to login as a tenant click on the "Tenant Login" button, otherwise click on the "Landord Login" button.</p>
                <button type="submit" class="btn btn-primary"  onclick="window.location.href='tenant-login.php'" style="width:200px;">Tenant Login</button>
                <button type="submit" class="btn btn-primary"  onclick="window.location.href='landlord-login.php'" style="width:200px;">Landlord Login</button>
                
            </div>
            
        </div>
    </div>
</section> -->