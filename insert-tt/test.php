<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php



function mul($t0,$n){
$your_time = $t0;
date_default_timezone_set ("UTC");
$secs = strtotime($your_time ) - strtotime("00:00:00");
return date("H:i:s",$secs * $n);
}

   $val=mul("01:52:00",2);
   echo $val;
?>
</body>
</html>