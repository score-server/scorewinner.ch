<?php
$session = "";
echo "<script>$session = localStorage.getItem('session_id');</script>";
$user = getCurrentUser($session);
if(isset($user)){
    echo '<script language="javascript">window.location.href ="/index.php"</script>';
    exit;
}
