<?php
$data = file_get_contents("/json/foodie-rev.json");
$json = json_decode($data, TRUE);
echo $json[0]['title'];
?>