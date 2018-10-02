<?php
include "API-functions.php";
// Call Login function
$name = $_POST["name"];
$password = $_POST["password"];
$response = login($name, $password);
 echo $response;
echo '<script language="JavaScript">localStorage.setItem("session_id", "' . $response["session_id"] . '" )</script>';
// Redirect to Dashboard page
echo '<script language="javascript">window.location.href ="../../backend/dashboard.php"</script>';
exit;
