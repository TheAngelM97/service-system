<?php
include_once 'includes/head.php';
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Register</h3>
        </div>
        <div class="card-body">
            <form action="auth/register.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="card-footer">
            Already have an account ? <a href="login-form.php">Login</a>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
