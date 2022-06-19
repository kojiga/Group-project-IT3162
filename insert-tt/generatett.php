<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        
        .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed;        
        background: #004578;
        padding: 10px;
        padding-left:500px;
        color: #fff;
        
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    </style>
  <title>progress</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
     <link rel="stylesheet" type="text/css" href="css/stylenav.css">
            

            
        </div>
        <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
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
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Timer</span>
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
    

    

<div style="padding-left:300px;">
<div class="modal-header">
</div>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"style="background:#003152;" >
                    <h5 class="modal-title" id="exampleModalLabel"style="color:white" >Time Table </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="generatecode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label>  Semester start </label>
                            <input type="date" name="start_date" class="form-control" placeholder="Enter Date">
                        </div>

                       <div class="form-group">
                            <label>  Semester end </label>
                            <input type="date" name="end_date" class="form-control" placeholder="Enter Date">
                        </div>
                        <div class="form-group">
                            <label>Study duration for 4 credit practical in hours</label>
                             <select class="form-control">
                                  <option value="">2</option>
                                  <option value="">1</option>
                                  <option value="">0.30</option>
                                  <option value="">1.30</option>
                                  
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Study duration for 4 credit theory in hours</label>
                                 <select class="form-control">
                                  <option value="">2</option>
                                  <option value="">1</option>
                                  <option value="">0.30</option>
                                  <option value="">1.30</option>
                                  
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Study duration for 3 credit practical in hours</label>
                             <select class="form-control">
                                  <option value="">2</option>
                                  <option value="">1</option>
                                  <option value="">0.30</option>
                                  <option value="">1.30</option>
                                  
                                </select>
                        </div>
                       
                         <div class="form-group">
                            <label>Study duration for 3 credit theory in hours</label>
                             <select class="form-control">
                                  <option value="">2</option>
                                  <option value="">1</option>
                                  <option value="">0.30</option>
                                  <option value="">1.30</option>
                                  
                                </select>
                            
                        </div>
                        <div class="form-group">
                            <label>Study duration for 2 credit theory in hours</label>
                             <select class="form-control">
                                  <option value="">2</option>
                                  <option value="">1</option>
                                  <option value="">0.30</option>
                                  <option value="">1.30</option>
                                  
                                </select>
                            
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary"style="background:#003152">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

   
   
    <div class="container">
        <div class="jumbotron" style="padding-top:40px;">
            
            <div class="card" >
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal" style="background:#003152">
                        Generate your study timetable
                    </button>
                </div>
            </div>


            <div class="card">
                <div class="card-body">

                    <img src="image/tt.jpg" style="width:900px">

                    //
                   
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>



   

    

    

</div>




</body>
</html>