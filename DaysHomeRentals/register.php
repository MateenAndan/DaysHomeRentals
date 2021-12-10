<?php 
session_start();
if(isset($_SESSION["email"])){
  header('C:\xampp\htdocs\DaysHomeRentals\index.php');
}
include("navbar.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
    <div class="split-screen">

        <div class = "left">
            <section class = "copy">
                <h1>Register</h1>            
            </section>
        </div>  
        <div class ="right">
            <div class="col-md-12 sign-up" style="text-align: center;">
                <h3 style="font-weight: bold;">How do you want to Sign Up?</h3>
                <p>If you want to sign up as a tenant click on the "Tenant Sign Up" button, otherwise click on the "Landlord Sign Up" button.</p>
                <button type="submit" class="btn btn-primary btn-circle btn-sm"  onclick="window.location.href='tenant/tenant-signup.php'" style="width:200px;">Tenant Sign Up</button>
                <button type="submit" class="btn btn-primary btn-circle btn-sm"  onclick="window.location.href='landlord/landlord-signup.php'" style="width:200px;">Landlord Sign Up</button>
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
        background: url(images/maddd.jpg);
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
