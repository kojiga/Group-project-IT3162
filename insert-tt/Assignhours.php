<?php
$connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, 'phpcrud');
$result=mysqli_query($connection,"Select * from subject");

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
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">

    table, td, th {
  border: 1px solid;

  

}
td{
  color:lightgray;
}

table {
  table-layout: fixed;
  border-collapse: collapse;
}
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




<div class="split right" >
<div class="login-box">
<form action="" method="post">
    
  <div class="user-box">
  <br>
  <input type="text" name="subject" id="subject" required="">
      <label>Add your subjects:</label>
    </div>
    <div class="user-box">
  <br>
  <input type="text" name="subject_code" id="subject" required="">
      <label>Add your subjects code:</label>
    </div>
    <div class="user-box">
  
      <br>
      <br>
      <input type="text" name="Allocated_hours" id="hour" required="">
    <br>
      <label>How many  hours have you allocated for study?:</label>
    </div>
    
  
  <span style="padding-left:150px;"><button type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Set hours
    </button></span>
  </form>
  
</div>
</div>

<?php
if(isset($_POST['submit'])){
   $a = $_POST['subject_code'];
  $b = $_POST['subject'];
    $c = $_POST['Allocated_hours'];
    
    $sql = "INSERT INTO subject VALUES ('','$a','$b','$c',0)";
  $res=mysqli_query($connection,$sql);
  
  if($res){
  header("location:Assignhours.php");
  }
}
?>

<div class="split left" >
<div class="login-box" style="width:500px;">
  
   <form>
    <div class="user-box">
   <table style="table-layout: fixed">
  <tr>
  <th style="width:90px;color:white">Code</th>
  <th style="width:190px;color:white">Subject</th>
  <th style="width:120px;color:white">AssignHours</th>
  
  </tr>
  </table>
      <?php
    
      
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
    
    
    ?>
  <table>
  <tr>
  <td style="width:90px;" ><?php echo $row['subject_code'] ?></td>
  <td style="width:190px;"><?php echo $row['subject'] ?></td>
  <td style="width:120px;"><?php echo $row['Allocated_hours'] ?></td>
  </tr>
  </table>
  
  <?php
  }
 
  ?>
 
      
      
    </div>
  </form>
</div>
</div>

</body>
</html>