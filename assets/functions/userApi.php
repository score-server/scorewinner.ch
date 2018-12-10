<?php
function getUsers() {
    if (!empty($_COOKIE["MovieScore_session_id"])) {
        $session = $_COOKIE["MovieScore_session_id"];
        if ($session !== null) {
            $url = "https://movie.scorewinner.ch/api/user/?sessionId=" . $session;
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $url,
            ));
            $result = curl_exec($curl);
            curl_close($curl);
            $user = json_decode($result, true);
            return $user;
        } else {
            $warn = "Error, something went wrong";
            return$warn;
        }
    } else {
        $warn = "Error, something went wrong";
        return$warn;
    }
}