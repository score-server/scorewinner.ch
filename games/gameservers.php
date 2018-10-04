<?php include '../components/header.php'; ?>
<?php include '../assets/functions/serverCheck.php'; ?>
<?php include '../assets/config/servers.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Gameservers</h1>
            <p class="text-muted">
                All servers have a Whitelist, please contact scorewinner if you want to join.
            </p>
            <hr>
        </div>
        <?php include "../partials/serverStatusCard.php"; ?>
    </div>
</div>
<?php include '../components/footer.php'; ?>
