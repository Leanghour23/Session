<?php include '../page/header.php' ?>
<a href="../index.php">Back to Home</a>
    <div class="container mt-4 p-4 bg-light rounded w-50">
        <h1 class="text-center">Register</h1>
        <form action="insert.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <p class="text-center">Already have an account? <a href="login.php">Login here</a></p>
            <button name="register" class="btn btn-primary d-flex mx-auto">Register</button>
        </form>
</div>
<?php include '../page/footer.php' ?>