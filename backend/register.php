<?php include 'backend-header.php' ?>
<?php include '../assets/functions/admin-check.php'; ?>

<div class="col-md-9 text-center">
    <h2 class="mb-3">Register new Users</h2>

    <form action="../assets/functions/register-function.php" method="post" class="form-signin">
        <div class="form-group">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm_password" class="sr-only">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
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
