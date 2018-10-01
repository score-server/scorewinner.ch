<?php
    // call logout function
    include "../assets/functions/API-functions.php";
    logout();

    // Redirect to login page
echo '<script language="javascript">window.location.href ="login.php"</script>';
    exit;
