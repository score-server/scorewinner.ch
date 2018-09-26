<?php include ("../assets/config/database-variables.php"); ?>
<?php include '../components/header.php'; ?>
<?php require_once '../assets/functions/loggged-in-check.php'; ?>
<?php include '../assets/functions/login-function.php'; ?>

<div class="container wrapper text-center">
    <img class="mb-4" src="../assets/images/logo_black.png" alt="" width="120px" height="120px">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-signin">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label for="inputText" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
    </form>
</div>
<?php include '../components/footer.php'; ?>
