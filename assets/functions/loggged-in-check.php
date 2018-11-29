<?php
$session = $_COOKIE["MovieScore_session_id"];
if ($session !== null) {
    $url = "movie.scorewinner.ch/api/user/current?sessionId=" . $session;
    file_get_contents($url);
    $result = json_decode($url);
    var_dump($result);

    die;
    if(isset($user)){
        echo '<script language="javascript">window.location.href ="/index.php"</script>';
        exit;
    }
}