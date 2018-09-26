<nav class="navbar navbar-expand-md navbar-light p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a class="navbar-brand" href="/">
        <img src="https://i.imgur.com/kHO4IKs.png" class="d-inline-block align-top nav-logo" alt="nav brand">
        scorewinner.ch
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cogs"></i> Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-item" href="/pages/services.php"><i class="fas fa-exclamation-triangle"></i> Service Status</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item nav-item" href="http://git.scorewinner.ch"><i class="fas fa-code-branch"></i> Git server</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item nav-item" href="http://files.scorewinner.ch"><i class="fas fa-folder-open"></i> Scorefile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item nav-item" href="http://movie.scorewinner.ch"><i class="fas fa-video"></i> MovieScore</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fab fa-steam"></i> Games
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-item" href="/games/profiles.php"><i class="fas fa-user"></i> Our Game Profiles</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item nav-item" href="/games/gameservers.php"><i class="fas fa-gamepad"></i> Gameservers</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/pages/team.php"><i class="fas fa-users"></i> Team</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php
            session_start();
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
                echo '<li><a class="nav-link text-dark" href="#"><i class="fas fa-user-tie"></i> ' . $_SESSION["username"] . ' </a></li>
                      <li><a class="nav-link text-dark" href="/pages/logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>';
            }
            else {
                echo '<li><a class="nav-link text-dark" href="/pages/login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>';
            }
            ?>
        </ul>
    </div>
</nav>

