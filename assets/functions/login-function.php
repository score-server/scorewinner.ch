<?php
include "API-functions.php";
// Call Login function
$name = $_POST["name"];
$password = $_POST["password"];
login($name, $password);

// Redirect to Dashboard page
echo '<script language="javascript">window.location.href ="../../backend/dashboard.php"</script>';
exit;
