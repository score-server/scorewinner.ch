<?php include '../assets/config/database-variables.php' ; ?>
<?php include 'backend-header.php' ?>
<?php include '../assets/functions/admin-check.php'; ?>
<?php include '../assets/functions/register-function.php'; ?>


<div class="col-md-9 text-center">
    <h2 class="mb-3">Register new Users</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-signin">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label for="confirm_password" class="sr-only">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="form-check text-left mb-3">
            <input type="checkbox" name="admin_checkbox" value="true" title="admin_checkbox" id="admin_checkbox" class="form-check-input">
            <label class="form-check-label" for="admin_checkbox">is Admin</label>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Create User">
        </div>
    </form>
</div>
</div>
</div>
<?php include '../components/footer.php'; ?>
