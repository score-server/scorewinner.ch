<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    if (isset($_SESSION["admin"]) && $_SESSION["admin"] == "false") {
        echo '<script language="javascript">window.location.href ="/backend/overview.php"</script>';
        exit;
    }
}elseif(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../pages/login.php");
    exit;
}
