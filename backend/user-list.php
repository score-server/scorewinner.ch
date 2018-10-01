<?php include 'backend-header.php'; ?>
<div class="col-md-9">
    <h2>User List</h2>
    <ul class="list-group">
    <?php
        getUserList();
        $user = [];
    ?>
    </ul>
</div>
<?php include '../components/footer.php'; ?>

