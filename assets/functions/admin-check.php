<?php
$user = getCurrentUser();

if(isset($user) && $user["admin"] !== true) {
        echo '<script language="javascript">window.location.href ="../../backend/dashboard.php"</script>';
}
