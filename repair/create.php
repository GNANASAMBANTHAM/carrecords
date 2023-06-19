<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="create.css">
    <link rel="icon" type="image" href="../car2.png">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <div class="login-box">
                        <h2 class="pull-left">Create new entry
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        </h2>
                    </div>
                    <br>
                    <br>
                    <form action="insert.php" method="post">
                    <div class="container">
                        <div class="form-row">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group col-md-4">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group col-md-4">
                                    <label>Km</label>
                                    <input name="km" class="form-control" value="KM ">
                                </div>
                            
                        </div>
                        <div class="form-row">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group col-md-4">
                                    <label for="inputState">Problem</label>
                                    <input name="problem" class="form-control">
                                   
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group col-md-4">
                                    <label>Amount</label>
                                    <input name="amount" class="form-control" value="&#8377; ">
                                </div>
                        </div>
                        <br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        <a href="create.php" class="btn btn-secondary ml-2">Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>