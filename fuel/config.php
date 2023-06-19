<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "cardetails";
        $port= 3308;
        $conn = mysqli_connect($servername,$username,$password,$db,$port);
        if(!$conn)
       {	
        die('connecion failed'.mysqli_connect_error());
       }
?>
