<?php include '../assets/config/database-variables.php' ; ?>
<?php include 'backend-header.php' ?>
<div class="col-md-9">
    <h2>User List</h2>
    <ul class="list-group">
        <?php
        require_once "../assets/functions/dbConnect.php";
        $res = $link->query("SELECT * FROM users ORDER BY id ASC");
        $res->data_seek(0);
        while ($row = $res->fetch_assoc()) {
            echo '<div class="card mb-1"><div class="card-body">';
            if ($row["admin"] == "true") {
                echo '<i class="fas fa-user-tie"></i> ';
            }else {
                echo '<i class="fas fa-user"></i> ';
            }
            echo $row["username"] . '</div></div>';
        }
        ?>
    </ul>
</div>
<?php include '../components/footer.php'; ?>

