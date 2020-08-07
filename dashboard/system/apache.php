<?php

$file = fopen("/var/log/apache2/access.log","r");
$dic = [];


while(! feof($file))
  {
  	$tmp = explode(" ",fgets($file));

  	if(!array_key_exists($tmp[0], $dic	))
 {

  $dic[$tmp[0]] = 1;
  
  }

  else{
  	$dic[$tmp[0]]+=1;
  }

  }

fclose($file);

var_dump($dic);


//$ttt = json_encode($result);



echo $ttt;