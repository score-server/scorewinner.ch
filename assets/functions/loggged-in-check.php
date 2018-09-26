<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    echo '<script language="javascript">window.location.href ="/index.php"</script>';
    exit;
}
