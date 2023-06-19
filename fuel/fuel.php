<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuel Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image" href="../car2.png">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fuel.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <br>
                        <br>
                        <div class="login-box">
                            <h2 class="pull-left">Fuel Cost Details
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            </h2>
                        </div>
                    </div>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Entry</a>
                    <br>
                    <br>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM fuel";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                                echo "<th>S.No</th>";
                                echo "<th>Date</th>";
                                echo "<th>KM</th>";
                                echo "<th>Fuel Type</th>";
                                echo "<th>Amount</th>";
                                echo "<th>Liter</th>";
                                // echo"<th>Action</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['s.no'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['km'] . "</td>";
                                echo "<td>" . $row['fuel'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "<td>" . $row['liter'] . " <span>&#8467;</span></td>";
                                // echo "<td>"; echo '<a href="delete.php?id='. $row['s.no'] .'data-toggle="tooltip" style="color:white"><span class="fa fa-edit" style="color:white";></span> &nbsp;Delete</a>';
                                // echo "</td>";
                            echo "</tr>";
                        }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>