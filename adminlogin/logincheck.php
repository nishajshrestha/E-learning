<?php
include "conn.php";

session_start();

//user1 form ko name
if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];
//user chai database 
    $sql="select * from adminlogin where email = '$username' and pass = '$password'";
    $query=mysqli_query($con,$sql);
 

    $row=mysqli_num_rows($query);
        if($row==1){
            echo "login successful";
            $_SESSION['user']=$username;
            header('location:dashboard.php');
            
        }
        else{
            echo "login failed";
    
        }

    }


?>