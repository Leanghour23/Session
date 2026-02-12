<?php
include '../page/header.php';
session_start();
?>
<h1 class="text-center">Welcome To Home Page</h1>
<?php 
if (isset($_SESSION['email'])) {
    echo '
    <a href="../auth/logout.php" class="btn btn-danger text-center">Logout</a>
    ';
} else {
    echo '
    <a href="../auth/login.php" class="btn btn-primary text-center">Login</a>
    <a href="../auth/register.php" class="btn btn-success">Register</a>';
}
?>
<?php include '../page/footer.php';