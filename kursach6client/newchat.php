<?php
if ( ! empty($_POST['name'])){
    $name = $_POST['name'];
}
    $url = 'http://localhost:8080/newchat';
$data = [
    'usernam'      => $name
];
httpPost($url, $data);
function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    var_dump($response);
    return $response;
}

?>