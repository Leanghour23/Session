<?php include '../page/header.php' ?>
    <a href="../index.php">Back to Home</a>
    <div class="container mt-4 p-4 bg-light rounded w-50">
        <h1 class="text-center">login</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <p class="text-center">Don't have an account? <a href="register.php">Register here</a></p>
            <button class="btn btn-primary d-flex mx-auto">login</button>

        </form>
</div>
<?php include '../page/footer.php' ?>