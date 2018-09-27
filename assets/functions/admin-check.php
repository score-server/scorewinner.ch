<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    if (isset($_SESSION["admin"]) && $_SESSION["admin"] == "false") {
        echo '<script language="javascript">window.location.href ="../../backend/dashboard.php"</script>';
        exit;
    }
}elseif(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo '<script language="javascript">window.location.href ="/pages/login.php"</script>';
    exit;
}
