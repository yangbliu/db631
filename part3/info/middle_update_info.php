<?php
$data_json = file_get_contents('php://input');
//var_dump($data_json);

$url = "http://afsaccess1.njit.edu/~jjl37/database/part3/info/back_update_info.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

echo $result;

?>