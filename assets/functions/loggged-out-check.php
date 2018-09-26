<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo '<script language="javascript">window.location.href ="../pages/login.php"</script>';
    exit;
}
