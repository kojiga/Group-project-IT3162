<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'phpcrud');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $time = $_POST['time'];
        $monday = $_POST['monday'];
        $tuesday = $_POST['tuesday'];
        $wednesday = $_POST['wednesday'];
		$thursday = $_POST['thursday'];
		$friday = $_POST['friday'];

        $query = "UPDATE student SET time='$time', monday='$monday', tuesday='$tuesday', wednesday=' $wednesday',thursday=' $thursday',friday=' $friday' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>