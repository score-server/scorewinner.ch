<?php
$user = getCurrentUser($session);

if(!isset($user)){
    echo '<script language="javascript">window.location.href ="/pages/login.php"</script>';
    exit;
}
