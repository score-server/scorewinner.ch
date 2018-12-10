<div class="row">
    <div class="col-md-3">
        <div class="col-12">
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link" href="dashboard.php" role="tab"><i class="fas fa-info-circle"></i> Overview</a>
                <?php
                if(isset($user) && $user["role"] == 2){
                    echo '<a class="nav-link text-dark" href="register.php" role="tab"><i class="fas fa-user"></i> Create new Users</a>';
                }
                ?>
                <a class="nav-link" href="user-list.php" role="tab"><i class=" fa fa-users"></i> Users</a>
            </div>
        </div>
    </div>
