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

  
   
                    

                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, 'phpcrud');

                    
              		$query2="SELECT subject_code from subject ";

              		$query_run2= mysqli_query($connection, $query2);

              		if($query_run2)
                     {
                    foreach($query_run2 as $row)
                    {
                    	 $arr[]=$row['subject_code'];
                    	
                    }
                }


$n = sizeof($arr);
for( $i=0;$i<$n;$i++){
echo $arr[$i];
}






                    $array=array("monday","tuesday","wednesday","thursday","friday");

                    for($x=0; $x < 5; $x=$x+1){
                        
                    $query="SELECT DISTINCT $array[$x] FROM student";
                    echo  "</br>";

                     $query_run = mysqli_query($connection, $query);
                     if($query_run)
                     {
                    foreach($query_run as $row)
                    {

                    	
                    	
                    	
                    	
                    	$sub[]=$row[$array[$x]];
                    	



                    	

                        



                    }

}

}

$x=sizeof($arr);
$m = sizeof($sub);

for( $k=0;$k<$n;$k++){
	$count=0;
for( $j=0;$j<$m;$j++){
		if($arr[$k]==$sub[$j]){
				$count=$count+1;
		}

   

}

if(substr($arr[$k], 5)==4){
                       if(substr($arr[$k], 7,1)=='p'){
                            $a=$count;
                            $hours='1:00';

                                  $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);

                                  $price=$a;
                                  $count=$hr*$price*15;


                       }
                       else{
                          $a=$count;
                           $hours='1:00';

                           $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);

                                  $price=$a;
                                  $count=$hr*$price*15;

                       }
                       
                   

  
  }
  else if(substr($arr[$k], 5)==3){
                       if(substr($arr[$k], 7,1)=='p'){
                            $a=$count;
                            $hours='1:00';

                                  $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);

                                  $price=$a;
                                  $count=$hr*$price*15;


                       }
                       else{
                          $a=$count;
                           $hours='1:00';

                           $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);

                                  $price=$a;
                                  $count=$hr*$price*15;

                       }
                       
                   

  
  }
 else if(substr($arr[$k], 5)==2){
            $a=$count;
            $hours='0:30';

                           $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);

                                  $price=$a;
                                  $count=$hr*$price*15;






 }
  echo "</br>" ;

  $query_out ="UPDATE subject SET Allocated_hours=$count WHERE subject_code='$arr[$k]'  ";
        $query_run_o = mysqli_query($connection, $query_out);

        
}

            ?>
  </body>
</html>
        
