<head>
    <link rel="icon" href="favicon.ico">   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<center>
            <h2><b>MyIP</b></h2>
<b><h4><?php
echo $_SERVER['REMOTE_ADDR'];
?>
</b>
</h4>
<p class="headline">
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
<br>
<b>
접속 국가/지역 : 
<?php $string = file_get_contents("https://api.ip.pe.kr/json/"); $json_a = json_decode($string, true); 
echo $json_a['country_code']; 
echo $json_a['country_name']['ko'];
?> /
<?php $user_ip = getenv('REMOTE_ADDR'); $geo = json_decode(file_get_contents("http://extreme-ip-lookup.com/json/$user_ip")); $city = $geo->city;    echo "$city"; ?> </b>
</center>
