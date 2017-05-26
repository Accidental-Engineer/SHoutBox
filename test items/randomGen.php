<?php

$string='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz1234567890';
$string_shuff=str_shuffle($string);
$link=substr($string_shuff,0,16);
echo $link;


 ?>
