<?php include '../components/header.php'; ?>
    <script>
        $(document).ready( function () {
            getSteamProfiles();
        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <h1>Steam Accounts</h1>
                <div class="row" id="steamList">
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <h1>Our Discord</h1>
                <iframe src="https://discordapp.com/widget?id=355686076003778561&theme=dark" class="discord" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>
    </div>

<?php include '../components/footer.php'; ?>