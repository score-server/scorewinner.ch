<?php include ("../assets/config/database-variables.php"); ?>
<?php include '../components/header.php'; ?>
<?php include '../assets/functions/admin-check.php'; ?>
<?php include '../assets/functions/register-function.php'; ?>


<div class="container text-center wrapper">
    <img class="mb-4" src="../assets/images/logo_black.png" alt="" width="120px" height="120px">
    <h1 class="h3 mb-3 font-weight-normal">Register new Users</h1>

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
            <input type="submit" class="btn btn-primary btn-block" value="Submit">
        </div>
    </form>
</div>
<?php include '../components/footer.php'; ?>
