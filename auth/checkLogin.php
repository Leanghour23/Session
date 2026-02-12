<?php
require '../connection.php';
session_start();    
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT password, is_admin FROM tbl_user WHERE email='$email'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['password']) {
        $_SESSION['is_admin'] = $row['is_admin'];
        if ($row['is_admin'] == 1) {
            header('location:../admin/dashboard.php');
        } else {
            header('location:../user/user.php');
        }
    } else {
        echo "<script>
        alert('khos hz ke ot sl vin te.....');
        window.location.href = '../auth/login.php';
    </script>";
        exit();
    }
}
