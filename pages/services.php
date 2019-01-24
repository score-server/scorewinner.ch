<?php include '../components/header.php'; ?>
<?php include '../assets/functions/serverCheck.php'; ?>

<div class="container">
    <div class="body row">
        <div class="col-md-12">
            <h1>Shows the status of our services</h1>
            <hr>
        </div>
        <div class="col-md-6">
            <p class="lead">
                Website:<br>
                <code><a href="https://scorewinner.ch" class="code-link">scorewinner.ch</a></code>
            </p>
            <?php
            $ip = "scorewinner.ch";
            $port = 2500;
            $status = checkServerStatus($ip, $port);
            if ($status) {
                echo '<p class="alert alert-success" role="alert">Service is online</p>';
            } else {
                echo '<p class="alert alert-danger" role="alert">Service is offline</p>';
            }
            ?>
            <hr>
        </div>
        <div class="col-md-6">
            <p class="lead">
                Website:<br>
                <code><a href="https://movie.scorewinner.ch" class="code-link">movie.scorewinner.ch</a></code>
            </p>
            <?php
            $ip = "scorewinner.ch";
            $port = 8081;
            $status = checkServerStatus($ip, $port);
            if ($status) {
                echo '<p class="alert alert-success" role="alert">Service is online</p>';
            } else {
                echo '<p class="alert alert-danger" role="alert">Service is offline</p>';
            }
            ?>
            <hr>
        </div>
    </div>
</div>
<?php include '../components/footer.php'; ?>
