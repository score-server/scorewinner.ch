<?php
$user = getCurrentUser();
if(isset($user)){
    echo '<script language="javascript">window.location.href ="/index.php"</script>';
    exit;
}
