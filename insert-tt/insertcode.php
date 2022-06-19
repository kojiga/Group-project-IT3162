<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'phpcrud');

if(isset($_POST['insertdata']))
{
  $time = $_POST['time'];
        $monday = $_POST['monday'];
        $tuesday = $_POST['tuesday'];
        $wednesday = $_POST['wednesday'];
		$thursday = $_POST['thursday'];
		$friday = $_POST['friday'];

    $query = "INSERT INTO student VALUES ('','$time','$monday','$tuesday','$wednesday','$thursday','$friday')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>