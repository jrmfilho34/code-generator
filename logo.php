<?php

$handle = fopen("https://laravel.com/", "r");
$fp = fopen('data.blade.php', 'w');

while (!feof($handle)) {
   $buffer = fgets($handle);
   echo $buffer; 
   fwrite($fp, $buffer);
}

fclose($fp);
fclose($handle);










