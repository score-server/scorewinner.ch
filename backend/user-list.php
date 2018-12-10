<?php include '../assets/functions/userApi.php'; ?>
<?php include 'backend-header.php'; ?>
<div class="col-md-9">
    <h2>User List</h2>
    <p>All Registered Users</p>
    <ul class="list-group list-group-flush">
    <?php
        $users = getUsers();
        if ($users != null) {
            foreach ($users as $user) {
                echo "<li class='list-group-item'>" . $user['name'] . "</li>";
            }
        }
    ?>
    </ul>
</div>
<?php include '../components/footer.php'; ?>
