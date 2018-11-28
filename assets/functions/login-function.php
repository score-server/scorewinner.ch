<?php
if (isset($_POST["name"]) && isset( $_POST["password"]))
{
//define vars for post request
    $name = $_POST["name"];
    $password = $_POST["password"];
    login($name, $password);
}
// Login & Logout functions
function post_request($url, array $params)
{
    $query_content = http_build_query($params);
    $fp = @fopen($url, 'r', FALSE, // do not use_include_path
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
    if ($fp === FALSE)
    {
        error_reporting(E_ERROR | E_PARSE);
        fclose($fp);
        return false;
    }
    else
    {
        $result = stream_get_contents($fp); // no maxlength/offset
        fclose($fp);
        return $result;
    }
}

//api call and call function for cookie storage
function login($name, $password)
{
    $response = post_request("http://scorewinner.ch:8081/api/login", array("name" => $name, "password" => $password));
    if ($response === false)
    {
        echo '<script type="text/javascript">displayError()</script>';
    }
    setCookies($response);
}

//Store Session ID in cookie
function setCookies($response)
{
    setcookie('MovieScore_session_id', $response, time()+3600, "/");
    echo '<script type="text/javascript">location.href = "../../pages/login.php";</script>';
}
