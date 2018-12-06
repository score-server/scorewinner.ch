<?php
if (!empty($_COOKIE["MovieScore_session_id"])) {
    $session = $_COOKIE["MovieScore_session_id"];

    if ($session !== null) {
        $url = "https://movie.scorewinner.ch/api/user/current?sessionId=" . $session;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        $user = json_decode($result, true);

        if (isset($user['name'])) {
        }else{
            echo '<script language="javascript">window.location.href ="/pages/login.php"</script>';
            exit;
        }
    }
}else {
    echo '<script language="javascript">window.location.href ="/pages/login.php"</script>';
    exit;
}
