<?php  
session_start();
if(!isset($_SESSION["email"])){
  header("location:lhomepage.php");
}
include("../config/config.php");

if(isset($_POST['update']))
 {
    $email= $_SESSION['email'];
    $pname=$_POST['pname'];
    $email=$_POST['email'];
    $select="SELECT * from Landlord where email='$email'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['email'];
    if($res === $email)
    {
   
       $update = "UPDATE Landlord set pname='$pname',email='$email' where email='$email'";
       $sql2=mysqli_query($db,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:landlord-profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:lupdate.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:lupdate.php');
    }
 }
?>