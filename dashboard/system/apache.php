<?php

shell_exec("cp /var/log/apache2/access.log ./1access.log");

$myfile = "./1access.log";
$command = "tac $myfile > ./myfilereversed.txt";
exec($command);

$lines =array();
$currentRow = 0;
$numRows = 20;  // stops after this number of rows
$handle = fopen("./myfilereversed.txt", "r");
while (!feof($handle) && $currentRow <= $numRows) {
   $currentRow++;
   $buffer = fgets($handle, 4096);
  array_push($lines,$buffer);
}
fclose($handle);



//$file = fopen("/var/log/apache2/access.log","r");

$dic = [];
$urls = [];
$status = [];

foreach($lines as $f)
//while(! feof($file))
  {
  	
  $tmp = explode(" ",$f);

  if(!array_key_exists($tmp[0], $dic))
 {

  $dic[$tmp[0]] = 1;
  
  }

  else{
  	$dic[$tmp[0]]+=1;
  }


  if(!array_key_exists($tmp[6], $url))
 {

  $urls[$tmp[6].",".$tmp[1]] = 1;
  
  }

  else{
    $urls[$tmp[6].",".$tmp[1]]+=1;
  }


  	if(!array_key_exists($tmp[8], $status))
 {

  $status[$tmp[8]] = 1;
  
  }

  else{
  	$status[$tmp[8]]+=1;
  }



  }



fclose($file);


$arr = array();
foreach($dic as $k=>$v){
array_push($arr,array("ip"=>$k,"count"=> $v));
}


$arr1 = array();
foreach($urls as $k=>$v){
array_push($arr1,array("url"=>$k,"count"=> $v));
}

$arr2 = array();
foreach($status as $k=>$v){
array_push($arr2,array("status"=>$k,"count"=> $v));
}

//asd


$a = array("data"=>$arr,"urls"=>$arr1,"status"=>$arr2);


$ttt = json_encode($a);



echo $ttt;