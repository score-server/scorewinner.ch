<?php

/* User functions */

function getUser($userId)
{
    $json = file_get_contents("http://scorewinner.ch:8081/api/user/{$userId}");
    $user = json_decode($json);
    return $user;
}

function getCurrentUser($session)
{
    $json = file_get_contents("http://scorewinner.ch:8081/api/user/current");
    $user = json_decode($json);
    return $user;
}
function getUserList()
{
    $json = file_get_contents('http://scorewinner.ch:8081/api/user');
    $userList = json_decode($json);
    foreach ($userList as $user) {
        displayUser($user);
    }
}

function displayUser($user)
{
    echo '<div class="card mb-1"><div class="card-body">';
    if ($user->admin) {
        echo '<i class="fas fa-user-tie"></i> ';
    }else {
        echo '<i class="fas fa-user"></i> ';
    }
    echo $user->name;
    echo "</div></div>";
}

/* Login & Logout functions */
function post_request($url, array $params)
{
    $query_content = http_build_query($params);
    $fp = fopen($url, 'r', FALSE, // do not use_include_path
        stream_context_create([
            'http' => [
                'header' => [ // header array does not need '\r\n'
                    'Content-type: application/x-www-form-urlencoded',
                    'Content-Length: ' . strlen($query_content)
                ],
                'method' => 'POST',
                'content' => $query_content
            ]
        ]));
    if ($fp === FALSE) {
        fclose($fp);
        return json_encode(['error' => 'Failed to get contents...']);
    }
    $result = stream_get_contents($fp); // no maxlength/offset
    fclose($fp);
    return $result;
}

function login($name, $password)
{
    $response = post_request("http://scorewinner.ch:8081/api/login", array("name" => $name, "password" => $password));
    return $response;
}

function logout()
{
    $response = post_request("http://scorewinner.ch:8081/api/login/logout", array());
    return $response;
}
