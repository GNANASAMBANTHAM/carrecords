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
		$fuel = $_POST['fuel'];
		$amount = $_POST['amount'];
		$liter = $_POST['liter'];
		$sql = "INSERT INTO `fuel`(`s.no`, `date`, `km`, `fuel`, `amount`, `liter`) VALUES (NULL,'$date','$km','$fuel','$amount','$liter')";
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Successfully Submitted!'); window.location.href='fuel.php';</script>";}
			else
			{
			echo "ERROR: Hush! Sorry" .$sql. " 
			". mysqli_error($conn);
			}
		
		// Close connection
		mysqli_close($conn);
	}
?>
