<?php
    try {
        $conn= mysqli_connect('localhost','root','','session');
        // echo "Connection Successfull";
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }