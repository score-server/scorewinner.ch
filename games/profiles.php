<?php include '../components/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Gaming & Discord</h1>
                <p class="text-muted">We all are gamers and are often on our Discord</p>
                <hr>
            </div>
            <div class="col-md-12 col-lg-8">
                <h2>Steam Accounts</h2>
                <p class="text-muted">Steam Profiles of the Members of the ScoreServer Group</p>
                <div class="row" id="steamList">
                    <?php
                        $uri = 'https://steamcommunity.com/groups/ScoreServer/memberslistxml/?xml=1';
                        $response = file_get_contents($uri);
                        $items_names = json_encode((array)simplexml_load_string($response));
                        echo "<script> getSteamGroup( ". $items_names .");</script>";
                    ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <h2>Discord server</h2>
                <p class="text-muted">If you want to join, contact scorewinner</p>
                <iframe src="https://discordapp.com/widget?id=355686076003778561&theme=dark" class="discord" allowtransparency="true" frameborder="0"></iframe>
            </div>
        </div>
    </div>

<?php include '../components/footer.php'; ?>