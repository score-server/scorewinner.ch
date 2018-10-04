<?php foreach ($servers as $server) {
    $version = $server[0];
    $ip = $server[1];
    $port = $server[2];
?>
<div class="col-md-6">
    <p class="lead">
        IP Adress:<br>
        <code><?php echo $ip .":". $port ?></code>
    </p>
    <p>
        Currently running <?php echo $version ?>
    </p>
    <?php
    $status = checkServerStatus($ip, $port);
    if ($status) {
        echo '<p class="alert alert-success" role="alert">Server is online</p>';
    } else {
        echo '<p class="alert alert-danger" role="alert">Server is offline</p>';
    }
    ?>
    <hr>
</div>
<?php } ?>
