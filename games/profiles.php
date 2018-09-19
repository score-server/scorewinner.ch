<?php include '../components/header.php'; ?>
    <script>
        $(document).ready( function () {
            getSteamProfiles();
        });
    </script>
    <div class="container">
        <div class="body">
            <h1>Steam Accounts</h1>
            <div class="row" id="steamList">
            </div>
        </div>
    </div>

<?php include '../components/footer.php'; ?>