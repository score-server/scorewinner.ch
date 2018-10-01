<?php
$user = getCurrentUser();

if(!isset($user)){
    echo '<script language="javascript">window.location.href ="/pages/login.php"</script>';
    exit;
}
