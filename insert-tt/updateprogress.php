<?php
include_once('connection.php');



$sql = "SELECT * FROM subject";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM subject";
$result2 = $conn->query($sql2);





?>



<html>
<head>
  <title>progress</title>
  <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/design.css">
    
<link rel="stylesheet" href="css/sidenav.css" type="text/css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style >
      
    
    .fixed-header, .fixed-footer{
        

               
        background: #004578;
        padding: 10px;
        
        color: #fff;
        padding-left:500px; 
       
        
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    
  </style>

</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">UOV</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="schedule.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Event Calender</span>
          </a>
        </li>
        <li>
          <a href="index.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Class Timetable</span>
          </a>
        </li>
        <li>
          <a href="generatett.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Study plan</span>
          </a>
        </li>
        <li>
          <a href="updateprogress.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Update progress </span>
          </a>
        </li>
        <li>
          <a href="Assignhours.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Assign hours</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div class="fixed-header" style = "position:fixed; left:240px;width:100%">
        <div class="container">
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </nav>
        </div>
    </div>


<div class="split right">
<div class="login-box">
  <h2>Update</h2>
  <form action="" method="post">
    <div class="user-box">
       
      <p style="color:white">Choose the subject:</p>
    
        


     
      <select name="subjects"  style="width:200px">
    
    <?php
    while ($row = mysqli_fetch_array($result)) {
    
        echo "<option value='" . $row['subject_code'] . "'>" . $row['subject_code'] . "</option>";
    }
    ?>        
</select>
      
      
      
    </div>
  <br>
  <label style="color:white">How many hours do you study?</label>
  <div class="user-box">
  
  
  <input type="text" name="hours" id="hour" required="">
  
  </div>
    <span style="padding-left:150px;"><button type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Set hours
    </button>
   
  
  </form>
</div>
</div>

<?php

$sql = "SELECT * FROM subject";
$result = $conn->query($sql);






if(isset($_POST['submit'])){
  
  
    $first_name = $_POST['subjects'];
    $last_name = $_POST['hours'];
    $sql5 = "SELECT study_hours from subject where subject_code='$first_name'";
    $result5 = $conn->query($sql5);
    
    
    $data=$result5->fetch_assoc();
    $val=$last_name+$data['study_hours'];
    
    $sql4 = "UPDATE subject SET study_hours='$val' WHERE subject_code='$first_name'";

    $res=$conn->query($sql4);
    
  
  if($res){
  header("location:updateprogress.php");
  }
    
    
}
?>


<div class="split left">
<div class="login-box">
  
  <form>
  
    <div class="user-box">
       
      <?php
    
      if ($result2->num_rows > 0) {
      
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    $val=($row['study_hours']/$row['Allocated_hours'])*100;
    $val2=number_format((int)$val);
   
    
    ?>
  
  

 <p style="width:<?php echo $val2?>%;font-size: 12px;color:white" data-value="<?php echo $val2."" ?>"><?php echo $row['subject_code'] ?></p>
 
    <progress style="height:8px;font-weight: 10px"  max="<?php echo $row['Allocated_hours'] ?>" value="<?php echo $row['study_hours'] ?>" class="html5">
      <!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
    </progress>


  <?php
  }
} else {
  echo "0 results";
}
  ?>
 
      
      
   
  
  
  </form>
</div>
</div>
</div>
</body>
</html>