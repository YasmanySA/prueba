
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apisandbox.enzona.net/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_POSTFIELDS, "scope=am_application_scope,enzona_business_payment,enzona_business_qr");

$headers = array();
$headers[] = 'Authorization: Basic bFlqZ29BMmZqRWptdGI0ZjJYVDd3bE50d2wwYTp1aF9hejhoMzh0QVFvOW9zTHpOZllZTzZRcEVh';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
$obj= json_decode($result);

 $accesstoken= $obj->access_token;
echo $accesstoken
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>