<?php include '../assets/functions/login-function.php'; ?>
<?php include '../components/header.php'; ?>

<div class="container wrapper text-center">
    <img class="mb-4" src="../assets/images/logo_black.png" alt="" width="120px" height="120px">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <form action="login.php" method="post" class="form-signin">
        <div class="form-group">
            <label for="inputText" class="sr-only">Username</label>
            <input type="text" name="name" class="form-control" placeholder="name" required>
        </div>
        <div class="form-group ">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
    </form>
</div>
<?php include '../components/footer.php'; ?>
