<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>progress</title>
  <style type="text/css">
      td{

        background-color: white;
      }

  </style>
  <style type="text/css">
        
        .fixed-header, .fixed-footer{
        

               
        background: #004578;
        padding: 10px;
        
        color: #fff;
        padding-left:500px; 
       
        
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
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/stylenav.css">
    
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
          <a href="#">
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
    <div class="modal-header"style="background:#003152">
</div>

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:#003152;color:white">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Time </label>
                            <input type="time" name="time" class="form-control" placeholder="Enter Time">
                        </div>

                        <div class="form-group">
                            <label> Monday </label>
                            <input type="text" name="monday" class="form-control" placeholder="Enter the subject code Eg:IT1214(p)">
                        </div>

                        <div class="form-group">
                            <label> Tuesday </label>
                            <input type="text" name="tuesday" class="form-control" placeholder="Enter the subject code Eg:IT1214(p)">
                        </div>

                        <div class="form-group">
                            <label> Wednesday </label>
                            <input type="text" name="wednesday" class="form-control" placeholder="Enter the subject code Eg:IT1214(p)">
                        </div>
						<div class="form-group">
                            <label> Thursday </label>
                            <input type="text" name="thursday" class="form-control" placeholder="Enter the subject code Eg:IT1214(t)">
                        </div>
						<div class="form-group">
                            <label> Friday </label>
                            <input type="text" name="friday" class="form-control" placeholder="Enter the subject code Eg:IT1214(p)">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Time </label>
                            <input type="text" name="time" class="form-control" placeholder="Enter Time">
                        </div>

                        <div class="form-group">
                            <label> Monday </label>
                            <input type="text" name="monday" class="form-control" placeholder="Enter the subject code">
                        </div>

                        <div class="form-group">
                            <label> Tuesday </label>
                            <input type="text" name="tuesday" class="form-control" placeholder="Enter the subject code">
                        </div>

                        <div class="form-group">
                            <label> Wednesday </label>
                            <input type="number" name="wednesday" class="form-control" placeholder="Enter the subject code">
                        </div>
						<div class="form-group">
                            <label> Thursday </label>
                            <input type="number" name="thursday" class="form-control" placeholder="Enter the subject code">
                        </div>
						<div class="form-group">
                            <label> Friday </label>
                            <input type="number" name="friday" class="form-control" placeholder="Enter the subject code">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="fname"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron">
           
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal" style="background:#003152">
                        ADD DATA
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'phpcrud');

                $query = "SELECT * FROM student";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="" style="background:#003152">
                        <thead>
                            <tr>
							 <th scope="col"style="color:white"> id</th>
                                <th scope="col" style="color:white"> Time</th>
                                <th scope="col"style="color:white">Monday</th>
                                <th scope="col" style="color:white">Tuesday</th>
                                <th scope="col" style="color:white"> Wednesday </th>
                                <th scope="col"style="color:white"> Thursday </th>
								<th scope="col"style="color:white">Friday</th>
                                
                                <th scope="col" style="color:white"> EDIT </th>
                                <th scope="col"style="color:white"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['time']; ?> </td>
                                <td> <?php echo $row['monday']; ?> </td>
                                <td> <?php echo $row['tuesday']; ?> </td>
                                <td> <?php echo $row['wednesday']; ?> </td>
								<td> <?php echo $row['thursday']; ?> </td>
                                <td> <?php echo $row['friday']; ?> </td>
                                
                                <td>
                                    <button type="button" class="btn btn-success editbtn"style="background:#003152" > EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"style="background:#003152"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#monday').val(data[1]);
                $('#tuesday').val(data[2]);
				$('#wednesday').val(data[3]);
                $('#thursday').val(data[4]);
                $('#friday').val(data[5]);
            });
        });
    </script>

</div>


</body>
</html>