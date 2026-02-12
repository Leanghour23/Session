<?php
include '../page/header.php';
session_start();
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1 ) {
    header('location:../auth/login.php');
    echo '
    <a href="../auth/logout.php" class="btn btn-danger text-center">Logout</a>
    ';
} else {
    echo '<h1 class="text-center">Welcome To Admin Dashboard</h1>';
    echo '
    <a href="../auth/login.php" class="btn btn-primary text-center  ">Login</a>
    <a href="../auth/register.php" class="btn btn-success">Register</a>
    ';
}
?>
<?php include '../page/footer.php';