<?php
    require '../connection.php';
    if(isset($_POST['register'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $sql= "INSERT INTO tbl_user(name,email,password)
         VALUES('$name','$email','$password')";
        $ex= mysqli_query($conn,$sql);
        if($ex){
            header('location:login.php');
        } 
    }