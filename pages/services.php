<?php include '../components/header.php'; ?>
<?php include '../assets/functions/serverCheck.php'; ?>

<div class="container">
    <div class="body">
        <h1>Shows the status of our services</h1>
        <hr>
        <div>
            <p class="lead">
                IP Adress:<br>
                <code>movie.scorewinner.ch</code>
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
        </div>
    </div>
</div>
<?php include '../components/footer.php'; ?>
