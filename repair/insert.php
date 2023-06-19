<?php 
        $serverdate = "localhost";
        $userdate = "root";
        $password = "";
        $db = "cardetails";
        $port= 3308;
        $conn = mysqli_connect($serverdate,$userdate,$password,$db,$port);
        if(!$conn)
       {	
        die('connecion failed'.mysqli_connect_error());
       }
?>

<?php
// include_once 'connection.php';
if(isset($_POST['submit']))
{
		$date = $_POST['date'];
		$km = $_POST['km'];
		$problem = $_POST['problem'];
		$amount = $_POST['amount'];
		$sql = "INSERT INTO `repair`(`s.no`, `date`, `km`, `problem`, `amount`) VALUES (NULL,'$date','$km','$problem','$amount')";
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Successfully Submitted!'); window.location.href='repair.php';</script>";}
			else
			{
			echo "ERROR: Hush! Sorry" .$sql. " 
			". mysqli_error($conn);
			}
		
		// Close connection
		mysqli_close($conn);
	}
?>
